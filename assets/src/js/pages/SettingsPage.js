import { useState, useEffect } from '@wordpress/element';
import { __ } from '@wordpress/i18n';
import { Button } from '@wordpress/components';
import { useDispatch } from '@wordpress/data';
import { store as noticesStore } from '@wordpress/notices';
import apiFetch from '@wordpress/api-fetch';
import { useSettings } from '../hooks/useSettings';
import { SnippetToggleControl } from '../components/SnippetToggleControl';
import { SaveButton } from '../components/SaveButton';
import { Notices } from '../components/Notices';
import { Tabs } from '../components/Tabs';

/**
 * Main settings page component for ZenPress.
 *
 * @return {JSX.Element} The settings page UI.
 */
export const SettingsPage = () => {
	const {
		snippets,
		setSnippets,
		adminBarEnabled,
		setAdminBarEnabled,
		saveSettings,
		isSaving,
	} = useSettings();
	const [selectedTabId, setSelectedTabId] = useState();
	const [autoconfigBusy, setAutoconfigBusy] = useState(null);
	const { createSuccessNotice, createErrorNotice } =
		useDispatch(noticesStore);

	const handleToggleChange = (snippetName) => {
		setSnippets((prev) => ({
			...prev,
			[snippetName]: {
				...prev[snippetName],
				'enable-snippet': !prev[snippetName]?.['enable-snippet'],
			},
		}));
	};

	const enableAllSnippets = () => {
		setSnippets((prev) => {
			const updated = {};
			Object.keys(prev).forEach((name) => {
				updated[name] = { ...prev[name], 'enable-snippet': true };
			});
			return updated;
		});
	};

	const resetSettings = () => {
		setSnippets((prev) => {
			const updated = {};
			Object.keys(prev).forEach((name) => {
				updated[name] = { ...prev[name], 'enable-snippet': false };
			});
			return updated;
		});
	};

	const enableByPreset = (preset) => {
		setSnippets((prev) => {
			const updated = {};
			Object.entries(prev).forEach(([name, data]) => {
				const presets = Array.isArray(data?.preset) ? data.preset : [];
				const isEnabled = presets.includes(preset);
				updated[name] = { ...data, 'enable-snippet': isEnabled };
			});
			return updated;
		});
	};

	// Helper function to capitalize category name
	const capitalizeCategory = (category) => {
		if (!category) {
			return category;
		}
		return (
			category.charAt(0).toUpperCase() + category.slice(1).toLowerCase()
		);
	};

	// Category order: Core, Gutenberg, WooCommerce, ads-blocker, Tools
	// Using English lowercase values for comparison since categories are stored in lowercase
	const categoryOrder = [
		'core',
		'gutenberg',
		'woocommerce',
		'ads-blocker',
		'tools',
	];

	// Group snippets by category, then by subcategory
	const groupedSnippets = {};
	Object.keys(snippets).forEach((snippetName) => {
		const snippet = snippets[snippetName];
		const category = (
			snippet?.category || __('Uncategorized', 'zenpress')
		).toLowerCase();
		const subcategory = (
			snippet?.subcategory || __('uncategorized', 'zenpress')
		).toLowerCase();

		if (!groupedSnippets[category]) {
			groupedSnippets[category] = {};
		}
		if (!groupedSnippets[category][subcategory]) {
			groupedSnippets[category][subcategory] = [];
		}
		groupedSnippets[category][subcategory].push({
			name: snippetName,
			data: snippet,
		});
	});

	// Sort categories according to the specified order
	const sortedCategories = Object.keys(groupedSnippets).sort((a, b) => {
		const indexA = categoryOrder.indexOf(a.toLowerCase());
		const indexB = categoryOrder.indexOf(b.toLowerCase());

		// If both are in the order array, sort by their position
		if (indexA !== -1 && indexB !== -1) {
			return indexA - indexB;
		}
		// If only A is in the order array, A comes first
		if (indexA !== -1) {
			return -1;
		}
		// If only B is in the order array, B comes first
		if (indexB !== -1) {
			return 1;
		}
		// If neither is in the order array, sort alphabetically
		return a.localeCompare(b, undefined, { sensitivity: 'base' });
	});

	// Set initial selected tab if none is selected
	useEffect(() => {
		if (!selectedTabId && sortedCategories.length > 0) {
			setSelectedTabId(sortedCategories[0]);
		}
	}, [selectedTabId, sortedCategories]);

	const onSelect = (tabName) => {
		setSelectedTabId(tabName);
	};

	const runAutoconfig = async (
		integrationKey,
		path,
		successMessage,
		errorMessage
	) => {
		setAutoconfigBusy(integrationKey);
		try {
			const response = await apiFetch({
				path,
				method: 'POST',
			});
			createSuccessNotice(response?.message || successMessage);
		} catch {
			createErrorNotice(errorMessage);
		} finally {
			setAutoconfigBusy(null);
		}
	};

	const handleAutoconfigAutoptimize = () =>
		runAutoconfig(
			'autoptimize',
			'/zenpress/v1/autoconfig/autoptimize',
			__('Autoptimize has been configured.', 'zenpress'),
			__(
				'Autoptimize autoconfig failed. Is Autoptimize installed and active?',
				'zenpress'
			)
		);

	const handleAutoconfigCacheEnabler = () =>
		runAutoconfig(
			'cache_enabler',
			'/zenpress/v1/autoconfig/cache-enabler',
			__('Cache Enabler has been configured.', 'zenpress'),
			__(
				'Cache Enabler autoconfig failed. Is Cache Enabler installed and active?',
				'zenpress'
			)
		);

	const handleAutoconfigSqliteObjectCache = () =>
		runAutoconfig(
			'sqlite_object_cache',
			'/zenpress/v1/autoconfig/sqlite-object-cache',
			__('SQLite Object Cache has been configured.', 'zenpress'),
			__(
				'SQLite Object Cache autoconfig failed. Is SQLite Object Cache installed and active?',
				'zenpress'
			)
		);

	// Add keyboard shortcuts and ensure toggles are keyboard accessible
	useEffect(() => {
		const handleKeyDown = (e) => {
			// Ctrl+S or Cmd+S to save
			if ((e.ctrlKey || e.metaKey) && e.key === 's') {
				e.preventDefault();
				if (!isSaving) {
					saveSettings();
				}
			}
		};

		document.addEventListener('keydown', handleKeyDown);
		return () => {
			document.removeEventListener('keydown', handleKeyDown);
		};
	}, [saveSettings, isSaving]);

	return (
		<article className="zenpress-row">
			<section className="zenpress-main">
				<div className="zenpress-notices">
					<Notices />
				</div>
				<div className="zenpress-panel">
					<Tabs
						orientation="vertical"
						selectedTabId={selectedTabId}
						onSelect={(selectedId) => {
							setSelectedTabId(selectedId);
							onSelect(selectedId);
						}}
					>
						<Tabs.TabList>
							{sortedCategories.map((category) => {
								const categoryClass = `zenpress-tabs__tab--category-${category.toLowerCase().replace(/\s+/g, '-')}`;
								return (
									<Tabs.Tab
										key={category}
										tabId={category}
										title={capitalizeCategory(category)}
										className={categoryClass}
									>
										{capitalizeCategory(category)}
									</Tabs.Tab>
								);
							})}
						</Tabs.TabList>
						{sortedCategories.map((category) => {
							const subcategories = Object.keys(
								groupedSnippets[category]
							).sort();
							return (
								<Tabs.TabPanel key={category} tabId={category}>
									<h2>{capitalizeCategory(category)}</h2>
									{subcategories.map((subcategory) => (
										<div
											key={subcategory}
											className={`zenpress-subcategory zenpress-subcategory-${subcategory.toLowerCase().replace(/\s+/g, '-')}`}
										>
											<hr />
											<h3>
												{capitalizeCategory(
													subcategory
												)}
											</h3>
											{groupedSnippets[category][
												subcategory
											].map(({ name, data }) => (
												<SnippetToggleControl
													key={name}
													label={data.title || name}
													value={
														data?.[
															'enable-snippet'
														] || false
													}
													onChange={() =>
														handleToggleChange(name)
													}
													help={
														data.description || ''
													}
												/>
											))}
										</div>
									))}
									{category === 'tools' &&
										Object.values(
											window?.zenpressIntegrationsActive ||
												{}
										).some(Boolean) && (
											<div className="zenpress-subcategory zenpress-subcategory-integrations">
												<hr />
												<h3>
													{__(
														'Integrations',
														'zenpress'
													)}
												</h3>
												<SnippetToggleControl
													label={__(
														'Show ZenPress admin bar button',
														'zenpress'
													)}
													value={adminBarEnabled}
													onChange={() =>
														setAdminBarEnabled(
															!adminBarEnabled
														)
													}
													help={__(
														'Show a "ZenPress" item in the admin bar with "Clear caches". When enabled, integration buttons (e.g. Autoptimize) are hidden.',
														'zenpress'
													)}
												/>
												{window
													?.zenpressIntegrationsActive
													?.autoptimize && (
													<div className="zenpress-autoconfig-actions">
														<Button
															variant="secondary"
															onClick={
																handleAutoconfigAutoptimize
															}
															disabled={
																autoconfigBusy !==
																null
															}
															__next40pxDefaultSize
														>
															{autoconfigBusy ===
															'autoptimize'
																? __(
																		'Applying…',
																		'zenpress'
																	)
																: __(
																		'One-click autoconfig Autoptimize',
																		'zenpress'
																	)}
														</Button>
														<p className="zenpress-autoconfig-help">
															{__(
																'Apply recommended Autoptimize settings (optimize JS/CSS, aggregate CSS, static files, 404 fallbacks; disable defer, HTML optimize, optimize for logged-in, per post/page). Only works if Autoptimize is active.',
																'zenpress'
															)}
														</p>
													</div>
												)}
												{window
													?.zenpressIntegrationsActive
													?.cache_enabler && (
													<div className="zenpress-autoconfig-actions">
														<Button
															variant="secondary"
															onClick={
																handleAutoconfigCacheEnabler
															}
															disabled={
																autoconfigBusy !==
																null
															}
															__next40pxDefaultSize
														>
															{autoconfigBusy ===
															'cache_enabler'
																? __(
																		'Applying…',
																		'zenpress'
																	)
																: __(
																		'One-click autoconfig Cache Enabler',
																		'zenpress'
																	)}
														</Button>
														<p className="zenpress-autoconfig-help">
															{__(
																'Apply recommended Cache Enabler settings. Only works if Cache Enabler is active.',
																'zenpress'
															)}
														</p>
													</div>
												)}
												{window
													?.zenpressIntegrationsActive
													?.sqlite_object_cache && (
													<div className="zenpress-autoconfig-actions">
														<Button
															variant="secondary"
															onClick={
																handleAutoconfigSqliteObjectCache
															}
															disabled={
																autoconfigBusy !==
																null
															}
															__next40pxDefaultSize
														>
															{autoconfigBusy ===
															'sqlite_object_cache'
																? __(
																		'Applying…',
																		'zenpress'
																	)
																: __(
																		'One-click autoconfig SQLite Object Cache',
																		'zenpress'
																	)}
														</Button>
														<p className="zenpress-autoconfig-help">
															{__(
																'Apply recommended SQLite Object Cache settings. Only works if SQLite Object Cache is active.',
																'zenpress'
															)}
														</p>
													</div>
												)}
											</div>
										)}
								</Tabs.TabPanel>
							);
						})}
					</Tabs>
					<div className="zenpress-actions">
						<div className="zenpress-actions-bulk">
							<Button
								variant="tertiary"
								onClick={enableAllSnippets}
								__next40pxDefaultSize
							>
								{__('Enable all actions', 'zenpress')}
							</Button>
							<Button
								isDestructive
								onClick={resetSettings}
								__next40pxDefaultSize
							>
								{__('Disable all actions', 'zenpress')}
							</Button>
						</div>
						<SaveButton onClick={saveSettings} isBusy={isSaving} />
					</div>
				</div>
			</section>
			<aside className="zenpress-sidebar">
				<div className="zenpress-presets">
					<div className="zenpress-presets-description">
						<h2>{__('Pick configuration preset', 'zenpress')}</h2>
						<p>
							{__(
								"Don't know which features to enable? Quickly configure ZenPress by selecting a preset that matches your site type. Each preset enables optimized features for your specific use case.",
								'zenpress'
							)}
						</p>
						<hr />
						<h3>🖼️ {__('Corporate website', 'zenpress')}</h3>
						<p>
							{__(
								'Optimized for business sites and portfolios. Focuses on security, performance, and removing unnecessary features like RSS feeds and author archives.',
								'zenpress'
							)}
						</p>
						<Button
							variant="secondary"
							onClick={() => enableByPreset('corporate-website')}
							__next40pxDefaultSize
						>
							{__('Enable', 'zenpress')}
						</Button>
						<hr />
						<h3> 📰 {__('Blog', 'zenpress')}</h3>
						<p>
							{__(
								'Tailored for content-focused blogs. Includes performance and security optimizations while preserving essential blog features like RSS feeds.',
								'zenpress'
							)}
						</p>
						<Button
							variant="secondary"
							onClick={() => enableByPreset('blog')}
							__next40pxDefaultSize
						>
							{__('Enable', 'zenpress')}
						</Button>
						<hr />
						<h3>🛒 {__('E-commerce', 'zenpress')}</h3>
						<p>
							{__(
								'Designed for WooCommerce stores. Includes all performance and security features plus WooCommerce-specific optimizations for faster checkout.',
								'zenpress'
							)}
						</p>
						<Button
							variant="secondary"
							onClick={() => enableByPreset('ecommerce')}
							__next40pxDefaultSize
						>
							{__('Enable', 'zenpress')}
						</Button>
					</div>
				</div>
			</aside>
		</article>
	);
};
