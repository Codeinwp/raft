/* jshint node:true */
// https://github.com/blazersix/grunt-wp-i18n
module.exports = {
  theme: {
    options: {
      textdomain: '<%= package.theme.textdomain %>'
    },
    theme: {
      files: {
        src: [
          '<%= files.php %>'
        ]
      }
    }
  },
  composer: {
    options: {
      textdomain: '<%= package.theme.textdomain %>',
      updateDomains: ['textdomain']
    },
    files: {
      src: [
        'vendor/codeinwp/**/*.php'
      ]
    }
  }
}
