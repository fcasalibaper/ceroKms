var gulp    = require('gulp');
var babel = require('gulp-babel');
var browserify = require('browserify');
var babelify = require('babelify');
var source = require('vinyl-source-stream');
var buffer      = require('vinyl-buffer');
var uglify = require('gulp-uglify');
var gutil = require('gulp-util');
var browserSync = require('browser-sync').create();
var cleanCSS = require('gulp-clean-css');
var csso = require('gulp-csso');
var imagemin = require('gulp-imagemin');
// var tinypng  = require('gulp-tinypng');
var postcss = require('gulp-postcss');
var cssnext = require('postcss-cssnext');
var atImport = require('postcss-import');
var precss  = require('precss');
var rename = require("gulp-rename");
var concat = require('gulp-concat');
var notify  = require('gulp-notify');
var sass = require('gulp-sass');
 
sass.compiler = require('node-sass');

///////////
// tasks //
///////////
var nameFilesSrc = 'ceroKms';

// images minification
gulp.task('tinypng', function () {
  gulp.src('src/images/*.{png,jpg,jpeg}')
  .pipe(imagemin({
    interlaced: true,
    progressive: true,
    optimizationLevel: 10,
    svgoPlugins: [{removeViewBox: true}]
  }))
  // .pipe(tinypng('Aa_j2EntQFAjkwA0b8Y9Wd79-t9MhiUj'))
  .pipe(gulp.dest('app/images'))
  .pipe( notify({ message: 'Imagenes comprimidas' }) )
});

// css
gulp.task('css', function () {
  var processors = [
    precss({}),
    cssnext({browsers : 'last 10 versions'}),
    atImport
  ];

  return gulp.src('./src/css/styles.css')
    .pipe( postcss(processors) )
    .pipe(csso({
        debug: false
    }))
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(rename(nameFilesSrc+".css"))
    .pipe( gulp.dest('./app/css') )
    .pipe( gulp.dest('app/arquivos') )
    .pipe( notify({ message: 'CSS - complilado' }) )
    .pipe(browserSync.stream())
});

// scss
gulp.task('sass', function () {
  return gulp.src('./src/css/styles.scss')
    .pipe(rename(nameFilesSrc+".min.css"))
    .pipe( notify({ message: 'SCSS - complilado' }) )
    .pipe(sass().on('error', sass.logError))
    .pipe( gulp.dest('./app/css') )
});

// js
gulp.task('scripts', function() {
  browserify({
  	entries: './src/scripts/all.js',
  	debug: false
	})

  .transform("babelify", { presets: ["es2015"] })
  .bundle()
  .pipe(source('app.js'))
  .pipe(buffer())
  .pipe(uglify())
  .pipe(rename(nameFilesSrc+".min.js"))
  .pipe( gulp.dest('./app/scripts') )
  .pipe( notify({ message: 'JS - complilado' }) )
  .pipe(browserSync.stream())
});

// server
gulp.task('browser-sync', function() {
  browserSync.init({
    open:false,
    // proxy: 'https://www.fravega.com/',
    files: ['app/**'],
    serveStatic: ['app'],
    rewriteRules: [
      {
        match: new RegExp('https://fravega.vteximg.com.br/arquivos/'+nameFilesSrc+'.css'),
        fn: function() {
          return '/index.css';
        }
      },
      {
        match: new RegExp('https://fravega.vteximg.com.br/arquivos/'+nameFilesSrc+'.js'),
        fn: function() {
          return '/index.js';
        }
      }
    ]
  });
});

// html
gulp.task('html', function () {
  gulp.src('./app/*.html')
    .pipe( notify({ message: 'HTML - complilado' }) )
    .pipe(browserSync.stream())
});

// watch
gulp.task('watch', function() {
  gulp.watch('./src/css/**/*.css', ['css']);
  gulp.watch('./src/css/**/*.scss', ['sass']);
  gulp.watch('./src/scripts/**/*.js', ['scripts']);
  gulp.watch(['./app/*.html'], ['html']);
});

// Default task
gulp.task("default", ["browser-sync","watch"]);
gulp.task("imagesmin", ["tinypng"]);
