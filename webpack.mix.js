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

mix.js('resources/js/app.js', 'public/js').extract(['jquery', 'bootstrap', 'vue', 'axios', 'bootstrap-vue'])


mix.styles([
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    'node_modules/bootstrap-vue/dist/bootstrap-vue.min.css'
], 'public/css/vendors.css')
    .styles('resources/css/auth.css','public/css/auth.css')
    .styles('resources/css/app.css', 'public/css/app.css')

