var gulp = require('gulp');
var changed = require('gulp-changed');
var runSequence = require('run-sequence');
var sass = require('gulp-sass');
var bourbon = require('node-bourbon');
var neat = require('node-neat');
var minifyCSS = require('gulp-minify-css');
var browserify = require('gulp-browserify');
var reactify = require('reactify');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');

var paths = {
    base: 'webroot/',
    scss: 'webroot/scss/',
    css_org: 'webroot/css/org/',
    css_min: 'webroot/css/min/',
    js_org: 'webroot/js/org/',
    js_bro: 'webroot/js/bro/',
    js_min: 'webroot/js/min/'
}

bourbon.with('webroot/scss/_common.scss');
neat.with('webroot/scss/_common.scss');


gulp.task('css', function(callback) {
    runSequence(
        'sass',
        callback
    );
});

gulp.task('script', function(callback) {
    runSequence(
        'browserify',
        callback
    );
});

gulp.task('sass', function() {
    gulp
    .src(paths.scss + '*.scss')
    .pipe(changed(paths.css_min))
    .pipe(
        sass({
            includePaths: bourbon.includePaths,
            includePaths: neat.includePaths
        })
    )
    .pipe(minifyCSS())
    .pipe(gulp.dest(paths.css_min));
});

gulp.task('browserify', function() {
    gulp
    .src(paths.js_org + '**/*.jsx', { read: false })
    .pipe(changed(paths.js_min))
    .pipe(browserify({
        transform: ['reactify', 'babelify'],
        extensions: ['.jsx']
    }))
    .pipe(rename(function(path) {
        path.extname = '.js'
    }))
    .pipe(uglify())
    .pipe(gulp.dest(paths.js_min));
});

gulp.task('watch', function(e) {
    gulp.watch(paths.scss + '*.scss', ['css']);
    gulp.watch(paths.js_org + '**/*.jsx', ['script']);
});

gulp.task('default', ['css', 'script', 'watch']);