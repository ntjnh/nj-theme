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
            sans: [
                'Inter',
                ...defaultTheme.fontFamily.sans
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
        extend: {
            fontSize: {
                '3xxl': ['2rem', '2.375rem'],
                '4xxl': ['2.5rem', '3rem'],
                '6xxl': ['4rem', '4rem']
            },
            maxWidth: {
                'box-sm': '540px',
                'box-md': '720px',
                'box-lg': '848px',
                'box-xl': '1056px'
            }
        },
    },
    plugins: [],
}
