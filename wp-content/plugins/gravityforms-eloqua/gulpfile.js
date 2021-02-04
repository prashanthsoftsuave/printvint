/**
 * Gulpfile.
 *
 * Implements:
 *      1. CSS: Sass to CSS conversion, error catching, Autoprefixing, Sourcemaps,
 *         CSS minification, and Merge Media Queries.
 *      2. JS: Concatenates & uglifies Vendor and Custom JS files.
 *      3. Images: Minifies PNG, JPEG, GIF and SVG images.
 *      4. Watches files for changes in CSS or JS.
 *      5. Watches files for changes in PHP.
 *      6. Corrects the line endings.
 *      7. Generates .pot file for i18n and l10n.
 *
 * @author Briantics, Inc.
 * @version 1.0.0
 */

/**
 * Configuration.
 *
 * Project Configuration for gulp tasks.
 *
 * In paths you can add <<glob or array of globs>>. Edit the variables as per your project requirements.
 */
var project                 = 'GravityFormsEloqua'; // Project Name.

// Translation related.
var text_domain             = 'gfeloqua'; // Your textdomain here.
var translationFile         = 'gfeloqua.pot'; // Name of the transalation file.
var translationDestination  = './lang'; // Where to save the translation files.
var packageName             = 'GFEloqua'; // Package name.
var bugReport               = 'https://www.briandichiara.com/'; // Where can users report bugs.
var lastTranslator          = 'Briantics, Inc. <brian@briantics.com>'; // Last translator Email ID.
var team                    = 'Briantics, Inc. <brian@briantics.com>'; // Team's Email ID.

// Style related.
var styleSRC                = './assets/scss/gfeloqua.scss'; // Path to main .scss file.
var styleDestination        = './dist/css/'; // Path to place the compiled CSS file.

// JS related.
var jsMainSRC               = './assets/scripts/gfeloqua.js'; // Path to JS custom scripts folder.
var jsExtSRC                = './assets/scripts/gfeloqua-extensions.js'; // Path to JS custom scripts folder.
var jsMainFile              = 'gfeloqua'; // Compiled JS custom file name.
var jsDestination           = './dist/js/'; // Path to place the compiled JS files.

// Images related.
var imagesSRC               = './assets/images/**/*.{png,jpg,gif,svg}'; // Source folder of images which should be optimized.
var imagesDestination       = './dist/images/'; // Destination folder of optimized images. Must be different from the imagesSRC folder.

// Watch files paths.
var styleWatchFiles         = './assets/scss/**/*.scss'; // Path to all *.scss files inside css folder and inside them.
var jsWatchFiles            = './assets/scripts/**/*.js'; // Path to all custom JS files.
var projectPHPWatchFiles    = './**/*.php'; // Path to all PHP files.


// Browsers you care about for autoprefixing.
// Browserlist https://github.com/ai/browserslist
const AUTOPREFIXER_BROWSERS = [
    'last 2 version',
    '> 1%',
    'ie >= 9',
    'ie_mob >= 10',
    'ff >= 30',
    'chrome >= 34',
    'safari >= 7',
    'opera >= 23',
    'ios >= 7',
    'android >= 4',
    'bb >= 10'
  ];

// STOP Editing Project Variables.

/**
 * Load Plugins.
 *
 * Load gulp plugins and passing them semantic names.
 */
var gulp         = require('gulp'); // Gulp of-course

// CSS related plugins.
var sass         = require('gulp-sass'); // Gulp pluign for Sass compilation.
var minifycss    = require('gulp-uglifycss'); // Minifies CSS files.
var autoprefixer = require('gulp-autoprefixer'); // Autoprefixing magic.
var mmq          = require('gulp-merge-media-queries'); // Combine matching media queries into one media query definition.

// JS related plugins.
var concat       = require('gulp-concat'); // Concatenates JS files
var uglify       = require('gulp-uglify'); // Minifies JS files

// Image realted plugins.
var imagemin     = require('gulp-imagemin'); // Minify PNG, JPEG, GIF and SVG images with imagemin.

// Utility related plugins.
var rename       = require('gulp-rename'); // Renames files E.g. style.css -> style.min.css
var lineec       = require('gulp-line-ending-corrector'); // Consistent Line Endings for non UNIX systems. Gulp Plugin for Line Ending Corrector (A utility that makes sure your files have consistent line endings)
var filter       = require('gulp-filter'); // Enables you to work on a subset of the original files by filtering them using globbing.
var sourcemaps   = require('gulp-sourcemaps'); // Maps code in a compressed file (E.g. style.css) back to it’s original position in a source file (E.g. structure.scss, which was later combined with other css files to generate style.css)
//var notify       = require('gulp-notify'); // Sends message notification to you
var wpPot        = require('gulp-wp-pot'); // For generating the .pot file.
var sort         = require('gulp-sort'); // Recommended to prevent unnecessary changes in pot-file.


