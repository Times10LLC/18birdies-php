// ----- Gulp ----- //
// Compiles sass with sourcemaps, combines js, prefix-free styles, live reloads browser
// cd into your project and run 'gulp'
// compiles sass
// combines js
// prefix-free styles
// live reloads browser

var gulp = require('gulp'),

  // No more -vendor-prefixes- :)
  autoprefixer = require('gulp-autoprefixer'),
  // Combine js files into one
  concat = require('gulp-concat'),

  // Rename the js file after its combined
  rename = require('gulp-rename'),

  // Sass
  sass = require('gulp-sass'),

  sassOptions = {
    errLogToConsole: true,
    outputStyle: 'compressed'
  },

  cssimport = require("gulp-cssimport"),

  // Sourcemaps to show where lines of sass are from compiled css
  sourcemaps = require('gulp-sourcemaps'),

  // Uglify the js and save a bunch on bytez
  uglify = require('gulp-uglify'),

  // Paths & Directories
  paths = {
    images: ['./src/img/**/*.{jpg,gif,png,svg}'],
    imagesBuild: ['./assets/img/'],
    videos: ['./src/video/*.{mp4,mov}'],
    videosBuild: ['./assets/video/'],
    js: ['./node_modules/jquery/dist/jquery.min.js', './node_modules/jquery-mask-plugin/dist/jquery.mask.min.js', './node_modules/tiny-slider/dist/min/tiny-slider.js', './node_modules/plyr/dist/plyr.min.js', './node_modules/body-scroll-lock/lib/bodyScrollLock.min.js', './node_modules/aos/dist/aos.js', './node_modules/magnific-popup/dist/jquery.magnific-popup.min.js', './src/js/*/*.js', './src/js/*.js'],
    jsBuild: './assets/js/', // this is where the minified and concat'd project js build file will go
    styles: ['./src/scss/**/*.scss', './src/scss/partials/*.scss'], // watch these directories
    stylesBuild: './assets/css/' // this is where the minified, compiled css will go
  };

gulp.task('images', function() {
  return gulp.src(paths.images)
    .pipe(gulp.dest(paths.imagesBuild))
});

gulp.task('videos', function() {
  return gulp.src(paths.videos)
    .pipe(gulp.dest(paths.videosBuild))
});

gulp.task('fonts', function() {
  return gulp.src(['./node_modules/@fortawesome/fontawesome-free/webfonts/*.{eot,svg,ttf,woff,woff2}', './src/fonts/*.{eot,svg,ttf,woff,woff2}'])
    .pipe(gulp.dest('./assets/fonts/'))
});

// ----- Scripts ----- //
// Concat, Rename, Uglify
gulp.task('build-js', function() {
  return gulp.src(paths.js)

    .pipe(sourcemaps.init())

    .pipe(concat('bundle.js'))

    .pipe(gulp.dest(paths.jsBuild))

    .pipe(sourcemaps.write())

    .pipe(rename('bundle.min.js'))

    .pipe(uglify())

    .on('error', logError)

    .pipe(gulp.dest(paths.jsBuild))
});

// ----- Styles ----- //
// Compile css from sass
gulp.task('build-styles', function() {
  return gulp.src(paths.styles)

    .pipe(sourcemaps.init())

    // Run Sass on those files
    .pipe(sass(sassOptions))

    // We need those sass line numbers
    .pipe(sourcemaps.write())

    .on('error', logError)

    // Autoprefixer :)
    .pipe(autoprefixer())

    .pipe(rename('author.min.css'))

    // Write the resulting CSS in the output folder
    .pipe(gulp.dest(paths.stylesBuild))
});


// ----- Watch Files ----- //
// Watch Files For Changes (Scripts and Styles)
gulp.task('watch', function() {
  gulp.watch(paths.images, gulp.series('images'))

  gulp.watch(paths.js, gulp.series('build-js'))
    .on('change', function(event) {
      // console.log(event);
      console.log('File ' + event + ' was changed, running tasks...')
    })

  gulp.watch(paths.styles, gulp.series('build-styles'))
    .on('change', function(event) {
      // console.log(event);
      console.log('File ' + event + ' was changed, running tasks...')
    })
});

// ----- Production Task ----- //
// Run from command line with: gulp production
gulp.task('production', gulp.series('build-js', 'build-styles', 'images', 'videos', 'fonts'));

// ----- Default Task ----- //
// Run from command line with: gulp
gulp.task('default', gulp.series('build-js', 'build-styles', 'images', 'fonts', 'watch'));


// ----- Errors ----- //
var logError = function(error) {
  console.log(error.toString());
  this.emit('end');
};
