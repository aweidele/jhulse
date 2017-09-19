var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');

var sassOptions = {
  errLogToConsole: true,
  outputStyle: 'expanded'
};

var autoprefixerOptions = {
  browsers: ['last 4 versions']
};

gulp.task('sass', function(){
  return gulp
    .src('jennifer-hulse/assets/sass/style.scss')
    //.pipe(sourcemaps.init())
    .pipe(sass(sassOptions).on('error', sass.logError))
    //.pipe(sourcemaps.write())
    .pipe(autoprefixer(autoprefixerOptions))
    .pipe(gulp.dest('jennifer-hulse/assets/css/'))
});

gulp.task('watch', function(){
  gulp.watch('jennifer-hulse/assets/sass/**/*.scss', ['sass']);
});
