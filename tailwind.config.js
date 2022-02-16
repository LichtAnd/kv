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
                // https://www.tailwindshades.com/#color=15%2C65%2C50&step-up=11&step-down=11&hue-shift=15&name=flame-pea&overrides=eyIxIjp7Imh1ZSI6LTEsInNhdHVyYXRpb24iOjQ0LCJsaWdodG5lc3MiOi0xLCJoZXgiOiJGNkVFRTkiLCJ0ZXh0Q29sb3IiOiJibGFjayJ9LCIyIjp7Imh1ZSI6LTEsInNhdHVyYXRpb24iOjQ4LCJsaWdodG5lc3MiOi0xLCJoZXgiOiJFOENDQkYiLCJ0ZXh0Q29sb3IiOiJibGFjayJ9LCIzIjp7Imh1ZSI6LTEsInNhdHVyYXRpb24iOjUyLCJsaWdodG5lc3MiOi0xLCJoZXgiOiJEREE5OTIiLCJ0ZXh0Q29sb3IiOiJibGFjayJ9LCI0Ijp7Imh1ZSI6LTEsInNhdHVyYXRpb24iOjU2LCJsaWdodG5lc3MiOi0xLCJoZXgiOiJEMzgyNjQiLCJ0ZXh0Q29sb3IiOiJibGFjayJ9LCI1Ijp7Imh1ZSI6LTEsInNhdHVyYXRpb24iOjYwLCJsaWdodG5lc3MiOi0xLCJoZXgiOiJDQzU5MzMiLCJ0ZXh0Q29sb3IiOiJ3aGl0ZSJ9LCI2Ijp7Imh1ZSI6LTEsInNhdHVyYXRpb24iOjY0LCJsaWdodG5lc3MiOi0xLCJoZXgiOiJBMzQwMjQiLCJ0ZXh0Q29sb3IiOiJ3aGl0ZSJ9LCI3Ijp7Imh1ZSI6LTEsInNhdHVyYXRpb24iOjY4LCJsaWdodG5lc3MiOi0xLCJoZXgiOiI3ODJBMTciLCJ0ZXh0Q29sb3IiOiJ3aGl0ZSJ9LCI4Ijp7Imh1ZSI6LTEsInNhdHVyYXRpb24iOjcyLCJsaWdodG5lc3MiOi0xLCJoZXgiOiI0QjE3MEMiLCJ0ZXh0Q29sb3IiOiJ3aGl0ZSJ9LCI5Ijp7Imh1ZSI6LTEsInNhdHVyYXRpb24iOjc1LCJsaWdodG5lc3MiOi0xLCJoZXgiOiIxQjA3MDQiLCJ0ZXh0Q29sb3IiOiJ3aGl0ZSJ9LCIwLjUiOnsiaHVlIjotMSwic2F0dXJhdGlvbiI6NDAsImxpZ2h0bmVzcyI6LTEsImhleCI6IkZFRkVGRCIsInRleHRDb2xvciI6ImJsYWNrIn19
                DEFAULT: '#D2562D',
                '50': '#FAF5F3',
                '100': '#F5EBE5',
                '200': '#EBD2C6',
                '300': '#DDA992',
                '400': '#D38264',
                '500': '#CC5933',
                '600': '#A34024',
                '700': '#782A17',
                '800': '#4B170C',
                '900': '#1B0704'
            },
            primary: {
                // https://www.tailwindshades.com/#color=15%2C65%2C50&step-up=11&step-down=11&hue-shift=15&name=flame-pea&overrides=eyIxIjp7Imh1ZSI6LTEsInNhdHVyYXRpb24iOjQ0LCJsaWdodG5lc3MiOi0xLCJoZXgiOiJGNkVFRTkiLCJ0ZXh0Q29sb3IiOiJibGFjayJ9LCIyIjp7Imh1ZSI6LTEsInNhdHVyYXRpb24iOjQ4LCJsaWdodG5lc3MiOi0xLCJoZXgiOiJFOENDQkYiLCJ0ZXh0Q29sb3IiOiJibGFjayJ9LCIzIjp7Imh1ZSI6LTEsInNhdHVyYXRpb24iOjUyLCJsaWdodG5lc3MiOi0xLCJoZXgiOiJEREE5OTIiLCJ0ZXh0Q29sb3IiOiJibGFjayJ9LCI0Ijp7Imh1ZSI6LTEsInNhdHVyYXRpb24iOjU2LCJsaWdodG5lc3MiOi0xLCJoZXgiOiJEMzgyNjQiLCJ0ZXh0Q29sb3IiOiJibGFjayJ9LCI1Ijp7Imh1ZSI6LTEsInNhdHVyYXRpb24iOjYwLCJsaWdodG5lc3MiOi0xLCJoZXgiOiJDQzU5MzMiLCJ0ZXh0Q29sb3IiOiJ3aGl0ZSJ9LCI2Ijp7Imh1ZSI6LTEsInNhdHVyYXRpb24iOjY0LCJsaWdodG5lc3MiOi0xLCJoZXgiOiJBMzQwMjQiLCJ0ZXh0Q29sb3IiOiJ3aGl0ZSJ9LCI3Ijp7Imh1ZSI6LTEsInNhdHVyYXRpb24iOjY4LCJsaWdodG5lc3MiOi0xLCJoZXgiOiI3ODJBMTciLCJ0ZXh0Q29sb3IiOiJ3aGl0ZSJ9LCI4Ijp7Imh1ZSI6LTEsInNhdHVyYXRpb24iOjcyLCJsaWdodG5lc3MiOi0xLCJoZXgiOiI0QjE3MEMiLCJ0ZXh0Q29sb3IiOiJ3aGl0ZSJ9LCI5Ijp7Imh1ZSI6LTEsInNhdHVyYXRpb24iOjc1LCJsaWdodG5lc3MiOi0xLCJoZXgiOiIxQjA3MDQiLCJ0ZXh0Q29sb3IiOiJ3aGl0ZSJ9LCIwLjUiOnsiaHVlIjotMSwic2F0dXJhdGlvbiI6NDAsImxpZ2h0bmVzcyI6LTEsImhleCI6IkZFRkVGRCIsInRleHRDb2xvciI6ImJsYWNrIn19
                DEFAULT: '#D2562D',
                '50': '#FAF5F3',
                '100': '#F5EBE5',
                '200': '#EBD2C6',
                '300': '#DDA992',
                '400': '#D38264',
                '500': '#CC5933',
                '600': '#A34024',
                '700': '#782A17',
                '800': '#4B170C',
                '900': '#1B0704'
            },
            secondary: {
                // https://www.tailwindshades.com/#color=205%2C65%2C50&step-up=11&step-down=11&hue-shift=15&name=curious-blue&overrides=eyIxIjp7Imh1ZSI6LTEsInNhdHVyYXRpb24iOjQ0LCJsaWdodG5lc3MiOi0xLCJoZXgiOiJFOUVGRjYiLCJ0ZXh0Q29sb3IiOiJibGFjayJ9LCIyIjp7Imh1ZSI6LTEsInNhdHVyYXRpb24iOjQ4LCJsaWdodG5lc3MiOi0xLCJoZXgiOiJCRkQ0RTgiLCJ0ZXh0Q29sb3IiOiJibGFjayJ9LCIzIjp7Imh1ZSI6LTEsInNhdHVyYXRpb24iOjUyLCJsaWdodG5lc3MiOi0xLCJoZXgiOiI5MkJBREQiLCJ0ZXh0Q29sb3IiOiJibGFjayJ9LCI0Ijp7Imh1ZSI6LTEsInNhdHVyYXRpb24iOjU2LCJsaWdodG5lc3MiOi0xLCJoZXgiOiI2NEEyRDMiLCJ0ZXh0Q29sb3IiOiJibGFjayJ9LCI1Ijp7Imh1ZSI6LTEsInNhdHVyYXRpb24iOjYwLCJsaWdodG5lc3MiOi0xLCJoZXgiOiIzMzhDQ0MiLCJ0ZXh0Q29sb3IiOiJ3aGl0ZSJ9LCI2Ijp7Imh1ZSI6LTEsInNhdHVyYXRpb24iOjY0LCJsaWdodG5lc3MiOi0xLCJoZXgiOiIyNDcxQTMiLCJ0ZXh0Q29sb3IiOiJ3aGl0ZSJ9LCI3Ijp7Imh1ZSI6LTEsInNhdHVyYXRpb24iOjY4LCJsaWdodG5lc3MiOi0xLCJoZXgiOiIxNzU0NzgiLCJ0ZXh0Q29sb3IiOiJ3aGl0ZSJ9LCI4Ijp7Imh1ZSI6LTEsInNhdHVyYXRpb24iOjcyLCJsaWdodG5lc3MiOi0xLCJoZXgiOiIwQzM1NEIiLCJ0ZXh0Q29sb3IiOiJ3aGl0ZSJ9LCI5Ijp7Imh1ZSI6LTEsInNhdHVyYXRpb24iOjc1LCJsaWdodG5lc3MiOi0xLCJoZXgiOiIwNDE0MUIiLCJ0ZXh0Q29sb3IiOiJ3aGl0ZSJ9LCIwLjUiOnsiaHVlIjotMSwic2F0dXJhdGlvbiI6NDAsImxpZ2h0bmVzcyI6LTEsImhleCI6IkZERkVGRSIsInRleHRDb2xvciI6ImJsYWNrIn19
                DEFAULT: '#2D8DD2',
                '50': '#FDFEFE',
                '100': '#E9EFF6',
                '200': '#BFD4E8',
                '300': '#92BADD',
                '400': '#64A2D3',
                '500': '#338CCC',
                '600': '#2471A3',
                '700': '#175478',
                '800': '#0C354B',
                '900': '#04141B'
            }
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
        require('@tailwindcss/typography'),
        require('tailwindcss-debug-screens'),
        require('tailwindcss-fluid-type')
    ],
};