/**
 * Task: `styles`.
 *
 * Compiles Sass, Autoprefixes it and Minifies CSS.
 *
 * This task does the following:
 *    1. Gets the source scss file
 *    2. Compiles Sass to CSS
 *    3. Writes Sourcemaps for it
 *    4. Autoprefixes it and generates style.css
 *    5. Renames the CSS file with suffix .min.css
 *    6. Minifies the CSS file and generates style.min.css
 */
 gulp.task('styles', function () {
    return gulp.src( styleSRC )
    .pipe( sourcemaps.init() )
    .pipe( sass( {
      errLogToConsole: true,
      outputStyle: 'compact',
      // outputStyle: 'compressed',
      // outputStyle: 'nested',
      // outputStyle: 'expanded',
      precision: 10
    } ) )
    .on('error', console.error.bind(console))
    .pipe( sourcemaps.write( { includeContent: false } ) )
    .pipe( sourcemaps.init( { loadMaps: true } ) )
    .pipe( autoprefixer( AUTOPREFIXER_BROWSERS ) )

    .pipe( sourcemaps.write ( './' ) )
    .pipe( lineec() ) // Consistent Line Endings for non UNIX systems.
    .pipe( gulp.dest( styleDestination ) )

    .pipe( filter( '**/*.css' ) ) // Filtering stream to only css files
    .pipe( mmq( { log: true } ) ) // Merge Media Queries only for .min.css version.

    .pipe( rename( { suffix: '.min' } ) )
    .pipe( minifycss() )
    .pipe( lineec() ) // Consistent Line Endings for non UNIX systems.
    .pipe( gulp.dest( styleDestination ) )

    .pipe( filter( '**/*.css' ) ) // Filtering stream to only css files
    //.pipe( notify( { message: 'TASK: "styles" Completed! 💯', onLast: true } ) )
 });


 /**
  * Task: `mainJS`.
  *
  * Concatenate and uglify main JS scripts.
  *
  * This task does the following:
  *     1. Gets the source folder for JS main files
  *     2. Concatenates all the files and generates main.js
  *     3. Renames the JS file with suffix .min.js
  *     4. Uglifes/Minifies the JS file and generates main.min.js
  */
 gulp.task( 'mainJS', function() {
    return gulp.src( [ jsMainSRC, jsExtSRC ] )
    .pipe( concat( jsMainFile + '.js' ) )
    .pipe( lineec() ) // Consistent Line Endings for non UNIX systems.
    .pipe( gulp.dest( jsDestination ) )
    .pipe( rename( {
      basename: jsMainFile,
      suffix: '.min'
    }))
    .pipe( uglify() )
    .pipe( lineec() ) // Consistent Line Endings for non UNIX systems.
    .pipe( gulp.dest( jsDestination ) );
    //.pipe( notify( { message: 'TASK: "customJs" Completed! 💯', onLast: true } ) );
 });

 /**
  * Task: `images`.
  *
  * Minifies PNG, JPEG, GIF and SVG images.
  *
  * This task does the following:
  *     1. Gets the source of images raw folder
  *     2. Minifies PNG, JPEG, GIF and SVG images
  *     3. Generates and saves the optimized images
  *
  * This task will run only once, if you want to run it
  * again, do it with the command `gulp images`.
  */
 gulp.task( 'images', function() {
  return gulp.src( imagesSRC )
    .pipe( imagemin( {
          progressive: true,
          optimizationLevel: 3, // 0-7 low-high
          interlaced: true,
          svgoPlugins: [{removeViewBox: false}]
        } ) )
    .pipe(gulp.dest( imagesDestination ));
    //.pipe( notify( { message: 'TASK: "images" Completed! 💯', onLast: true } ) );
 });


 /**
  * WP POT Translation File Generator.
  *
  * * This task does the following:
  *     1. Gets the source of all the PHP files
  *     2. Sort files in stream by path or any custom sort comparator
  *     3. Applies wpPot with the variable set at the top of this file
  *     4. Generate a .pot file of i18n that can be used for l10n to build .mo file
  */
 gulp.task( 'translate', function () {
     return gulp.src( projectPHPWatchFiles )
         .pipe(sort())
         .pipe(wpPot( {
             domain        : text_domain,
             package       : packageName,
             bugReport     : bugReport,
             lastTranslator: lastTranslator,
             team          : team
         } ))
        .pipe(gulp.dest(translationDestination + '/' + translationFile ))
        //.pipe( notify( { message: 'TASK: "translate" Completed! 💯', onLast: true } ) )

 });

 /**
 * Watch Tasks.
 *
 * Watches for file changes and runs specific tasks.
 */
 gulp.task( 'watch', function () {
   gulp.watch( styleWatchFiles, gulp.series( 'styles' ) );
   gulp.watch( jsWatchFiles, gulp.series( 'mainJS' ) );
 } );

/**
 * Run Watch via Parallel
 */
gulp.task( 'final', gulp.parallel( 'watch' ) );

 /**
  * Default Task
  *
  * Compile then Watch
  */
gulp.task( 'default', gulp.series( 'styles', 'mainJS', 'images', 'final' ) );
