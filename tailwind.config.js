/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    backgroundImage: {
      'gradient': 'radial-gradient(50% 50% at 50% 50%, #4E4E4E 0%, #3D3B3B 99.99%, #3D3B3B 100%)'
    },
    extend: {
      height: {
        '35': '35rem',
        

      },
      width: {

        '50': '50rem'
      },
      margin: {

      },
      spacing: {


      },
      fontSize: {
        '2': '2rem'

      },

      fontFamily: {
        'San': 'Sansation'
      }
    },
  },
  plugins: [],
}

