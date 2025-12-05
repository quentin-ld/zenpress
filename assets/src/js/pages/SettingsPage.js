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

    // Group snippets by category
    const groupedSnippets = {};
    Object.keys(snippets).forEach((snippetName) => {
        const snippet = snippets[snippetName];
        const category = snippet?.category || __('Uncategorized', 'zenpress');
        if (!groupedSnippets[category]) {
            groupedSnippets[category] = [];
        }
        groupedSnippets[category].push({ name: snippetName, data: snippet });
    });

    const sortedCategories = Object.keys(groupedSnippets).sort((a, b) =>
        a.localeCompare(b, undefined, { sensitivity: 'base' })
    );

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
                            {sortedCategories.map((category) => (
                                <Tabs.Tab key={category} tabId={category} title={category}>
                                    {category}
                                </Tabs.Tab>
                            ))}
                        </Tabs.TabList>
                        {sortedCategories.map((category) => (
                            <Tabs.TabPanel key={category} tabId={category}>
                                {groupedSnippets[category].map(({ name, data }) => (
                                    <SnippetToggleControl
                                        key={name}
                                        label={data.title || name}
                                        value={data?.['enable-snippet'] || false}
                                        onChange={() => handleToggleChange(name)}
                                        help={data.description || ''}
                                    />
                                ))}
                            </Tabs.TabPanel>
                        ))}
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
                        <h3>{__('Showcase website preset', 'zenpress')}</h3>
                        <p></p>
                        <Button
                            variant="secondary"
                            onClick={() => enableByPreset('showcase-website')}
                            __next40pxDefaultSize
                        >
                            {__('Enable', 'zenpress')}
                        </Button>
                        <h3>{__('Blog preset', 'zenpress')}</h3>
                        <p></p>
                        <Button
                            variant="secondary"
                            onClick={() => enableByPreset('blog')}
                            __next40pxDefaultSize
                        >
                            {__('Enable', 'zenpress')}
                        </Button>
                        <h3>{__('E-commerce preset', 'zenpress')}</h3>
                        <p></p>
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
