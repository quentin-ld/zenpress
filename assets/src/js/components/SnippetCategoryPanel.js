import { capitalizeCategory } from '../utils/snippets';
import { hasActiveIntegration } from '../utils/integrations';
import { SnippetSubcategory } from './SnippetSubcategory';
import { IntegrationsBlock } from './IntegrationsBlock';

/**
 * Tab panel content for one category: title, subcategories, optional Integrations block for "tools".
 *
 * @param {Object}        props                        - Component props.
 * @param {string}        props.category               - Category key.
 * @param {Object}        props.groupedSnippets        - grouped[category][subcategory] = [{ name, data }].
 * @param {Function}      props.onToggle               - (snippetName) => void.
 * @param {boolean}       [props.showIntegrations]     - Whether to show IntegrationsBlock (e.g. category === 'tools').
 * @param {boolean}       [props.adminBarEnabled]      - For IntegrationsBlock.
 * @param {Function}      [props.setAdminBarEnabled]   - For IntegrationsBlock.
 * @param {string | null} [props.autoconfigBusy]       - For IntegrationsBlock.
 * @param {Function}      [props.getAutoconfigHandler] - For IntegrationsBlock.
 * @return {JSX.Element} Category tab panel (subcategories + optional integrations).
 */
export function SnippetCategoryPanel({
	category,
	groupedSnippets,
	onToggle,
	showIntegrations = false,
	adminBarEnabled,
	setAdminBarEnabled,
	autoconfigBusy,
	getAutoconfigHandler,
}) {
	const subcategories = Object.keys(groupedSnippets[category] || {}).sort();

	return (
		<>
			<h2>{capitalizeCategory(category)}</h2>
			{subcategories.map((subcategory) => (
				<SnippetSubcategory
					key={subcategory}
					subcategory={subcategory}
					items={groupedSnippets[category]?.[subcategory] ?? []}
					onToggle={onToggle}
				/>
			))}
			{showIntegrations && hasActiveIntegration() && (
				<IntegrationsBlock
					adminBarEnabled={adminBarEnabled}
					setAdminBarEnabled={setAdminBarEnabled}
					autoconfigBusy={autoconfigBusy}
					getAutoconfigHandler={getAutoconfigHandler}
				/>
			)}
		</>
	);
}
