const gulp = require('gulp');
const sass = require('gulp-sass');
const zip = require('gulp-zip');
const browserSync = require('browser-sync').create();

gulp.task('sass', function() {
    return gulp.src(['src/scss/*.scss', 'node_modules/bootstrap/scss/bootstrap.scss', 'node_modules/hamburgers/_sass/hamburgers/hamburgers.scss', 'node_modules/hover.css/scss/hover.scss'])
    .pipe(sass())
    .pipe(gulp.dest('src/css'))
    .pipe(browserSync.stream());
});

gulp.task('js', function () {
    return gulp.src(['node_modules/bootstrap/dist/js/bootstrap.min.js', 'node_modules/jquery/dist/jquery.min.js', 'node_modules/popper.js/dist/umd/popper.min.js','node_modules/owl.carousel/dist/owl.carousel.min.js'])
    .pipe(gulp.dest('src/js'))
    .pipe(browserSync.stream());
});

gulp.task('serve', ['sass'],function () {
    browserSync.init({
        server: './src'
    });
    gulp.watch(['node_modules/bootstrap/scss/bootstrap.scss', 'src/scss/*.scss'], ['sass']);
    gulp.watch('src/*.html').on('change', browserSync.reload);
});

gulp.task('fonts', function () {
    return gulp.src('node_modules/font-awesome/fonts/*')
    .pipe(gulp.dest('src/fonts'));
});

gulp.task('css', function () {
    return gulp.src(['node_modules/font-awesome/css/font-awesome.min.css','node_modules/owl.carousel/dist/assets/owl.carousel.min.css'])
    .pipe(gulp.dest('src/css'));
});

gulp.task('public', function () {
    return gulp.src(['src/css','src/fonts','src/js','src/imgs','src/*.html'])
    .pipe(zip('public.rar'))
    .pipe(gulp.dest('public'));
});

gulp.task('default', ['js', 'serve', 'css', 'fonts']);
