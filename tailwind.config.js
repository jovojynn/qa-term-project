/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/**/*.{html,php}', './node_modules/tw-elements/dist/js/**/*.js'],
  theme: {
    fontFamily: {
      'playfair': ['"Playfair Display"', 'serif'],
      'quicksand': ['Quicksand', 'sans-serif'],
    },
    extend: {
      colors: {
        'pink': '#EDB098',
        'coral': '#EA9087',
        'blush': '#CB8D9A',
        'blue': '#A3BFD7',
        'white': '#fff',
        'black': '#000'
      },
    },
  },
  plugins: [require('tw-elements/dist/plugin')],
}
