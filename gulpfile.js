const { dest, parallel, series, src, watch} = require("gulp");

const styles = (n) => {
    return n;
};

module.exports = {
    default: series(styles),
    sass: styles
};
