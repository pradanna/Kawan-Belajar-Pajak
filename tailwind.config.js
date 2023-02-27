/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      colors: {},
      height: {
        "25%": "25%",
        "50%": "50%",
        "75%": "75%",
        "100%": "100%",
      },
      margin: {
        "100": "-100px",
      },
    },
  },
  plugins: [require("flowbite/plugin")],
};
