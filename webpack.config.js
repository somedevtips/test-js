const path = require( 'path' );

const config = {
	mode: 'development',
	entry: './js/main.js',
	output: {
		filename: 'main.js',
		path: path.resolve( __dirname, 'assets' )
	}
}

module.exports = config;