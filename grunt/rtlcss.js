/* jshint node:true */
// https://github.com/MohammadYounes/grunt-rtlcss
const ext = '-rtl.css';

const options = {
	autoRename: false,
	autoRenameStrict: false,
	blacklist: {},
	clean: true,
	greedy: false,
	processUrls: false,
	stringMap: [
		{
			name: 'left-right',
			priority: 100,
			search: ['left', 'Left', 'LEFT'],
			replace: ['right', 'Right', 'RIGHT'],
			options: {
				scope: '*',
				ignoreCase: false,
			},
		},
		{
			name: 'ltr-rtl',
			priority: 100,
			search: ['ltr', 'Ltr', 'LTR'],
			replace: ['rtl', 'Rtl', 'RTL'],
			options: {
				scope: '*',
				ignoreCase: false,
			},
		},
	],
};

module.exports = {
	style: {
		options,
		expand: true,
		cwd: './',
		dest: './',
		ext,
		src: ['assets/css/build/style.css'],
	},
	editor: {
		options,
		expand: true,
		cwd: './',
		dest: './',
		ext,
		src: ['assets/css/build/editor.css'],
	},
};
