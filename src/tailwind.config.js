import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'rosa': '#FDEFE7',
                'celestito': '#f1f3ff',
                'celeste': '#A0A8FF',
                'celeste2': '#4172A9',
                'azul': '#4267B2',
                'verde': '#dcffd7',
                // Añade más colores personalizados si es necesario
            },
        },
    },

    plugins: [forms, typography],
};
