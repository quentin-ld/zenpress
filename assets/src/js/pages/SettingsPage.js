import { useState, useEffect } from '@wordpress/element';
import { __ } from '@wordpress/i18n';
import { Button } from '@wordpress/components';
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
    const { snippets, setSnippets, saveSettings, isSaving } = useSettings();
    const [selectedTabId, setSelectedTabId] = useState();

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
        if (!category) return category;
        return category.charAt(0).toUpperCase() + category.slice(1).toLowerCase();
    };

    // Category order: Core, Gutenberg, WooCommerce, ads-blocker, Tools
    // Using English lowercase values for comparison since categories are stored in lowercase
    const categoryOrder = ['core', 'gutenberg', 'woocommerce', 'ads-blocker', 'tools'];

    // Group snippets by category, then by subcategory
    const groupedSnippets = {};
    Object.keys(snippets).forEach((snippetName) => {
        const snippet = snippets[snippetName];
        const category = (snippet?.category || __('Uncategorized', 'zenpress')).toLowerCase();
        const subcategory = (snippet?.subcategory || __('uncategorized', 'zenpress')).toLowerCase();

        if (!groupedSnippets[category]) {
            groupedSnippets[category] = {};
        }
        if (!groupedSnippets[category][subcategory]) {
            groupedSnippets[category][subcategory] = [];
        }
        groupedSnippets[category][subcategory].push({ name: snippetName, data: snippet });
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
        if (indexA !== -1) return -1;
        // If only B is in the order array, B comes first
        if (indexB !== -1) return 1;
        // If neither is in the order array, sort alphabetically
        return a.localeCompare(b, undefined, { sensitivity: 'base' });
    });

    // Set initial selected tab if none is selected
    useEffect(() => {
        if (!selectedTabId && sortedCategories.length > 0) {
            setSelectedTabId(sortedCategories[0]);
        }
    }, [selectedTabId, sortedCategories.length]);

    const onSelect = (tabName) => {
        setSelectedTabId(tabName);
    };

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
                            const subcategories = Object.keys(groupedSnippets[category]).sort();
                            return (
                                <Tabs.TabPanel key={category} tabId={category}>
                                    <h2>{capitalizeCategory(category)}</h2>
                                    {subcategories.map((subcategory) => (
                                        <div
                                            key={subcategory}
                                            className={`zenpress-subcategory zenpress-subcategory-${subcategory.toLowerCase().replace(/\s+/g, '-')}`}
                                        >
                                            <hr />
                                            <h3>{capitalizeCategory(subcategory)}</h3>
                                            {groupedSnippets[category][subcategory].map(({ name, data }) => (
                                                <SnippetToggleControl
                                                    key={name}
                                                    label={data.title || name}
                                                    value={data?.['enable-snippet'] || false}
                                                    onChange={() => handleToggleChange(name)}
                                                    help={data.description || ''}
                                                />
                                            ))}
                                        </div>
                                    ))}
                                </Tabs.TabPanel>
                            );
                        })}
                    </Tabs>
                    <div className="zenpress-actions">
                        <div className="zenpress-actions-bulk">
                            <Button variant="tertiary" onClick={enableAllSnippets} __next40pxDefaultSize>
                                {__('Enable all actions', 'zenpress')}
                            </Button>
                            <Button isDestructive onClick={resetSettings} __next40pxDefaultSize>
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
                        <h2>{__('Pick a preset', 'zenpress')}</h2>
                        <p>
                            {__(
                                "Select the features that suit your needs. If you don't know which ones to choose, just select your site's type and it will set the right features for you.",
                                'zenpress'
                            )}
                        </p>
                        <h3>{__('Corporate website / Portfolio preset', 'zenpress')}</h3>
                        <p></p>
                        <Button
                            variant="secondary"
                            onClick={() => enableByPreset('corporate-website')}
                            __next40pxDefaultSize
                        >
                            {__('Enable', 'zenpress')}
                        </Button>
                        <h3>{__('Blog preset', 'zenpress')}</h3>
                        <p></p>
                        <Button variant="secondary" onClick={() => enableByPreset('blog')} __next40pxDefaultSize>
                            {__('Enable', 'zenpress')}
                        </Button>
                        <h3>{__('E-commerce preset', 'zenpress')}</h3>
                        <p></p>
                        <Button variant="secondary" onClick={() => enableByPreset('ecommerce')} __next40pxDefaultSize>
                            {__('Enable', 'zenpress')}
                        </Button>
                    </div>
                </div>
            </aside>
        </article>
    );
};
