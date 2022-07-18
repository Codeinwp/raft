/* jshint node:true */
// https://github.com/kswedberg/grunt-version
module.exports = {
	package: {
		options: {
			prefix: '"version"\\:\\s+"'
		},
		src: 'package.json'
	},
	stylesheet: {
		options: {
			prefix: 'Version\\:\\s+'
		},
		src: 'style.css'
	},
	scssStylesheet: {
		options: {
			prefix: 'Version\\:\\s+'
		},
		src: 'assets/css/src/style.scss'
	},
	functions: {
		options: {
			prefix: 'RRAFT_VERSION\', \''
		},
		src: 'functions.php'
	}
};
