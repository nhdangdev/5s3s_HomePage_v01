/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./views/**/*.{html,js}", "./node_modules/tw-elements/dist/js/**/*.js"
  ],

  theme: {
    extend: {
      fontFamily: {
        anton: ['Anton']
      },

      animation: {
        'fade-up': 'fadeUp 0.5s 0.3s backwards',
        'fade-down': 'fadeDown 0.1s backwards',
        'fade-in': 'fadeIn 1s'
      },
      keyframes: {
        fadeUp: {
          '0%': {
            opacity: '0',
            transform: 'translateY(30px) scale(0.9)',
          },
          '100%': {
            opacity: '1',
            transform: 'translateY(0) scale(1)',
          },
        },
        fadeDown: {
          '0%': {
            opacity: '0',
            transform: 'translateY(-30px) scale(0.9)',
          },
          '100%': {
            opacity: '1',
            transform: 'translateY(0) scale(1)',
          },
        },
        fadeIn: {
          from: {
            opacity: '0',
            transform: 'translate3d(0, -20%, 0)',
          },
          to: {
            opacity: '1',
            transform: 'translate3d(0, 0, 0)',
          }
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
  },
  plugins: [],
};