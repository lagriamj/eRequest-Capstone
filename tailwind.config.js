/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      sans: ['Poppins', 'sans-serif'],
    },
    letterSpacing: {
      tightest: '-.075em',
      tighter: '-.05em',
      tight: '-.025em',
      normal: '0',
      wide: '.025em',
      wider: '.05em',
      widest: '.1em',
      mostWidest: '.90em',
    },
    extend: {
      colors: {
        'main': '#343467',
      },
      borderRadius: {
        'custom-bl': '60%',
        'custom-tl': '4%',
      },
      fontFamily: {
        sans: ['Poppins', 'sans-serif'],
        'sans-semi': ['Poppins Semibold', 'sans-serif'],
      },
    },
  },
  plugins: [],
}

