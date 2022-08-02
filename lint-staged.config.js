module.exports = {
	'**/*.php': [ 'composer format-fix-exit ', 'composer lint' ],
	'package.json': [ 'yarn run lint:package-json' ],
	'assets/js/src/**/*.js': () => [ 'yarn run format:js', 'yarn run lint:js' ],
};
