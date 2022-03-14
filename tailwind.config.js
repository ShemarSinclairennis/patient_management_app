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
            transparent: "transparent",
            white: {
                DEFAULT: "#FFFFFF",
            },
            gray: {
                DEFAULT: "#808080",
                100: "#F0F0F0",
                200: "#FAFAFA",
                400: "#808080",
                500: " #808080",

                50: "#6F6F6F",
                600: "#D0D3E1",
                700: "#8B99B0",
                800: "#F2F2F2",
            },
            black: {
                DEFAULT: "#191D23",
                100: "#535353",
            },
            purple: {
                400: "#7100F5",
            },
            green: {
                400: "#009F4F",
            },
            blue: {
                DEFAULT: "#0011D8",
                400: "#0011D8",
            },
            orange: {
                400: "#FF6263",
            },
            red: {
                DEFAULT: "#E80000",
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
