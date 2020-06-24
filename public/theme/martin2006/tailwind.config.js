module.exports = {
  purge: [
    './**/*.twig',
    '*.twig',
  ],
  theme: {
    extend: {
      colors: {
        'primary-100': 'hsl(58, 19%, 97%)',
        'primary-500': 'hsl(58, 19%, 57%);',
        'primary-900': 'hsl(58, 19%, 7%);',
        // 'primary-100': 'hsl(233, 58%, 97%)',
        // 'primary-500': 'hsl(233, 58%, 51%);',
        // 'primary-900': 'hsl(233, 58%, 7%);',
      }
    },
  },
  variants: {},
  plugins: [],
}
