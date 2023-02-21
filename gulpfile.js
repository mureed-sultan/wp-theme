const gulp = require('gulp');
const postcss = require('gulp-postcss');
const tailwindcss = require('tailwindcss');
const autoprefixer = require('autoprefixer');
const nested = require('postcss-nested');
const browserSync = require('browser-sync').create(); // require the browser-sync package and create an instance

gulp.task('css', function () {
  return gulp
    .src('src/styles/style.css')
    .pipe(
      postcss([
        tailwindcss,
        nested,
        autoprefixer,
      ])
    )
    .pipe(gulp.dest('./dist'))
    .pipe(browserSync.stream()); // add the stream method to reload the browser
});

gulp.task('watch', function () {
  browserSync.init({
    proxy: 'http://localhost/testsite/', // Replace with your local WordPress site URL
    notify: false,
  });

  gulp.watch('src/styles/**/*.css', gulp.series('css'));
  gulp.watch('**/*.php').on('change', browserSync.reload);
});

gulp.task('default', gulp.series('css', 'watch'));
