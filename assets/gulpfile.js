var gulp = require("gulp");
var sass = require("gulp-sass")(require("sass"));
var sassGlob = require("gulp-sass-glob");
var sourcemaps = require("gulp-sourcemaps");
var autoprefixer = require("gulp-autoprefixer");

gulp.task("sass", function () {
  return gulp
    .src("./sass/**/*.scss")
    .pipe(sourcemaps.init())
    .pipe(sassGlob())
    .pipe(sass({ outputStyle: "expanded" }).on("error", sass.logError))
    .pipe(
      autoprefixer(["last 3 versions", "ie >= 8", "Android >= 4", "iOS >= 8"])
    )
    .pipe(sourcemaps.write("./"))
    .pipe(gulp.dest("./css"));
});

gulp.task("sass:watch", function () {
  gulp.watch("./sass/**/*.scss", gulp.series("sass"));
});
