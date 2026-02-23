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
                sans: ["Poppins", ...defaultTheme.fontFamily.sans],
                heading: ["Boldonse", "sans-serif"],
            },
            colors: {
                background: "#F3F5F3",
                text: "#443737",
                primary: "#FDCC18",
                secondary: "#D33F17",
                tertiary: "#022447",
                accent: "#0C4C7B",
            },
            backgroundImage: {
                "footer-gradient":
                    "linear-gradient(to bottom, #0C4C7B, #022447)",
                "radial-hero": "radial-gradient(circle, #0C4C7B, #022447)",
                "box-gradient": "linear-gradient(to right, #FDCC18, #D33F17)",
                "hero-gradient": "linear-gradient(to bottom, #FDCC18, #D33F17)",
            },
        },
    },

    plugins: [forms],
};
