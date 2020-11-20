const colors = require('tailwindcss/colors')

module.exports = {
    future: {
      removeDeprecatedGapUtilities: true,
      purgeLayersByDefault: true,
    },
    experimental: {
      uniformColorPalette: true,
    },
    purge: [
      './hui/**/*.js',
      './resources/views/**/*.blade.php',
      './storage/framework/views/*.php',
    ],
    theme: {
      colors: {
        gray: colors.blueGray,
        blue: colors.blue,
      },
      extend: {
        inset: {
          '1/2': '50%',
          'full': '100%',
        }
      },
    },
    variants: {},
    plugins: [
      require('./hui/base/headers'),
      require('./hui/components/alert'),
      require('./hui/components/badge'),
      require('./hui/components/button'),
      require('./hui/components/card'),
      require('./hui/components/divider'),
      require('./hui/modifiers/palette'),
      require('./hui/modifiers/size'),
    ],
  }
