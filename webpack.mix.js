const mix = require('laravel-mix');
mix.disableNotifications();
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ]);
mix.postCss('node_modules/@fortawesome/fontawesome-free/css/all.css', 'public/css/fa-all.css');
mix.version();
