"use strict";

var gulp = require('gulp');

var sass = require('gulp-sass');

var Fiber = require('fibers');

var autoprefixer = require('gulp-autoprefixer');

var sourcemaps = require('gulp-sourcemaps');

var concat = require('gulp-concat');

var uglify = require('gulp-uglify-es')["default"];

var svgo = require('gulp-svgo');

var imagemin = require('gulp-imagemin');

var browserSync = require('browser-sync').create();

function compileSass() {
  return gulp.src('src/esmeralda/scss/**/*.scss').pipe(sourcemaps.init()).pipe(sass({
    outputStyle: 'compressed'
  })).pipe(autoprefixer({
    overrideBrowserslist: ['last 2 versions'],
    cascade: false
  })).pipe(sourcemaps.write('./')).pipe(gulp.dest('dist/css')).pipe(browserSync.stream());
}

function pluginsJS() {
  return gulp.src('src/esmeralda/tools/plugins/*.js').pipe(concat('bundle.js')).pipe(uglify()).pipe(gulp.dest('dist/js/')).pipe(browserSync.stream());
}

function compileJS() {
  return gulp.src('src/esmeralda/tools/*.js').pipe(uglify()).pipe(gulp.dest('dist/js/')).pipe(browserSync.stream());
}

function watchFiles() {
  gulp.watch('src/esmeralda/scss/**/*.scss', compileSass);
  gulp.watch('src/esmeralda/**/*.png', imageOptimize);
  gulp.watch('src/esmeralda/**/*.svg', svgOptimize);
  gulp.watch('src/esmeralda/**/*.jpg', imageOptimize);
  gulp.watch('src/esmeralda/tools/plugins/*.js', pluginsJS);
  gulp.watch('src/esmeralda/tools/*.js', compileJS);
  gulp.watch(['*.php', '**/*.php']).on('change', browserSync.reload);
}

function svgOptimize() {
  return gulp.src('src/esmeralda/**/*.svg').pipe(svgo()).pipe(gulp.dest('dist/images')).pipe(browserSync.stream());
}

function imageOptimize() {
  return gulp.src(['src/esmeralda/site/**/*.png', 'src/esmeralda/site/**/*.jpg']).pipe(imagemin()).pipe(gulp.dest('dist/images')).pipe(browserSync.stream());
}

gulp.task('pluginsjs', pluginsJS);
gulp.task('compilejs', compileJS);
gulp.task('svgo', svgOptimize);
gulp.task('webp', imageOptimize);
gulp.task('watch', watchFiles);
gulp.task('sass', compileSass);
gulp.task('browser-sync', function () {
  browserSync.init({
    proxy: "http://icabank.local/"
  });
});
gulp.task('default', gulp.parallel('watch', 'pluginsjs', 'sass', 'compilejs', 'browser-sync', 'svgo', 'webp'));