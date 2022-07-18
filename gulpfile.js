// Определяем переменную "preprocessor"
let preprocessor = 'scss'; // Выбор препроцессора в проекте - sass или less

// Определяем константы Gulp
const { src, dest, parallel, series, watch } = require('gulp');

// Подключаем Browsersync
const browserSync = require('browser-sync').create();

// Подключаем gulp-concat
const concat = require('gulp-concat');

// Подключаем gulp-uglify-es
const uglify = require('gulp-uglify-es').default;

// Подключаем модули gulp-sass и gulp-less
const sass = require('gulp-sass')(require('sass'));
 
// Подключаем Autoprefixer
const autoprefixer = require('gulp-autoprefixer');
 
// Подключаем модуль gulp-clean-css
const cleancss = require('gulp-clean-css');

// Подключаем compress-images для работы с изображениями
const imagecomp = require('compress-images');

// Подключаем модуль del
const del = require('del');



// Определяем логику работы Browsersync
function browsersync() {
   browserSync.init({
      proxy: "mogo.lan",
      notify: false,
      online: true
   })
}

function scripts() {
	return src([
		// 'node_modules/jquery/dist/jquery.min.js',
		'./js/app.js',
		])
	.pipe(concat('app.min.js'))
	.pipe(uglify())
	.pipe(dest('./'))
	.pipe(browserSync.stream())
}



function styles() {
	return src('./' + preprocessor + '/main.' + preprocessor + '')
	.pipe(eval(sass)())
	.pipe(concat('style.css'))
	.pipe(autoprefixer({ cascade: false, }))
	.pipe(cleancss( { level: 2 } ))
	.pipe(dest('./'))
	.pipe(browserSync.stream())
}


// async function images() {
// 	imagecomp(
// 		"./images/src/**/*", // Берём все изображения из папки источника
// 		"./images/dest/", // Выгружаем оптимизированные изображения в папку назначения
// 		{ compress_force: false, statistic: true, autoupdate: true }, false, // Настраиваем основные параметры
// 		{ jpg: { engine: "mozjpeg", command: ["-quality", "75"] } }, // Сжимаем и оптимизируем изображеня
// 		{ png: { engine: "pngquant", command: ["--quality=75-100", "-o"] } },
// 		{ svg: { engine: "svgo", command: "--multipass" } },
// 		{ gif: { engine: "gifsicle", command: ["--colors", "64", "--use-col=web"] } },
// 		function (err, completed) { // Обновляем страницу по завершению
// 			if (completed === true) {
// 				browserSync.reload()
// 			}
// 		}
// 	)
// }


function startwatch() {
 
	// Выбираем все файлы JS в проекте, а затем исключим с суффиксом .min.js
	watch(['./**/*.js', '!./**/*.min.js'], scripts);
	
	// Мониторим файлы препроцессора на изменения
	watch('./**/' + preprocessor + '/**/*', styles);

   // Мониторим файлы HTML на изменения
	watch('./**/*.php').on('change', browserSync.reload);

   // Мониторим папку-источник изображений и выполняем images(), если есть изменения
	// watch('./images/src/**/*', images);
 
}

// function cleanimg() {
// 	return del('./images/dest/**/*', { force: true }) // Удаляем все содержимое папки "app/images/dest/"
// }



// Экспортируем функцию browsersync() как таск browsersync. Значение после знака = это имеющаяся функция.
exports.browsersync = browsersync;
// Экспортируем функцию scripts() в таск scripts
exports.scripts = scripts;
// Экспортируем функцию styles() в таск styles
exports.styles = styles;
// Экспорт функции images() в таск images
// exports.images = images;
// Экспортируем функцию cleanimg() как таск cleanimg
// exports.cleanimg = cleanimg;
// Экспортируем дефолтный таск с нужным набором функций
exports.default = parallel(styles, scripts, browsersync, startwatch);