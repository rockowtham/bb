const { mix } = require('laravel-mix');

mix.setPublicPath('/public/manifest.json');

mix.js('resources/js/app.js', 'public/js/app.js')
  .sass('resources/sass/app.scss', 'public/css/app.css');

mix.browserSync('localhost:8000');