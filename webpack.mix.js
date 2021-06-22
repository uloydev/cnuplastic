const mix = require("laravel-mix");

require("laravel-mix-tailwind");
require('laravel-mix-serve');

mix.js("resources/js/app.js", "public/js/app.js")
    .sass("resources/sass/app.scss", "public/css/app.css")
    .tailwind("./tailwind.config.js")
    .sourceMaps();

//customer asset
mix.sass('resources/sass/style.scss', 'public/css/style.css')
    .js('resources/js/style.js', 'public/js')
    .sourceMaps();

if (mix.inProduction()) {
    mix.version()
}
else {
    mix.serve();
    mix.browserSync({proxy: 'localhost:8000'});
}
