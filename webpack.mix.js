let mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

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
        'resources/js/app.js',
        'resources/js/polyfills.js',
    ], 'resources/js/theme.js')
    .options({
        processCssUrls: false,
        // postCss: [
        //     tailwindcss('./tailwind.config.js')
        // ]
    })
    .sourceMaps();
