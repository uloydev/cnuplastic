const mix = require("laravel-mix");

require("laravel-mix-tailwind");
require('laravel-mix-serve');

mix.js("resources/js/app.js", "public/js/app.js")
    .sass("resources/sass/app.scss", "public/css/app.css")
    .tailwind("./tailwind.config.js")
    .sourceMaps();

if (mix.inProduction()) {
    mix.version();
}
else {
    mix.browserSync('http://localhost:8000').serve()
}