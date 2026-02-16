/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php", "./*.html", "./**/*.php", "./**/*.html"],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter', 'system-ui', 'sans-serif'],
      },
      keyframes: {
        "pulse-wave": {
          "0%, 100%": { transform: "scaleY(1)" },
          "50%": { transform: "scaleY(1.5)" },
        },
        orbit: {
          from: { transform: "rotate(0deg)" },
          to: { transform: "rotate(360deg)" },
        },
        float: {
          "0%, 100%": { transform: "translateY(0px)" },
          "50%": { transform: "translateY(-20px)" },
        },
        scroll: {
          from: { transform: "translateX(0)" },
          to: { transform: "translateX(-50%)" },
        },
      },
      animation: {
        "pulse-wave": "pulse-wave 1s ease-in-out infinite",
        "orbit-1": "orbit 50s linear infinite",
        "orbit-2": "orbit 40s linear infinite",
        float: "float 4s ease-in-out infinite",
        "float-delayed": "float 5s ease-in-out infinite",
        "float-mobile": "float 6s ease-in-out infinite",
        scroll: "scroll 25s linear infinite",
      },
    },
  },
  plugins: [],
};
