/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        
        extend: {
          spacing: {
            '128': '32rem',
          },
            flexBasis: {
                "1/10": "6%",
                "1/4": "24%",
                "13/20": "70%",
                "1/15": "4%",
                "2/3": "86%",
            },
        },
        
    },
    plugins: [],
};
