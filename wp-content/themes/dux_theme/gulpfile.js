'use strict';
const gulp = require('gulp');
const sass = require('gulp-sass');
// const  watch = require('gulp-watch');

const compass = require('gulp-compass');

gulp.task('compass', function() {
  gulp.src('./src/*.scss')
  .pipe(compass({
      image: 'app/assets/images'
  }))
});


gulp.task('sass', function(){
  return gulp.src('SASS/**/*.scss')
  .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
  .pipe(gulp.dest('assets/css/'));
})



gulp.task('watch',  function(){
    gulp.watch('SASS/**/*.scss', gulp.series('sass'))
  
})

gulp.task('default', gulp.series('sass', 'watch'));