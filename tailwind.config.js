import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
      ],
    theme: {
        extend: {
            fontFamily: {
                "hanken-grotesk": ['Hanken Grotesk', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                "2xs": ".625rem",
            },
            colors: {
                black: '#060606'
            }
        },
    },
    plugins: [],
};
