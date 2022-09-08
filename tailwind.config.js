/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'current': '#1D1D1B',
                'gray': '#FCFCFA',
                'gray-two': '#E9E9E9',
                'gray-three': '#B6B6B6',
                'gray-four': '#303030',
                'gray-five': '#F9F9F9',
                'gray-six': 'rgba(74, 37, 69, 0.1)',
                'gray-seven': '#ECECEC',
                'gray-eight': '#3C4043',
                'pur-pure': '#4A2545',
                'white': '#ffffff',
                'pink': '#E5005B',
                'pink-one': 'rgba(229, 0, 91, 0.03)',
                'pink-three': 'rgba(229, 0, 91, 0.08)',
                'black': '#000',
                'green' : '#24A439',
                'red-one' : '#FFF5F9',
            },
            fontFamily: {
                sans: ['Montserrat', 'sans-serif'],
            },
        },

    },
    plugins: [],
}
