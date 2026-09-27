/**
 * The snippet grouping, and the ordering the sidebar depends on.
 *
 * `groupAndSortSnippets` decides what order categories appear in the ZenPress
 * sidebar. `CATEGORY_ORDER` is the intent -- core first, then the integrations,
 * then everything else alphabetically -- and the sort is what implements it.
 *
 * These assert the contract rather than the implementation: that a snippet
 * lands under its category and subcategory, that the declared order wins over
 * the alphabetical one, and that an undeclared category goes after the declared
 * ones rather than in front of them. What would make them fail: dropping the
 * unknown-category branches from the comparator, or pushing in the wrong place.
 */

import { describe, expect, it } from 'vitest';

import {
	CATEGORY_ORDER,
	capitalizeCategory,
	groupAndSortSnippets,
} from '../../assets/src/js/utils/snippets';

describe( 'capitalizeCategory', () => {
	it( 'capitalises and lowercases the rest', () => {
		expect( capitalizeCategory( 'WOOCOMMERCE' ) ).toBe( 'Woocommerce' );
		expect( capitalizeCategory( 'gutenberg' ) ).toBe( 'Gutenberg' );
	} );

	it( 'returns a non-string unchanged rather than throwing', () => {
		expect( capitalizeCategory( null ) ).toBeNull();
		expect( capitalizeCategory( undefined ) ).toBeUndefined();
	} );

	it( 'handles the empty string', () => {
		expect( capitalizeCategory( '' ) ).toBe( '' );
	} );
} );

describe( 'groupAndSortSnippets', () => {
	it( 'groups by category then subcategory, keeping the snippet name', () => {
		const { grouped } = groupAndSortSnippets( {
			'alpha/one': { category: 'core', subcategory: 'general' },
			'alpha/two': { category: 'core', subcategory: 'general' },
			'beta/one': { category: 'tools', subcategory: 'import' },
		} );

		expect( Object.keys( grouped ) ).toEqual( [ 'core', 'tools' ] );
		expect( grouped.core.general.map( ( s ) => s.name ) ).toEqual( [
			'alpha/one',
			'alpha/two',
		] );
		expect( grouped.tools.import ).toHaveLength( 1 );
	} );

	it( 'lowercases the category so two spellings land in one group', () => {
		const { grouped } = groupAndSortSnippets( {
			one: { category: 'WooCommerce', subcategory: 'a' },
			two: { category: 'woocommerce', subcategory: 'b' },
		} );

		expect( Object.keys( grouped ) ).toEqual( [ 'woocommerce' ] );
	} );

	it( 'sorts the declared categories into their declared order', () => {
		const { sortedCategories } = groupAndSortSnippets( {
			a: { category: 'tools', subcategory: 'x' },
			b: { category: 'woocommerce', subcategory: 'x' },
			c: { category: 'core', subcategory: 'x' },
		} );

		// Not alphabetical: the declaration is the intent.
		expect( sortedCategories ).toEqual( [
			'core',
			'woocommerce',
			'tools',
		] );
		expect( sortedCategories ).toEqual(
			CATEGORY_ORDER.filter( ( c ) => sortedCategories.includes( c ) )
		);
	} );

	it( 'puts an undeclared category after the declared ones', () => {
		const { sortedCategories } = groupAndSortSnippets( {
			a: { category: 'aaa-undeclared', subcategory: 'x' },
			b: { category: 'core', subcategory: 'x' },
			c: { category: 'tools', subcategory: 'x' },
		} );

		// `aaa` sorts first alphabetically; it must not win over `core`.
		expect( sortedCategories ).toEqual( [
			'core',
			'tools',
			'aaa-undeclared',
		] );
	} );

	it( 'falls back to Uncategorized when a snippet declares none', () => {
		const { grouped } = groupAndSortSnippets( { bare: {} } );

		expect( Object.keys( grouped ) ).toContain( 'uncategorized' );
	} );

	it( 'answers empty for input that is not a snippet map', () => {
		for ( const input of [ null, undefined, 'nope', 42, [ 'array' ] ] ) {
			expect( groupAndSortSnippets( input ) ).toEqual( {
				grouped: {},
				sortedCategories: [],
			} );
		}
	} );
} );
