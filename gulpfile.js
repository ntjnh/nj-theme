const { dest, parallel, series, src, watch} = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const cssMin = require("gulp-cssmin");

const styles = () => {
    return src("assets/scss/app.scss")
        .pipe(sass().on("error", sass.logError))
        .pipe(cssMin())
        .pipe(dest("build/css"));
};

const watchSass = () => watch("./assets/scss/**/*.scss", styles);

module.exports = {
    default: series(styles),
    sass: styles,
    watch: watchSass
};
