<?php
/**
 * Tests for zenpress_sanitize_snippets_option().
 *
 * Integration, not unit: the function's behaviour is largely
 * `sanitize_file_name()`'s behaviour, and a hand-written stub for that would
 * make these tests assert the stub rather than WordPress.
 *
 * @package zenpress
 */

declare( strict_types=1 );

/**
 * Snippet option sanitisation.
 */
final class SnippetOptionTest extends WP_UnitTestCase {

	/**
	 * A scalar becomes a one-element list.
	 *
	 * The option is stored as an array, but a site that once held a single
	 * value has a string on disk. Removing the cast would make the loop below
	 * iterate characters.
	 *
	 * @return void
	 */
	public function test_a_scalar_becomes_a_one_element_list(): void {
		self::assertSame(
			array( 'disable-autosave' ),
			zenpress_sanitize_snippets_option( 'disable-autosave' )
		);
	}

	/**
	 * Empty entries are dropped.
	 *
	 * @return void
	 */
	public function test_empty_entries_are_dropped(): void {
		$result = zenpress_sanitize_snippets_option(
			array( 'disable-autosave', '', '   ', 'clean-admin-bar' )
		);

		self::assertSame( array( 'disable-autosave', 'clean-admin-bar' ), $result );
	}

	/**
	 * The result is a list, not a map with holes.
	 *
	 * `array_filter` preserves keys, so without the `array_values` the second
	 * element of this input keeps index 1 and `wp_json_encode` would emit an
	 * object instead of an array.
	 *
	 * @return void
	 */
	public function test_the_result_is_reindexed(): void {
		$result = zenpress_sanitize_snippets_option(
			array( '', 'disable-autosave', '', 'clean-admin-bar' )
		);

		self::assertSame( array( 0, 1 ), array_keys( $result ) );
	}

	/**
	 * WordPress neutralises path separators.
	 *
	 * This is the assertion that needs real WordPress. `sanitize_file_name()`
	 * strips `/` and `\`, so a value that looks like a traversal cannot escape
	 * `inc/snippets/`. A stub would have had to reproduce that, and the test
	 * would have been checking the stub.
	 *
	 * @return void
	 */
	public function test_path_separators_cannot_survive(): void {
		$result = zenpress_sanitize_snippets_option(
			array( '../../evil', 'sub/dir/snippet', 'back\\slash' )
		);

		foreach ( $result as $name ) {
			self::assertStringNotContainsString( '/', $name );
			self::assertStringNotContainsString( '\\', $name );
			self::assertStringNotContainsString( '..', $name );
		}
	}

	/**
	 * A real snippet name passes through unchanged.
	 *
	 * Guards the other direction: the sanitiser must not mangle the names it
	 * is given, or every saved option would silently disable its own snippets.
	 *
	 * @return void
	 */
	public function test_a_real_snippet_name_is_unchanged(): void {
		$names = array( 'disable-autosave', 'block-user-enumeration', 'clean-admin-bar' );

		self::assertSame( $names, zenpress_sanitize_snippets_option( $names ) );
	}
}
