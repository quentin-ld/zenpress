// Import necessary modules from WordPress libraries
import domReady from '@wordpress/dom-ready';
import { createRoot } from '@wordpress/element';
import { __ } from '@wordpress/i18n';
import { ToggleControl } from '@wordpress/components';
import { Button } from '@wordpress/components';
import { Panel, PanelBody, PanelRow } from '@wordpress/components';
import { useState } from '@wordpress/element';
import apiFetch from '@wordpress/api-fetch';
import { useEffect } from '@wordpress/element';
import { useDispatch, useSelect } from '@wordpress/data';
import { store as noticesStore } from '@wordpress/notices';
import { NoticeList } from '@wordpress/components';
import './index.scss';

/**
 * Custom hook to manage ZenPress settings state.
 *
 * @returns {object} Settings state and actions.
 * @property {object} snippets - Current snippets with metadata.
 * @property {Function} setSnippets - Setter to update snippets state.
 * @property {Function} saveSettings - Function to persist settings to REST API.
 * @property {boolean} isSaving - Whether settings are currently being saved.
 */
const useSettings = () => {
	const [snippets, setSnippets] = useState({});
	const [isSaving, setIsSaving] = useState(false);
	const { createSuccessNotice, createErrorNotice } = useDispatch(noticesStore);

	useEffect(() => {
		apiFetch({ path: '/wp/v2/settings' })
			.then((settings) => {
				const active = Array.isArray(settings?.zenpress_active_snippets)
					? settings.zenpress_active_snippets
					: [];

				const snippetsData = {};
				const meta = window?.zenpressSnippetsMeta || {};

				Object.keys(meta).forEach((snippetName) => {
					const m = meta[snippetName] || {};
					snippetsData[snippetName] = {
						...m,
						'enable-snippet': active.includes(snippetName),
					};
				});

				setSnippets(snippetsData);
			})
			.catch(() => {
				createErrorNotice(__('Failed to load settings.', 'zenpress'));
			});
	}, [createErrorNotice]);

	/**
	 * Save updated snippets to WordPress REST API.
	 *
	 * @returns {Promise<void>}
	 */
	const saveSettings = () => {
		setIsSaving(true);

		const active = Object.keys(snippets).filter(
			(snippetName) => snippets[snippetName]?.['enable-snippet'] || false
		);

		return apiFetch({
			path: '/wp/v2/settings',
			method: 'POST',
			data: { zenpress_active_snippets: active },
		})
			.then(() => {
				createSuccessNotice(__('Settings saved.', 'zenpress'));
			})
			.catch(() => {
				createErrorNotice(__('Failed to save settings.', 'zenpress'));
			})
			.finally(() => setIsSaving(false));
	};

	return { snippets, setSnippets, saveSettings, isSaving };
};

/**
 * Toggle control for enabling/disabling a snippet.
 *
 * @param {object} props - Component props.
 * @param {string} props.label - Label of the toggle.
 * @param {boolean} props.value - Current state of the toggle.
 * @param {Function} props.onChange - Change handler.
 * @param {string} [props.help] - Optional description/help text.
 * @returns {JSX.Element} The toggle control.
 */
const SnippetToggleControl = ({ label, value, onChange, help }) => (
	<ToggleControl
		label={label}
		checked={value}
		onChange={onChange}
		help={help}
		__nextHasNoMarginBottom
	/>
);

/**
 * Save button component.
 *
 * @param {object} props - Component props.
 * @param {Function} props.onClick - Click handler for save action.
 * @param {boolean} props.isBusy - Whether the button is in loading state.
 * @returns {JSX.Element} The save button.
 */
const SaveButton = ({ onClick, isBusy }) => (
	<Button
		variant="primary"
		onClick={onClick}
		isBusy={isBusy}
		__next40pxDefaultSize
	>
		{__('Save settings', 'zenpress')}
	</Button>
);

/**
 * Notices component to display success/error messages.
 *
 * @returns {JSX.Element|null} List of notices or null if none exist.
 */
const Notices = () => {
	const { removeNotice } = useDispatch(noticesStore);
	const notices = useSelect((select) => select(noticesStore).getNotices());

	if (!notices?.length) return null;

	return <NoticeList notices={notices} onRemove={removeNotice} />;
};

/**
 * Main settings page component for ZenPress.
 *
 * @returns {JSX.Element} The settings page UI.
 */
