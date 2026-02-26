import { __ } from '@wordpress/i18n';

/** Category display order (lowercase). */
export const CATEGORY_ORDER = [
	'core',
	'gutenberg',
	'woocommerce',
	'ads-blocker',
	'tools',
];

/**
 * Capitalizes a category/subcategory label.
 *
 * @param {string} [category] - Raw category name.
 * @return {string} Capitalized label.
 */
export function capitalizeCategory(category) {
	if (
		category === null ||
		category === undefined ||
		typeof category !== 'string'
	) {
		return category;
	}
	return category.charAt(0).toUpperCase() + category.slice(1).toLowerCase();
}

/**
 * Groups snippets by category, then subcategory. Each entry is { name, data }.
 *
 * @param {Object} [snippets] - Snippets keyed by name.
 * @return {{ grouped: Object, sortedCategories: string[] }} Grouped map and sorted category keys.
 */
export function groupAndSortSnippets(snippets) {
	const grouped = {};
	if (!snippets || typeof snippets !== 'object' || Array.isArray(snippets)) {
		return { grouped, sortedCategories: [] };
	}
	Object.keys(snippets).forEach((snippetName) => {
		const snippet = snippets[snippetName];
		const category = (
			snippet?.category || __('Uncategorized', 'zenpress')
		).toLowerCase();
		const subcategory = (
			snippet?.subcategory || __('Uncategorized', 'zenpress')
		).toLowerCase();

		if (!grouped[category]) {
			grouped[category] = {};
		}
		if (!grouped[category][subcategory]) {
			grouped[category][subcategory] = [];
		}
		grouped[category][subcategory].push({
			name: snippetName,
			data: snippet,
		});
	});

	const sortedCategories = Object.keys(grouped).sort((a, b) => {
		const indexA = CATEGORY_ORDER.indexOf(a.toLowerCase());
		const indexB = CATEGORY_ORDER.indexOf(b.toLowerCase());
		if (indexA !== -1 && indexB !== -1) {
			return indexA - indexB;
		}
		if (indexA !== -1) {
			return -1;
		}
		if (indexB !== -1) {
			return 1;
		}
		return a.localeCompare(b, undefined, { sensitivity: 'base' });
	});

	return { grouped, sortedCategories };
}
