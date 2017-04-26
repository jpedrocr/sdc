const { mix } = require('laravel-mix');

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

mix.options({
     extractVueStyles: false,
     purifyCss: true,
     clearConsole: false
   })
   .version()
   .setPublicPath('../public_html')
   .js('resources/assets/js/app.js', 'js')
   .extract(['axios', 'bootstrap-sass', 'jquery', 'lodash', 'vue'])
   .sass('resources/assets/sass/app.scss', 'css');
