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
                50: "#8E8E8E",
                600: "#D0D3E1",
                700: "#8B99B0",
                800: "#F2F2F2",
            },
            black: {
                DEFAULT: "#000000",
            },
            purple: {
                400: "#7100F5",
            },
            green: {
                400: "#009F4F",
            },
            blue: {
                400: "#0011D8",
            },
            orange: {
                400: "#FF6263",
            },
            red: {
                400: "#E80000",
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
