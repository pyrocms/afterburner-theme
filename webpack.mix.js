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

mix
    .sass('resources/scss/theme/theme.scss', 'resources/css')
    .js([
        'resources/js/src/app.js',
        'resources/js/src/polyfills.js',
    ], 'resources/js/theme.js')
    .sourceMaps();
