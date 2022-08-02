/* jshint node:true */
// https://github.com/kswedberg/grunt-version
module.exports = {
	package: {
		options: {
			prefix: '"version"\\:\\s+"',
		},
		src: 'package.json',
	},
	stylesheet: {
		options: {
			prefix: 'Version\\:\\s+',
		},
		src: 'style.css',
	},
	functions: {
		options: {
			prefix: "RAFT_VERSION', '",
		},
		src: 'functions.php',
	},
};
