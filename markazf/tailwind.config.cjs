/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./index.html", "./src/**/*.{react,js,ts,jsx,tsx}"],
  theme: {
    screens: {
      sm: "360px",
      md: "650px",
      lg: "876px",
      xl: "1440px",
    },
  },
  plugins: [],
};
