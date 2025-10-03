import { useState } from '@wordpress/element';
import { __ } from '@wordpress/i18n';
import { Panel, PanelBody, PanelRow, Button } from '@wordpress/components';
import { useSettings } from '../hooks/useSettings';
import { SnippetToggleControl } from '../components/SnippetToggleControl';
import { SaveButton } from '../components/SaveButton';
import { Notices } from '../components/Notices';

/**
 * Main settings page component for ZenPress.
 *
 * @return {JSX.Element} The settings page UI.
 */
export const SettingsPage = () => {
    const { snippets, setSnippets, saveSettings, isSaving } = useSettings();
    const [openCategories, setOpenCategories] = useState(new Set());

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
        setOpenCategories(new Set(sortedCategories));
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
        setOpenCategories(new Set(sortedCategories));
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

    return (
        <div className="zenpress-row">
            <div className="zenpress-col">
                <div className="zenpress-presets">
                    <div className="zenpress-presets-description">
                        <p>
                            {__(
                                "Select the features that suit your needs. If you don't know which ones to choose, just select your site's type and it will set the right features for you.",
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
                    <Button variant="secondary" onClick={() => enableByPreset('blog')} __next40pxDefaultSize>
                        {__('Blog', 'zenpress')}
                    </Button>
                    <Button variant="secondary" onClick={() => enableByPreset('ecommerce')} __next40pxDefaultSize>
                        {__('E-commerce', 'zenpress')}
                    </Button>

                    <div className="zenpress-presets-description">
                        <h2>{__('Or just enable what you need', 'zenpress')}</h2>
                    </div>

                    <div className="zenpress-actions-bulk">
                        <Button variant="secondary" onClick={enableAllSnippets} __next40pxDefaultSize>
                            {__('Enable all actions', 'zenpress')}
                        </Button>

                        <Button isDestructive onClick={resetSettings} __next40pxDefaultSize>
                            {__('Disable all actions', 'zenpress')}
                        </Button>
                    </div>
                </div>

                {sortedCategories.map((category) => (
                    <Panel key={category}>
                        <PanelBody title={category} initialOpen={openCategories.has(category)}>
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
    );
};
