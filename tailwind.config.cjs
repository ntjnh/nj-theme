/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    content: [
        './assets/**/*.js',
        './*.php'
    ],
    theme: {
        screens: {
            'sm': '576px',
            'md': '768px',
            'lg': '1024px',
            'xl': '1280px',
            '2xl': '1536px',
            '3xl': '1800px'
        },
        fontFamily: {
            serif: [
                'bely',
                'Merriweather',
                ...defaultTheme.fontFamily.serif
            ]
        },
        colors: {
            black: '#222',
            blue: '#0052bd',
            yellow: '#fde66b'
        },
        container: {
            center: true,
        },
        extend: {},
    },
    plugins: [],
}
