import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
const colors = require('tailwindcss/colors')
/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./resources/**/*.html",
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        screen: {
            sm: "576px",
            md: "768px",
            lg: "992px",
            xl: "1200px",
          },
        container: {
            center: true,
            padding: "1rem",
          },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                poppins: ["Poppins", "sans-serif"],
                roboto: ["Roboto", "sans-serif"],
            },
            colors: {
                primary: "#45A0FE",
                'light-blue': colors.sky,
                cyan: colors.cyan,
              },
              width: {
                120: '120%',
              },
              height: {
                120: '120%',
              },
              inset: {
                '-10': '-10%',
              },
              borderRadius: {
                100: '100%',
              },
              animation: {
                glow1: 'glow1 4s linear infinite',
                glow2: 'glow2 4s linear infinite',
                glow3: 'glow3 4s linear infinite',
                glow4: 'glow4 4s linear infinite',
              },
              keyframes: {
                glow1: {
                  '0%': { transform: 'translate(10%, 10%) scale(1)' },
                  '25%': { transform: 'translate(-10%, 10%) scale(1)' },
                  '50%': { transform: 'translate(-10%, -10%) scale(1)' },
                  '75%': { transform: 'translate(10%, -10%) scale(1)' },
                  '100%': { transform: 'translate(10%, 10%) scale(1)' },
                },
                glow2: {
                  '0%': { transform: 'translate(-10%, -10%) scale(1)' },
                  '25%': { transform: 'translate(10%, -10%) scale(1)' },
                  '50%': { transform: 'translate(10%, 10%) scale(1)' },
                  '75%': { transform: 'translate(-10%, 10%) scale(1)' },
                  '100%': { transform: 'translate(-10%, -10%) scale(1)' },
                },
                glow3: {
                  '0%': { transform: 'translate(-10%, 10%) scale(1)' },
                  '25%': { transform: 'translate(-10%, -10%) scale(1)' },
                  '50%': { transform: 'translate(10%, -10%) scale(1)' },
                  '75%': { transform: 'translate(10%, 10%) scale(1)' },
                  '100%': { transform: 'translate(-10%, 10%) scale(1)' },
                },
                glow4: {
                  '0%': { transform: 'translate(10%, -10%) scale(1)' },
                  '25%': { transform: 'translate(10%, 10%) scale(1)' },
                  '50%': { transform: 'translate(-10%, 10%) scale(1)' },
                  '75%': { transform: 'translate(-10%, -10%) scale(1)' },
                  '100%': { transform: 'translate(10%, -10%) scale(1)' },
                },
              },
        },
        
    plugins: [forms,
      require('flowbite/plugin')
    ],
      }
};
