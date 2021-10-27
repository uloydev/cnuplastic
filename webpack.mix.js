const mix = require("laravel-mix");

require('laravel-mix-serve');

//customer asset
mix.sass('resources/sass/style.scss', 'public/css/style.css')
    .js('resources/js/style.js', 'public/js')
    .copy('resources/dummy/img', 'storage/app/public/img')
    .sourceMaps()

if (mix.inProduction()) {
    mix.version()
}
else {
    mix.serve();
    mix.browserSync({proxy: 'localhost:8000'});
}
