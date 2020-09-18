'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var runSequence = require('run-sequence');

sass.compiler = require('node-sass');

gulp.task('sass', function () {
    return gulp.src('./sass/**/*.sass')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css'));
});

gulp.task("watch", function() {
    gulp.watch('./sass/**/*.sass', gulp.parallel('sass'));
});

gulp.task('default', () =>
    gulp.src('./css/main.css')
        .pipe(autoprefixer({
            overrideBrowserslist: ['last 25 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('./css'))
);


gulp.task('main', gulp.series('default', 'watch', function (done) {
    done();
}));