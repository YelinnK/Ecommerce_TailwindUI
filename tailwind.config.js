/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "resources/views/app.blade.php",
    "resources/views/test.blade.php",
    "resources/views/layout/app.blade.php",
    "resources/views/mainLandingPage.blade.php",
  ],
  theme: {
    screens: {
      sm: '480px',
      md: '768px',
      lg: '976px',
      xl: '1440px'
    },
    extend: {
      colors: {
        brightRed: 'hsl(12, 88%, 59%)',
        brightRedLight: 'hsl(12, 88%, 69%)',
        brightRedSupLight: 'hsl(12, 88%, 95%)',
        darkBlue: 'hsl(228, 39%, 23%)',
        darkGrayishBlue: 'hsl(227, 12%, 61%)',
        veryDarkBlue: 'hsl(233, 12%, 13%)',
        veryPaleRed: 'hsl(13, 100%, 96%)',
        veryLightGray: 'hsl(0, 0%, 98%)',
        lightBlack: 'rgb(24,24,28)',
        Black: 'rgb(18,18,18)',
        lighterBlack: 'rgb(32,32,32)',
      },
      gridTemplateRows: {
        '[auto,auto,1fr]': 'auto auto 1fr',
      },

    },
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
  ],
}

