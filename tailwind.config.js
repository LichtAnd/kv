const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            white: 'white',
            black: 'black',
            gray: colors.neutral,
            accent: {
                DEFAULT: '#91AB9A',
                '50': '#F9FBFA',
                '100': '#EEF2F1',
                '200': '#D6E0DE',
                '300': '#BFCEC9',
                '400': '#A8BDB2',
                '500': '#91AB9A',
                '600': '#719379',
                '700': '#58745B',
                '800': '#405440',
                '900': '#293428'
            },
            primary: {
                '50': '#fbf9f8',
                '100': '#f6f4f3',
                '200': '#ebe0e2',
                '300': '#ddcacd',
                '400': '#b59197',
                '500': '#885c62',
                '600': '#734d4d',
                '700': '#4f3133',
                '800': '#301d24',
                '900': '#231013',
            },
        },
        extend: {
            fontFamily: {
                accent: ['Archivo Black', ...defaultTheme.fontFamily.sans],
                body: ['Archivo', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography')],
};
