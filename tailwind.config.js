const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                linkbtn: {
                    light: '#8FC31F',
                    DEFAULT: '#29a938',
                    dark: '#04ad4e',
                }
            },

        },
    },

    plugins: [require('@tailwindcss/forms')],
};
