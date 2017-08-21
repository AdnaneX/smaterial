var gulp = require( 'gulp' ),
	util = require( 'gulp-util' ),
	concat = require( 'gulp-concat' ),
	jshint = require( 'gulp-jshint' ),
	sourcemaps = require( 'gulp-sourcemaps' ),
	uglify = require( 'gulp-uglify' ),
	watch = require( 'gulp-watch' ),
	plumber = require( 'gulp-plumber' ),
	sass = require( 'gulp-sass' ),
	autoprefixer = require( 'gulp-autoprefixer' ),
	postccs = require( 'gulp-postcss' ),
	minify = require( 'gulp-clean-css' ),
	zip = require( 'gulp-zip' ),
	order = require('gulp-order');

// Compress app.js
gulp.task( 'app', function () {
	gulp.src( 'js/app/*.js' )
		.pipe( plumber() )
		.pipe( jshint() )
		.pipe( sourcemaps.init() )
		.pipe( concat( 'app.min.js' ) )
		.pipe( uglify() )
		.pipe( sourcemaps.write( 'sources' ) )
		.pipe( gulp.dest( 'js' ) );
} );

// Compress vendor.js
gulp.task( 'vendor', function () {
	gulp.src( ['js/vendor/*.js'] )
		.pipe(order([
			'jquery.js',
			'*.js'
		]))
		.pipe( plumber() )
		.pipe( jshint() )
		.pipe( sourcemaps.init() )
		.pipe( concat( 'vendor.min.js' ) )
		.pipe( uglify() )
		.pipe( sourcemaps.write( 'sources' ) )
		.pipe( gulp.dest( 'js' ) );
} );

// Compress .scss files
gulp.task( 'sass', function () {
	gulp.src( './stylesheets/scss/*.scss' )
		.pipe( plumber() )
		.pipe( sourcemaps.init() )
		.pipe( sass() )
		.pipe( autoprefixer() )
		.pipe( minify() )
		.pipe( postccs([
			require('postcss-merge-rules'),
			require('postcss-move-media'),
			//require('postcss-merge-selectors')(promote:true)
		]) )
		.pipe( sourcemaps.write( './' ) )
		.pipe( gulp.dest( 'stylesheets' ) );
} );

// SCSS Zip all required files
gulp.task( 'scss-zip', function () {
	gulp.src( ['js/app.min.js', 'js/vendor.min.js', 'js/*/**.js', 'stylesheets/scss/smaterial.scss', 'stylesheets/scss/smaterial-amp.scss',
			   'stylesheets/scss/components/**.scss', 'stylesheets/fonts/Roboto/**.ttf', 'bower.json', 'index.php', 'includes/*',
			   'gulpfile.js', 'package.json', 'stylesheets/smaterial.css', 'stylesheets/smaterial-amp.css', 'stylesheets/smaterial.css.map', 'stylesheets/smaterial-amp.css.map'], {base: '.'} )
		.pipe( zip( 'smaterial-scss.zip' ) )
		.pipe( gulp.dest( './' ) );
} );

// CSS Zip all required files
gulp.task( 'css-zip', function () {
	gulp.src( ['js/app.min.js', 'js/vendor.min.js', 'stylesheets/smaterial.css', 'stylesheets/fonts/Roboto/**.ttf', 'index.php', 'bower.json', 'includes/*'], {base: '.'} )
		.pipe( zip( 'smaterial-css.zip' ) )
		.pipe( gulp.dest( './' ) );
} );

// Zip all required files
gulp.task( 'zip', ['scss-zip', 'css-zip'] );

// Watch files for changes
gulp.task( 'watch', function () {
	gulp.watch( 'js/app/*.js', ['app'] );
	gulp.watch( 'js/vendor/*.js', ['vendor'] );
	gulp.watch( 'stylesheets/scss/*.scss', ['sass'] );
	gulp.watch( 'stylesheets/scss/**/*.scss', ['sass'] );
} );

gulp.task( 'default', ['watch'] );