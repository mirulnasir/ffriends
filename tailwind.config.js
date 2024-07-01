/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./page.php",
    "./page-custom.php",
    "./blocks/**/*.php",
    "./blocks/**/*.css",
    "./resources/**/*.vue",
    "./sections/**/*.php",
  ],
  theme: {
    extend: {
      maxWidth: {
        '8xl': '1376px',
      },
      dropShadow: {
        'heading': '0 4px 4px rgba(0, 0, 0, 0.25)',
      }
    },
  },
  plugins: [],
}

