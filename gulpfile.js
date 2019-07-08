var syntax        = 'sass'; // Syntax: sass or scss;

var gulp          = require('gulp'),
		gutil         = require('gulp-util' ),
		sass          = require('gulp-sass'),
		browsersync   = require('browser-sync'),
		concat        = require('gulp-concat'),
		uglify        = require('gulp-uglify'),
		cleancss      = require('gulp-clean-css'),
		rename        = require('gulp-rename'),
		autoprefixer  = require('gulp-autoprefixer'),
		notify        = require("gulp-notify"),
		rsync         = require('gulp-rsync'),
		svgstore      = require('gulp-svgstore'),
		svgmin        = require('gulp-svgmin'),
		cheerio       = require('gulp-cheerio'),
		rename        = require('gulp-rename'),
		plumber       = require('gulp-plumber');

gulp.task('browser-sync', function() {
	browsersync({
		proxy: "http://localhost:81/orphan/",
		notify: false
	})
});

gulp.task('styles', function() {
	return gulp.src('orphan/assets/'+syntax+'/**/*.'+syntax+'')
	.pipe(sass({ outputStyle: 'expand' }).on("error", notify.onError()))
	.pipe(rename({ suffix: '.min', prefix : '' }))
	.pipe(autoprefixer(['last 15 versions']))
	.pipe(cleancss( {level: { 1: { specialComments: 0 } } })) // Opt., comment out when debugging
	.pipe(gulp.dest('orphan/assets/css'))
	.pipe(browsersync.reload( {stream: true} ))
});

gulp.task('js', function() {
	return gulp.src([
		'orphan/assets/libs/jquery/dist/jquery.min.js',  			//----jquery
		'orphan/assets/libs/jquery.validate.js', 					//----форма
		'orphan/assets/libs/jquery.mask.min.js', 					//----форма
		'orphan/assets/libs/jscrollpane/jquery.jscrollpane.js',
		'orphan/assets/libs/jscrollpane/jquery.mousewheel.js',
		'orphan/assets/libs/jquery.popupoverlay.js', 				//----модалки
		// 'orphan/assets/libs/slick/slick.js', 					//----слайдер
		 // 'orphan/assets/libs/flipclock/flipclock.js',
		'orphan/assets/libs/swiper/swiper.min.js', 			//----слайдер
		'orphan/assets/libs/fancybox/jquery.fancybox.js', 		//----картінка прикліку
		// 'orphan/assets/libs/jquery.spincrement.min.js', 		//----цифри анімованні
		// 'orphan/assets/libs/isotope.pkgd.min.js', 				//----сетка елементов + фильтр
		'orphan/assets/js/common.js', // Always at the end
	])
	.pipe(plumber())
	.pipe(concat('scripts.min.js'))
	.pipe(uglify()) // Mifify js (opt.)
	.pipe(gulp.dest('orphan/assets/js'))
	.pipe(browsersync.reload({ stream: true }))
});

gulp.task('rsync', function() {
	return gulp.src('orphan/assets/**')
	.pipe(rsync({
		root: 'orphan/assets/',
		hostname: 'username@yousite.com',
		destination: 'yousite/public_html/',
		// include: ['*.htaccess'], // Includes files to deploy
		exclude: ['**/Thumbs.db', '**/*.DS_Store'], // Excludes files from deploy
		recursive: true,
		archive: true,
		silent: false,
		compress: true
	}))
});


gulp.task('watch', ['styles', 'js', 'browser-sync'], function() {
	gulp.watch('orphan/assets/'+syntax+'/**/*.'+syntax+'', ['styles']);
	gulp.watch(['libs/**/*.js', 'orphan/assets/js/common.js'], ['js']);
	gulp.watch('orphan/assets/*.html', browsersync.reload);
	gulp.watch('orphan/**/*.php', browsersync.reload);
});

//--------------------------------svg-sprite-----------------------------
gulp.task('symbols', function() {
  return gulp.src('orphan/img/icon/*.svg')
    .pipe(svgmin())
    .pipe(svgstore({
      inlineSvg: true
    }))
    .pipe(cheerio({
      run: function($) {
        $('[fill]').removeAttr('fill');
        $('[style]').removeAttr('style');
        $('[class]').removeAttr('class');
        $('title').remove();
        $('defs').remove();
        $('style').remove();
        $('svg').attr('style', 'display:none');
      }
    }))
    .pipe(rename('symbols.html'))
    .pipe(gulp.dest('orphan/img'));
});

gulp.task('default', ['watch']);
