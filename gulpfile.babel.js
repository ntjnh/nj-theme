import gulp from 'gulp';

import dartSass from 'sass';
import gulpSass from 'gulp-sass';
const sass = gulpSass(dartSass);

import postcss from 'gulp-postcss';
import sourcemaps from 'gulp-sourcemaps';
import autoprefixer from 'autoprefixer';
import tailwind from 'tailwindcss';
import postcssNested from 'postcss-nested';

import cleanCSS from 'gulp-clean-css';

import webpack from 'webpack-stream';
import compiler from 'webpack';

import bsync from 'browser-sync';
const browserSync = bsync.create();

import { deleteAsync } from 'del';

const paths = {
    styles: {
        src: 'assets/scss/**/*.scss',
        cssSrc: 'assets/css/*.css',
        dest: 'build/css',
        delete: 'build/css/*.css'
    },
    scripts: {
        src: 'assets/js/**/*.js',
        dest: 'build/js',
        delete: 'build/js/*.js'
    }
};

export function styles() {
    return gulp.src(paths.styles.src)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(browserSync.stream());
};

export function css() {
    return gulp.src(paths.styles.cssSrc)
        .pipe(sourcemaps.init())
        .pipe(postcss([autoprefixer(), tailwind(), postcssNested()]))
        .pipe(sourcemaps.write('.'))
        .pipe(cleanCSS())
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(browserSync.stream());
}

export function scripts() {
    return gulp.src(paths.scripts.src)
        .pipe(webpack({
            mode: 'production',
            output: {
                filename: 'app.js',
                clean: true
            }
        }, compiler))
        .pipe(gulp.dest(paths.scripts.dest));
};

gulp.task('serve', function (done) {
    browserSync.init({
        proxy: "http://natejonah.local"
    });

    gulp.watch(paths.scripts.src).on("change", gulp.series(scripts, browserSync.reload));
    gulp.watch('assets/scss/**/*.scss', gulp.series(styles, css));
    gulp.watch("*.php").on("change", browserSync.reload);

    done();
});

export function clean() {
    return deleteAsync([paths.styles.delete, paths.scripts.delete]);
};

const watchSass = () => gulp.watch(paths.styles.src, gulp.series(styles, css));
const watchJs = () => gulp.watch(paths.scripts.src, scripts);

const build = gulp.series(clean, styles, css, scripts);
export const watch = gulp.series(styles, css, scripts, gulp.parallel(watchSass, watchJs));

export default build;
