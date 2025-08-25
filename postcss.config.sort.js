// postcss.config.sort.js
module.exports = {
	syntax: 'postcss-scss',
	plugins: [
	  require('css-declaration-sorter')({ order: 'alphabetical' }),
	],
  };
