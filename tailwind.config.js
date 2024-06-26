import forms from '@tailwindcss/forms';
import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            'white': '#ffffff',
            'black': '#000000',
            'brown': {
                light: '#724E2F',
                dark: '#5d3621',
            },
            'blue': {
                light: '#333B50',
                dark: '#1F2237',
                'pale': '#3B4E75',
                'pale-light': '#CBD3E3',
            }
        },
        backgroundImage: {
            'gradient-brown': "linear-gradient(to right, #724E2F, #5d3621);",
            'gradient-blue': "linear-gradient(to right, #333B50, #1F2237);",
        },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
