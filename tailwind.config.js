module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      width: {
        '1/10': '10%',
        '2/10': '20%',
        '3/10': '30%',
        '4/10': '40%',
        '5/10': '50%',
        '6/10': '60%',
        '7/10': '70%',
        '8/10': '80%',
        '9/10': '90%',
      },
      textColor: {
        'primary': '#4D5567',
        'second': '#56628C',
        'third': '#9A9CA2',
        'purple': '#7E3E97',
        'grey': '#AFAFAF',
        'grey-1': '#B2B5BD',
        'yellow': '#FABD02'
      },

      backgroundColor: {
        'yellow': '#FABD02',
        'primary': '#56628C',
        'second': '#E0CBF6',
        'grey': '#F6F6F6',
        'grey-1': '#F9F9F9',
      },

      borderColor: {
        'grey': '#888888'
      }
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
