/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["index.html"],
  theme: {
    container: {
      center: true,
      padding: "16px",
    },
    extend: {
      colors: {
        primary: "#FF00e0",
        secondary: "#64748b",
        dark: "#0f172a",
        twitter: "#00acee",
        instagram: "#dd2a78",
        github: "#171515",
        linkedln: "#0e2da8",
      },
      screens: {
        "2xl": "1230px",
      },
    },
  },
  plugins: [],
};
