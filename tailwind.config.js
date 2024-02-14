import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
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
            color: {
                header: "#6915C2",
                footer: "#1531BE",
                main: "#9F15BE",
                nav: "#2E15BE",
            },
        },
    },

    plugins: [forms],
};
