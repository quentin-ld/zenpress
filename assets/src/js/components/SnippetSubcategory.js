import { SnippetToggleControl } from './SnippetToggleControl';
import { capitalizeCategory } from '../utils/snippets';

/**
 * One subcategory block: hr, h3, list of snippet toggles.
 *
 * @param {Object}   props             - Component props.
 * @param {string}   props.subcategory - Subcategory key (for class and heading).
 * @param {Array}    props.items       - Array of { name, data } (snippet name + snippet data).
 * @param {Function} props.onToggle    - (snippetName) => void.
 * @return {JSX.Element} Subcategory block (heading + snippet toggles).
 */
export function SnippetSubcategory({ subcategory, items, onToggle }) {
	const slug = subcategory.toLowerCase().replace(/\s+/g, '-');

	return (
		<div
			key={subcategory}
			className={`zenpress-subcategory zenpress-subcategory-${slug}`}
		>
			<hr />
			<h3>{capitalizeCategory(subcategory)}</h3>
			{items.map(({ name, data }) => (
				<SnippetToggleControl
					key={name}
					label={data.title || name}
					value={data?.['enable-snippet'] || false}
					onChange={() => onToggle(name)}
					help={data.description || ''}
				/>
			))}
		</div>
	);
}
