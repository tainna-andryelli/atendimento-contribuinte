const mix = require("laravel-mix");

mix.sass("resources/sass/app.scss", "public/css").options({
    processCssUrls: false,
    postCss: [require("tailwindcss")],
});
