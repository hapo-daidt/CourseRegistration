const mix = require('laravel-mix');

// Cấu hình biên dịch CSS từ Tailwind
mix.postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
    require('autoprefixer'),
]);


mix.css('resources/css/style.css', 'public/css');
mix.css('resources/css/style.css', 'public/css/style.css');

