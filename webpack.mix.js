let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .js('resources/assets/js/submenu.js', 'public/js')
   .js('resources/assets/js/mobile.js', 'public/js')
   .js('resources/assets/js/home.js', 'public/js')
   .js('resources/assets/js/owl.carousel.min.js', 'public/js')
   // .sass('resources/assets/sass/app.scss', 'public/css')
   .styles('resources/assets/css/app.css', 'public/css/app.css')
   .styles('resources/assets/css/owl.carousel.min.css', 'public/css/owl.carousel.min.css')
   .styles('resources/assets/css/app.css', 'public/css/app.css')
   .copy('resources/assets/css/owl.theme.default.min.css', 'public/css/owl.carousel.theme.default.min.css')
   .copyDirectory('resources/assets/img', 'public/img')
   .copyDirectory('resources/assets/arquivos', 'public/arquivos')
   .copyDirectory('resources/assets/adminlte', 'public/adminlte');
