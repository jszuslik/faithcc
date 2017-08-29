var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();

gulp.task('sass', function() {
   return gulp.src('src/scss/**/*.scss')
       .pipe(sass())
       .pipe(gulp.dest('./'))
       .pipe(browserSync.reload({
           stream: true
       }))
});
gulp.task('watch', ['browserSync', 'sass'], function(){
    gulp.watch('src/scss/**/*.scss', ['sass']);
    gulp.watch('src/scss/**/*.scss', browserSync.reload);
    gulp.watch('src/js/**/*.js', browserSync.reload);
    gulp.watch('./**/*.php', browserSync.reload);
});
gulp.task('browserSync', function(){
    browserSync.init({
        logPrefix: 'faithcc.dev',
        proxy: 'faithcc.dev',
        port: 8080
    })
});
