var path = require('path'),
	ExtractTextPlugin = require('extract-text-webpack-plugin');

module.exports = {
	entry: './js/main.js',
	output: {
		path: __dirname,
		filename: 'js/smaterial.js'
	},
	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				use: [
					'babel-loader'
				]
			},
			{
				test: /\.scss$/,
				use: ExtractTextPlugin.extract({
					fallback: 'style-loader',
					use: [
						'css-loader',
						'sass-loader'
					]
				})
			}
		]
	},
	plugins: [
		new ExtractTextPlugin('stylesheets/smaterial.css')
	]
};