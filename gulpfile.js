const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();


gulp.task('sass', function() {
    return gulp.src(['node_modules/bootstrap/scss/bootstrap.scss', 'src/scss/*.scss','node_modules/aos/src/sass/aos.scss'])
    .pipe(sass())
    .pipe(gulp.dest('src/css'))
    .pipe(browserSync.stream());
});

gulp.task('js', function () {
    return gulp.src(['node_modules/bootstrap/dist/js/bootstrap.min.js', 'node_modules/jquery/dist/jquery.min.js', 'node_modules/popper.js/dist/umd/popper.min.js','node_modules/aos/dist/aos.js','node_modules/swiper/dist/js/swiper.min.js'])
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
    return gulp.src(['node_modules/font-awesome/css/font-awesome.min.css','node_modules/swiper/dist/css/swiper.min.css'])
    .pipe(gulp.dest('src/css'));
});

gulp.task('default', ['js', 'serve', 'css', 'fonts']);
