import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.jsx",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            height: {
                "10vh": "10vh", //1º nombre de la clase | 2º valor de la clase
                "15vh": "15vh",
                "65vh": "65vh",
            },
            colors: {
                header: "#574973",
                footer: "#F2C5BB",
                main: "#B2A0D9",
                nav: "#7C68A6",
                placeholder: "#404040",
            },
        },
    },

    plugins: [forms, require("daisyui")],
};
