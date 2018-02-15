const 	path = require('path'),
		ExtractTextPlugin = require('extract-text-webpack-plugin'),
		GoogleFonts = require('google-fonts-webpack-plugin');

module.exports = env => {
	return {
		entry: {
			'smaterial': './src/js/main.js',
			'smaterial-light': './src/scss/smaterial-light.scss',
			'smaterial-dark': './src/scss/smaterial-dark.scss',
			'smaterial-amp': './src/scss/smaterial-amp.scss'
		},
		output: {
			path: __dirname,
			filename: 'dist/js/[name].js'
		},
		module: {
			rules: [
				{
					test: /\.js$/,
					exclude: ['/node_modules/', '/src/scss/'],
					use: [
						'babel-loader'
					]
				},
				{
					test: /\.scss$/,
					use: ExtractTextPlugin.extract({
						fallback: 'style-loader',
						use: [
							{
								loader: 'css-loader',
								options: {
									minimize: !env.dev
								}
							},
							'sass-loader'
						]
					})
				}
			]
		},
		plugins: [
			new ExtractTextPlugin( 'dist/css/[name].css' ),
			new GoogleFonts({
				fonts: [
					{
						family: 'Roboto',
						variants: ['100','300','500','700','900','100italic','300italic','regular','italic','500italic','700italic','900italic'],
						formats: ["eot", "woff", "woff2", "ttf", "svg"]
					}
				],
				path: '~/dist/fonts/',
				apiUrl: 'https://google-webfonts-helper.herokuapp.com/api/fonts',
				filename: './src/scss/components/_fonts.scss'
			})
		]
	}
};