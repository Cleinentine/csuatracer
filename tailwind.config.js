/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        fontFamily: {
            dancing: ["Dancing Script", "cursive"],
            montserrat: ["Montserrat", "sans-serif"],
            nunito: ["Nunito", "sans-serif"],
            roboto: ["Roboto Condensed", "sans-serif"],
        },
    },
    plugins: [],
};
