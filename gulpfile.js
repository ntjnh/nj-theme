const { dest, parallel, series, src, watch } = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const cssMin = require("gulp-cssmin");
const terser = require("gulp-terser");

const styles = () => {
    return src("assets/scss/app.scss")
        .pipe(sass().on("error", sass.logError))
        .pipe(cssMin())
        .pipe(dest("build/css"));
};

const scripts = () => {
    return src("assets/js/app.js")
        .pipe(terser())
        .pipe(dest("build/js"));
};

const watchSass = () => watch("./assets/scss/**/*.scss", styles);
const watchJs = () => watch("./assets/js/**/*.js", scripts);

module.exports = {
    default: series(styles, scripts, parallel(watchSass, watchJs)),
    sass: styles,
    js: scripts,
    watch: parallel(watchSass, watchJs)
};
