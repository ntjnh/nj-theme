const { dest, parallel, series, src, watch} = require("gulp");
const sass = require("gulp-sass")(require("sass"));

const styles = () => {
    return src("assets/scss/app.scss")
        .pipe(sass().on("error", sass.logError))
        .pipe(dest("build/css"));
};

module.exports = {
    default: series(styles),
    sass: styles
};
