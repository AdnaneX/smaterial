const 	path = require('path'),
		ExtractTextPlugin = require('extract-text-webpack-plugin'),
		UglifyJSPlugin = require('uglifyjs-webpack-plugin');

module.exports = env => {
	return {
		entry: {
			'smaterial': './js/main.js',
			'smaterial-light': './stylesheets/scss/smaterial-light.scss',
			'smaterial-dark': './stylesheets/scss/smaterial-dark.scss',
			'smaterial-amp': './stylesheets/scss/smaterial-amp.scss'
		},
		output: {
			path: __dirname,
			filename: 'js/[name].js'
		},
		module: {
			rules: [
				{
					test: /\.js$/,
					exclude: ['/node_modules/', '/stylesheets/'],
					use: [
						'babel-loader'
					]
				},
				{
					test: /\.scss$/,
					use: ExtractTextPlugin.extract( {
						fallback: 'style-loader',
						use: [
							{
								loader: 'css-loader',
								options: {
									minimize: {discardComments: {removeAll: !env.dev}}
								}
							},
							'sass-loader'
						]
					} )
				}
			]
		},
		plugins: [
			new ExtractTextPlugin( 'stylesheets/[name].css' ),
			new UglifyJSPlugin()
		]
	}
};