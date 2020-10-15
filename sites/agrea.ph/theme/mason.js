const mason = require('@joomlatools/mason-tools-v1');

async function postcss() {
  await mason.css.process(`css/input.css`, `css/output.css`, {
    tailwind: {    
      purge: {
        enabled: true,
        content: [
          '../**/*.html.php',
        ],
      },
      theme: {
        extend: {
          colors: {
            'green': {
              50: '#F8F9F4',
              100: '#F2F2E9',
              200: '#DDDFC8',
              300: '#C9CCA7',
              400: '#A1A665',
              500: '#788023',
              600: '#6C7320',
              700: '#484D15',
              800: '#363A10',
              900: '#24260B',
            },
            'dark-green': {
              50: '#F5F6F5',
              100: '#ECEDEA',
              200: '#CFD1CB',
              300: '#B2B5AB',
              400: '#787E6D',
              500: '#3E462E',
              600: '#383F29',
              700: '#252A1C',
              800: '#1C2015',
              900: '#13150E',
            },
            'lime': {
              50: '#FCFCF6',
              100: '#FAFAED',
              200: '#F2F2D1',
              300: '#E9EAB6',
              400: '#D9DA7F',
              500: '#C9CA48',
              600: '#B5B641',
              700: '#79792B',
              800: '#5A5B20',
              900: '#3C3D16',
            },
            'gray': {
              50: '#F9F9F9',
              100: '#F4F4F4',
              200: '#E3E3E2',
              300: '#D2D2D1',
              400: '#B0B0AF',
              500: '#8E8E8C',
              600: '#80807E',
              700: '#555554',
              800: '#40403F',
              900: '#2B2B2A',
            },
            'orange': {
              50: '#FCF8F6',
              100: '#F9F1EC',
              200: '#F1DBD0',
              300: '#E8C6B3',
              400: '#D79B7B',
              500: '#C67042',
              600: '#B2653B',
              700: '#774328',
              800: '#59321E',
              900: '#3B2214',
            },
          },
          boxShadow: {
            outline: '0 0 0 3px rgba(120, 128, 35, 0.5)',
          },
          fontFamily: {
            'title': ['Raleway', 'Impact', 'Arial Black', 'sans-serif'],
            'agrea': ['typo3', 'Palatino', 'Book Antiqua', 'serif'],
          },
          screens: {
            'dark': {'raw': '(prefers-color-scheme: dark)'},
            // => @media (prefers-color-scheme: dark) { ... }
          },
        }
      },
      variants: {
        opacity: ['responsive', 'hover']
      }
    }
  });
}

async function sync() {
  mason.browserSync({
    watch: true,
    server: {
       baseDir: './sites/agrea.ph/theme'
    },
    files: 'css/*.css',
  });
}

module.exports = {
  version: '1.0',
  tasks: {
    postcss,
    sync,
    watch: {
      path: ['.'],
      callback: async (path) => {
        if (path.endsWith('css/input.css')) {
          await postcss();
        }
      },
    },
  },
};
