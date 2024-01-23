/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./views/**/*.{html,js}", "./node_modules/tw-elements/dist/js/**/*.js"
  ],

  theme: {
    extend: {
      fontFamily: {
        anton: ["Anton"],
      },

      animation: {
        "fade-up": "fadeUp 0.5s 0.3s backwards",
        "fade-down": "fadeDown 0.1s backwards",
        "fade-in": "fadeIn 1s",
      },
      keyframes: {
        fadeUp: {
          "0%": {
            opacity: "0",
            transform: "translateY(30px) scale(0.9)",
          },
          "100%": {
            opacity: "1",
            transform: "translateY(0) scale(1)",
          },
        },
        fadeDown: {
          "0%": {
            opacity: "0",
            transform: "translateY(-30px) scale(0.9)",
          },
          "100%": {
            opacity: "1",
            transform: "translateY(0) scale(1)",
          },
        },
        fadeIn: {
          from: {
            opacity: "0",
            transform: "translate3d(0, -20%, 0)",
          },
          to: {
            opacity: "1",
            transform: "translate3d(0, 0, 0)",
          },
        },
      },

      screens: {
        // Range Mobile Screen
        mobile360: "360px",
        // => @media (min-width: 360px) { 11% }

        mobile390: "390px",
        // => @media (min-width: 390px) { 8% }

        mobile414: "414px",
        // => @media (min-width: 414px) { 5.55% }

        mobile393: "393px",
        // => @media (min-width: 393px) { 5.26% }

        mobile412: "412px",
        // => @media (min-width: 412px) { 5% }

        mobile430: "430px",
        // => @media (min-width: 430px) { Default }

        ipad: "768px",
        // => @media (min-width: 768px) { ... }

        tablet: "992px",
        // => @media (min-width: 992px) { ... }

        ipadPro: "1024px",
        // => @media (min-width: 1024px) { ... }

        laptop: "1280px",
        // => @media (min-width: 1280px) { ... }

        laptop1440: "1440px",
        // => @media (min-width: 1440px) { ... }

        desktop: "1536px",
        // => @media (min-width: 1536px) { ... }
      },
    },
  },
  plugins: [],
};