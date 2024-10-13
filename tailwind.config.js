/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./Harvest/Bahooosh/resources/**/*.blade.php"
    ],
    theme: {
        extend: {},
    },
    plugins: [],
    screens: {
        'mobile': '500px',
        // => @media (min-width: 500px) { ... }

        'tablet': '640px',
        // => @media (min-width: 640px) { ... }

        'laptop': '1024px',
        // => @media (min-width: 1024px) { ... }

        'desktop': '1280px',
        // => @media (min-width: 1280px) { ... }
    },
}
