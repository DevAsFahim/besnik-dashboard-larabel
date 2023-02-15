const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            spacing: {
                '2px': '2px',
                '3px': '3px',
                '5px': '5px',
                '6px': '6px',
                '7px': '7px',
                '9px': '9px',
                '10px': '10px',
                '11px': '11px',
                '12px': '12px',
                '13px': '13px',
                '15px': '15px',
                '17px': '17px',
                '18px': '18px',
                '19px': '19px',
                '22px': '22px',
                '25px': '25px',
                '30px': '30px',
                '35px': '35px',
                '42px': '42px',
                '49px': '49px',
                '813px': '813px',
                '654px': '654px',
                '1070px': '1070px',
                '1130px': '1130px',
            },
            borderRadius: {
                '5px': '5px',
                '6px': '6px',
                '10px': '10px',
                '15px': '15px',
                '8px': '8px',
            }
        },
        colors: {
            'primary': '#685CF0',
            'white': '#ffffff',
            'title-color': '#1E1E1E',
            'border-color': '#EAEAEA',
            'text-color': '#929292',
            '2nd-text-color': '#B0B0B0',
            'gray': '#F4F4F6',
            'black': '#000000',
            'yellow': '#ffc82c',
            'gray-dark': '#273444',
            'gray-light': '#d3dce6',
            'orange': '#F2994A',
            'green': '#4BB543',
            'red': '#FB3838',
        }
    },

    plugins: [require('@tailwindcss/forms')],
};
