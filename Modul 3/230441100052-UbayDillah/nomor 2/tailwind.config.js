/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.{html,js}"],
  theme: {
    extend: {
      fontFamily: {
        Poppins: "Poppins",
      },
      colors: {
        base1: "#1AB949",
        base2: "#81888C",
        base3: "#263238",
      },
    },
  },
  plugins: [],
};
