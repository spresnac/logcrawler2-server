const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/lang/**/*.php',
        './app/Repositories/**/*.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: [...defaultTheme.fontFamily.sans],
            },
        },
    },
    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
