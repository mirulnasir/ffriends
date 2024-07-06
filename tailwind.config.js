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
        '10xl': '1500px',
      },
      fontFamily: {
        heading: ['Raleway', 'sans-serif'],
        body: ['Open Sans', 'sans-serif'],
      },
      colors: {
        'brand-primary-blue': '#1C75BC',
        'brand-secondary-off-white': '#EAF4F6',
        'brand-secondary-light-blue': '#83B7E6',
        'brand-secondary-blue': '#0F4C85',
        'brand-secondary-dark-blue': '#00305B',
        'brand-secondary-dark-gray': '#58595B',
        'brand-primary-black': '#1C1B1B',
      },
      dropShadow: {
        'heading': '0 4px 4px rgba(0, 0, 0, 0.25)',
      }
    },
  },
  plugins: [],
}

