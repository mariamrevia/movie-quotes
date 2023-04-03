/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    backgroundImage:{
      'gradient':'radial-gradient(50% 50% at 50% 50%, #4E4E4E 0%, #3D3B3B 99.99%, #3D3B3B 100%)'
    },
    extend: {
      height: {
        '386': '386px',
        '58': '58px',
        '414': '414px',
        '533': '533px',
        '100': '100%',
        '58':"58px"
      },
      width: {
        '700':'700px',
        '58': '58px',
        '748': '748px',
        '800': '60vw',
        '500': '50vw',
        "58":'58px'

        // '300': '500px'
      },
      margin: {
        '228': '228px',
        '65':'65px',
        '114':'114px',
        '11':'11px'
      },
      spacing: {
        '546': '546px',
        '54':'54px',
        '11':'11px'

      },
      fontSize:{
        '48':'48px'

      }

    },
  },
  plugins: [],
}

