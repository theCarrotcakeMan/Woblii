module.exports = {
  important: true,
  theme: {
    extend: {
      colors: {
        purple:{
          text: '#A7A9AB',
          dark: '#6A376B',
          light: '#E2D8E2'
        }
      }
    },
    shadows: {
      outline: '0 0 2px 1px rgba(66, 153, 225, 0.45)'
    },
    fontFamily:{
      html: ['filson-pro', 'Open Sans', 'Helvetica', 'Arial', 'sans-serif'],
      sans: ['filson-pro', 'Open Sans', 'Helvetica', 'Arial', 'sans-serif'],
      body: ['filson-pro', 'Open Sans', 'Helvetica', 'Arial', 'sans-serif'],
      soft: ['filson-soft', 'Open Sans', 'Helvetica', 'Arial', 'sans-serif']
    },
    minWidth: {
         '0': '0',
         '1/4': '25%',
         '1/2': '50%',
         '3/4': '75%',
         'full': '100%'
    },
    lineHeight: {
      extreme: 4
    },
    inset: {
        '0': 0,
        auto: 'auto',
        '-full': '-100vw'
    }
  },
  variants: {},
  plugins: []
};
