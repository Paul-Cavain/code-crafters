/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        limeGreen: "#86C232",
        darkGreen: "#222629",
        neutralGray: "#6B6E70",
      },
    },
  },
  plugins: [],
};
