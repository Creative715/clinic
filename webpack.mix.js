let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .version()
    .sass('resources/sass/app.scss', 'public/css');
