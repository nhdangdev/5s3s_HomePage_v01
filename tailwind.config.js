/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./views/**/*.{html,js}"],
  theme: {
    extend: {
      fontFamily: {
        anton: ['Anton']
      }
    },
    screens: {
      'mobile': '768px',
      // => @media (min-width: 640px) { ... }

      'tablet': '992px',
      // => @media (min-width: 992px) { ... }

      'laptop': '1280px',
      // => @media (min-width: 1280px) { ... }

      'desktop': '1536px',
      // => @media (min-width: 1536px) { ... }


    },
  },
  plugins: [],
}