const SettingsPage = () => {
	const { snippets, setSnippets, saveSettings, isSaving } = useSettings();

	// Track which categories should remain open
	const [openCategories, setOpenCategories] = useState(new Set());

	/**
	 * Handle toggle state change for a snippet.
	 *
	 * @param {string} snippetName - Name of the snippet to toggle.
	 * @return {void}
	 */
	const handleToggleChange = (snippetName) => {
		setSnippets((prev) => ({
			...prev,
			[snippetName]: {
				...prev[snippetName],
				'enable-snippet': !prev[snippetName]?.['enable-snippet'],
			},
		}));
	};

	/**
	 * Enable all snippets at once.
	 *
	 * @return {void}
	 */
	const enableAllSnippets = () => {
		setSnippets((prev) => {
			const updated = {};
			Object.keys(prev).forEach((name) => {
				updated[name] = { ...prev[name], 'enable-snippet': true };
			});
			return updated;
		});
		// Open all categories
		setOpenCategories(new Set(Object.values(snippets).map((s) => s.category || __('Uncategorized', 'zenpress'))));
	};

	/**
	 * Reset all snippets (disable everything).
	 *
	 * @return {void}
	 */
	const resetSettings = () => {
		setSnippets((prev) => {
			const updated = {};
			Object.keys(prev).forEach((name) => {
				updated[name] = { ...prev[name], 'enable-snippet': false };
			});
			return updated;
		});
		// Keep categories open (do not clear)
	};

	/**
	 * Enable snippets by preset.
	 *
	 * All snippets not in the preset will be disabled.
	 *
	 * @param {string} preset - Preset key to enable.
	 * @return {void}
	 */
	const enableByPreset = (preset) => {
		setSnippets((prev) => {
			const updated = {};
			const newOpen = new Set(openCategories);
			Object.entries(prev).forEach(([name, data]) => {
				const presets = Array.isArray(data?.preset) ? data.preset : [];
				const isEnabled = presets.includes(preset);
				updated[name] = {
					...data,
					'enable-snippet': isEnabled,
				};
				if (isEnabled) {
					newOpen.add(data.category || __('Uncategorized', 'zenpress'));
				}
			});
			setOpenCategories(newOpen);
			return updated;
		});
	};

	// Group snippets by category
	const groupedSnippets = {};
	Object.keys(snippets).forEach((snippetName) => {
		const snippet = snippets[snippetName];
		const category = snippet?.category || __('Uncategorized', 'zenpress');
		if (!groupedSnippets[category]) groupedSnippets[category] = [];
		groupedSnippets[category].push({ name: snippetName, data: snippet });
	});

	// Sort categories alphabetically (case-insensitive)
	const sortedCategories = Object.keys(groupedSnippets).sort((a, b) =>
		a.localeCompare(b, undefined, { sensitivity: 'base' })
	);

	return (
		<>
			<div className="zenpress-row">
				<div className="zenpress-col">
					<div className="zenpress-presets">
						<div className="zenpress-presets-description">
							<p>
								{__(
									'Select the features that suit your needs. If you don\'t know which ones to choose, just select your site\'s type and it will set the right features for you.',
									'zenpress'
								)}
							</p>
							<h2>{__('Pick a preset', 'zenpress')}</h2>
						</div>

						<Button
							variant="secondary"
							onClick={() => enableByPreset('showcase-website')}
							__next40pxDefaultSize
						>
							{__('Showcase website', 'zenpress')}
						</Button>
						<Button
							variant="secondary"
							onClick={() => enableByPreset('blog')}
							__next40pxDefaultSize
						>
							{__('Blog', 'zenpress')}
						</Button>
						<Button
							variant="secondary"
							onClick={() => enableByPreset('ecommerce')}
							__next40pxDefaultSize
						>
							{__('E-commerce', 'zenpress')}
						</Button>
						<div className="zenpress-presets-description">
							<h2>{__('Or just enable what you need', 'zenpress')}</h2>
						</div>
						<div className="zenpress-actions-bulk">
							<Button
								variant="secondary"
								onClick={enableAllSnippets}
								__next40pxDefaultSize
							>
								{__('Enable all actions', 'zenpress')}
							</Button>

							<Button
								isDestructive="true"
								onClick={resetSettings}
								__next40pxDefaultSize
							>
								{__('Disable all actions', 'zenpress')}
							</Button>
						</div>
					</div>
					{sortedCategories.map((category) => (
						<Panel key={category}>
							<PanelBody
								title={category}
								// Keep open if already marked or if a snippet is enabled
								initialOpen={
									openCategories.has(category) ||
									groupedSnippets[category].some(
										({ data }) => data?.['enable-snippet']
									)
								}
							>
								{groupedSnippets[category].map(({ name, data }) => (
									<PanelRow key={name}>
										<SnippetToggleControl
											label={data.title || name}
											value={data?.['enable-snippet'] || false}
											onChange={() => handleToggleChange(name)}
											help={data.description || ''}
										/>
									</PanelRow>
								))}
							</PanelBody>
						</Panel>
					))}
					<div className="zenpress-actions">
						<SaveButton onClick={saveSettings} isBusy={isSaving} />
					</div>
					<div className="zenpress-notices">
						<Notices />
					</div>
				</div>
			</div>
		</>
	);
};

/**
 * Render the ZenPress settings page once the DOM is ready.
 *
 * @return {void}
 */
domReady(() => {
	const rootEl = document.getElementById('zenpress-settings');
	if (!rootEl) return; // Prevent fatal error if DOM element is missing
	const root = createRoot(rootEl);
	root.render(<SettingsPage />);
});
