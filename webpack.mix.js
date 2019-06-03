const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    //for moment.js
    .scripts([
        'node_modules/moment/moment.js'
    ], 'public/js/moment.js')  
    //for nprogress.js
    .scripts([
        'node_modules/nprogress/nprogress.js'
    ], 'public/js/nprogress.js')
    .styles(['node_modules/nprogress/nprogress.css'], 'public/css/nprogress.css')
   .sass('resources/sass/app.scss', 'public/css');
