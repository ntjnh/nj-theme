import gulp from 'gulp';

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
        src: 'assets/css/*.css',
        dest: 'build/css',
        delete: 'build/css/*.css'
    },
    scripts: {
        src: 'assets/js/**/*.js',
        dest: 'build/js',
        delete: 'build/js/*.js'
    }
};

export function css() {
    return gulp.src(paths.styles.src)
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
    gulp.watch(paths.styles.src).on("change", gulp.series(css, browserSync.reload));
    gulp.watch("*.php").on("change", gulp.series(css, browserSync.reload));

    done();
});

export function clean() {
    return deleteAsync([paths.styles.delete, paths.scripts.delete]);
};

const watchcss = () => gulp.watch(paths.styles.src, css);
const watchJs = () => gulp.watch(paths.scripts.src, scripts);

export const watch = gulp.series(css, scripts, gulp.parallel(watchcss, watchJs));

export default gulp.task('build', gulp.series(clean, css, scripts));
