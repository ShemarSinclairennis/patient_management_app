const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        colors: {
            white: {
                DEFAULT: "#FFFFFF",
            },
            gray: {
                400: "#808080",
                500: "#FAFAFA",
            },
            black: {
                DEFAULT: "#000000",
            },
            purple: {
                400: "#7100F5",
            },
        },
        extend: {
            fontFamily: {
                sans: ["Roboto", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
