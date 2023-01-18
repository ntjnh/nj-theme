/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    content: [
        './assets/**/*.js',
        './*.php'
    ],
    theme: {
        screens: {
            sm: '576px',
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
        extend: {},
    },
    plugins: [],
}
