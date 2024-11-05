import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            backgroundImage: {
                'custom-radial': 'radial-gradient(circle at bottom, rgba(131, 162, 219, 0.7) 10%, #E7ECF1 90%)',
            },
        },
    },
    plugins: [],
};
