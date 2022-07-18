// jshint ignore: start
// https://github.com/gruntjs/grunt-contrib-sass

const sass = require('node-sass');

module.exports = {
	style: {
		options: {
			implementation: sass,
			noCache: true,
			outputStyle: 'expanded',
			sourceMap: true,
		},
		files: [
			{
				'assets/css/build/style.css': 'assets/css/src/style.scss',
				'assets/css/build/editor.css': 'assets/css/src/editor.scss',
			},
		],
	},
};
