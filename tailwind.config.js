/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: 'jit',
  content: ["./Views/**/*.{php,js}","./*.{php,js}"],
  theme: {
    extend: {
      backgroundImage: theme => ({
        'header-image': "url('/images/banner.jpg')",
        'contact-image': "url('/images/bg.png')",
      })
    }
  },
  plugins: [
    require('tailwindcss-textshadow'),
    
  ],
}
