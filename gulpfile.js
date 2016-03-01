var gulp = require('gulp'),
	util = require('gulp-util'),
	concat = require('gulp-concat'),
	jshint = require('gulp-jshint'),
	sourcemaps = require('gulp-sourcemaps'),
	uglify = require('gulp-uglify'),
	watch = require('gulp-watch'),
	plumber = require('gulp-plumber');

gulp.task('scripts', function() {
	gulp.src('js/app/*.js')
		.pipe(jshint())
		.pipe(sourcemaps.init())
			.pipe(concat('app.min.js'))
			.pipe(uglify())
		.pipe(sourcemaps.write('sources'))
		.pipe(gulp.dest('js'))

	gulp.src('js/vendor/*.js')
		.pipe(jshint())
		.pipe(sourcemaps.init())
		.pipe(concat('vendor.min.js'))
		.pipe(uglify())
		.pipe(sourcemaps.write('sources'))
		.pipe(gulp.dest('js'))
});

gulp.task('watch', function() {
	gulp.watch('js/app/*.js', ['scripts']);
	gulp.watch('js/vendor/*.js', ['scripts']);
});

gulp.task('default', ['watch']);