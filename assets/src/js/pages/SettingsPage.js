import { useState, useEffect, useMemo } from '@wordpress/element';
import { useSettings } from '../hooks/useSettings';
import { useAutoconfig } from '../hooks/useAutoconfig';
import { groupAndSortSnippets, capitalizeCategory } from '../utils/snippets';
import { Notices } from '../components/Notices';
import { Tabs } from '../components/Tabs';
import { BulkSnippetActions } from '../components/BulkSnippetActions';
import { SnippetCategoryPanel } from '../components/SnippetCategoryPanel';
import { PresetsSidebar } from '../components/PresetsSidebar';

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
	const { autoconfigBusy, getHandler: getAutoconfigHandler } =
		useAutoconfig();
	const [selectedTabId, setSelectedTabId] = useState();

	const { grouped: groupedSnippets, sortedCategories } = useMemo(
		() => groupAndSortSnippets(snippets),
		[snippets]
	);

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

	useEffect(() => {
		if (!selectedTabId && sortedCategories.length > 0) {
			setSelectedTabId(sortedCategories[0]);
		}
	}, [selectedTabId, sortedCategories]);

	useEffect(() => {
		const handleKeyDown = (e) => {
			if ((e.ctrlKey || e.metaKey) && e.key === 's') {
				e.preventDefault();
				if (!isSaving) {
					saveSettings();
				}
			}
		};
		document.addEventListener('keydown', handleKeyDown);
		return () => document.removeEventListener('keydown', handleKeyDown);
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
						onSelect={setSelectedTabId}
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
						{sortedCategories.map((category) => (
							<Tabs.TabPanel key={category} tabId={category}>
								<SnippetCategoryPanel
									category={category}
									groupedSnippets={groupedSnippets}
									onToggle={handleToggleChange}
									showIntegrations={category === 'tools'}
									adminBarEnabled={adminBarEnabled}
									setAdminBarEnabled={setAdminBarEnabled}
									autoconfigBusy={autoconfigBusy}
									getAutoconfigHandler={getAutoconfigHandler}
								/>
							</Tabs.TabPanel>
						))}
					</Tabs>
					<BulkSnippetActions
						onEnableAll={enableAllSnippets}
						onDisableAll={resetSettings}
						onSave={saveSettings}
						isSaving={isSaving}
					/>
				</div>
			</section>
			<aside className="zenpress-sidebar">
				<PresetsSidebar onEnablePreset={enableByPreset} />
			</aside>
		</article>
	);
};
