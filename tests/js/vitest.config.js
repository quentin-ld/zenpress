/**
 * Vitest, for the JS unit suite.
 *
 * `wp-scripts test-unit-js` runs the project's own Vitest, so the config lives
 * here rather than being supplied by `@wordpress/scripts`. It resolves the
 * runner from this project and passes `--watch=false`, which is why a run is a
 * run and not a watcher.
 *
 * This file was `jest.config.js` and extended
 * `@wordpress/scripts/config/jest-unit.config`, which v31+ no longer ships.
 * The fleet is on Vitest, so the whole Jest config goes with it.
 *
 * No `root`: Vitest resolves it against the working directory, not against this
 * file, so a `../../` that a Jest config would want lands one level above the
 * project and matches nothing. The default -- the project -- is what is meant.
 */
module.exports = {
	test: {
		environment: 'jsdom',
		include: [ 'tests/js/**/*.test.js' ],
	},
};
