<?php
/**
 * Tests for zenpress_extract_snippet_metadata().
 *
 * @package zenpress
 */

declare( strict_types=1 );

/**
 * Snippet metadata loading and sanitisation.
 */
final class SnippetMetadataTest extends WP_UnitTestCase {

	/**
	 * The keys the caller is promised, in order.
	 *
	 * @var array<int, string>
	 */
	private const EXPECTED_KEYS = array(
		'title',
		'description',
		'category',
		'subcategory',
		'weight',
		'preset',
	);

	/**
	 * An unknown snippet yields the full default shape.
	 *
	 * Callers index the result without checking, so a missing key is a notice
	 * in production. This pins the shape.
	 *
	 * @return void
	 */
	public function test_an_unknown_snippet_yields_defaults(): void {
		$result = zenpress_extract_snippet_metadata( 'no-such-snippet-anywhere' );

		self::assertSame( self::EXPECTED_KEYS, array_keys( $result ) );
		self::assertSame( '', $result['title'] );
		self::assertSame( '', $result['description'] );
		self::assertSame( '', $result['category'] );
		self::assertSame( '', $result['subcategory'] );
		self::assertSame( 0, $result['weight'] );
		self::assertSame( array(), $result['preset'] );
	}

	/**
	 * A real snippet resolves to its real values.
	 *
	 * The title assertion is honest about its own strength: deleting
	 * `sanitize_text_field()` from the title passes this test, because no
	 * shipped metadata file has a title the sanitiser would change. That makes
	 * the removal an **equivalent mutation**, not a gap in the test — verified
	 * by hand rather than assumed.
	 *
	 * What this test does prove is that the file is found, decoded and merged:
	 * replacing `array_merge( $defaults, … )` with the raw `$data` makes it
	 * fail, and so does pointing it at an unknown snippet.
	 *
	 * @return void
	 */
	public function test_a_real_snippet_resolves(): void {
		$result = zenpress_extract_snippet_metadata( 'block-user-enumeration' );

		self::assertSame( 'Block user enumeration', $result['title'] );
		self::assertSame( 'core', $result['category'] );
		self::assertSame( 'security', $result['subcategory'] );
		self::assertSame(
			array( 'corporate-website', 'blog', 'ecommerce' ),
			$result['preset']
		);
		self::assertStringContainsString( 'brute-force', $result['description'] );
	}

	/**
	 * `weight` comes back as an integer.
	 *
	 * **This assertion cannot fail against the shipped data, and that is
	 * stated rather than hidden.** Every metadata file declares the literal
	 * `0`, so `(int)` is a no-op and removing it is an equivalent mutation —
	 * verified by hand: the cast was deleted and this test still passed.
	 *
	 * It is kept because it pins the contract the callers rely on (they sort by
	 * this value), and because the cast stops being a no-op the moment a
	 * metadata file declares `'3'`. Do not read it as evidence that the cast is
	 * exercised.
	 *
	 * @return void
	 */
	public function test_weight_comes_back_as_an_integer(): void {
		$result = zenpress_extract_snippet_metadata( 'block-user-enumeration' );

		self::assertIsInt( $result['weight'] );
	}

	/**
	 * `preset` is always an array, even when it holds nothing.
	 *
	 * The callers `in_array()` it. A scalar would be a fatal, not a warning.
	 *
	 * @return void
	 */
	public function test_preset_is_always_an_array(): void {
		$result = zenpress_extract_snippet_metadata( 'block-user-enumeration' );

		self::assertIsArray( $result['preset'] );
	}

	/**
	 * Every snippet shipped with the plugin declares usable metadata.
	 *
	 * The sweep is the point: a single malformed `.meta.php` would show up as
	 * one broken row in the settings screen, and nothing else in the suite
	 * would look at the other thirty-eight.
	 *
	 * @return void
	 */
	public function test_every_shipped_snippet_declares_a_title_and_a_category(): void {
		$files = glob( ZENPRESS_PLUGIN_DIR . 'inc/snippets/meta/*.meta.php' );
		self::assertNotEmpty( $files, 'No snippet metadata files found.' );

		$checked = 0;
		foreach ( $files as $file ) {
			$name = basename( $file, '.meta.php' );

			$result = zenpress_extract_snippet_metadata( $name );

			self::assertNotSame( '', $result['title'], "{$name} declares no title" );
			self::assertNotSame( '', $result['category'], "{$name} declares no category" );
			self::assertIsInt( $result['weight'], "{$name} weight is not an int" );
			self::assertIsArray( $result['preset'], "{$name} preset is not an array" );

			++$checked;
		}

		self::assertGreaterThan( 30, $checked, 'The sweep covered suspiciously few snippets.' );
	}
}
