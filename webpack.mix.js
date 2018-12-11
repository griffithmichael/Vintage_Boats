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
   .sass('resources/assets/sass/app.scss', 'public/css')
   .js([
      'resources/js/jquery.js',
      'resources/js/bootstrap.js',
      'resources/js/Chart.js',
      'resources/js/metisMenu.js',
      'resources/js/sb-admin-2.js',
      'resources/js/frontend.js',
      'resources/js/functions.js'
  ], 'public/assets/scripts/frontend.js')
  .sourceMaps();
