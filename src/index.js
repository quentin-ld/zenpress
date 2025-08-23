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

// Custom hook to manage settings state
const useSettings = () => {
    // State to store snippets data
    const [snippets, setSnippets] = useState({});
    // Get the function to create success notices
    const { createSuccessNotice } = useDispatch(noticesStore);

    // Effect to fetch settings data when component mounts
    useEffect(() => {
        // Fetch settings data from the REST API
        apiFetch({ path: '/wp/v2/settings' }).then((settings) => {
            const snippetsData = {};
            // Loop through all keys in the settings
            Object.keys(settings).forEach(key => {
                // Check if the key starts with 'zenpress_'
                if (key.startsWith('zenpress_')) {
                    // Extract the snippet name by removing 'zenpress_' prefix
                    const snippetName = key.replace('zenpress_', '');
                    // Store the snippet data
                    snippetsData[snippetName] = settings[key];
                }
            });
            // Update the state with the fetched snippets data
            setSnippets(snippetsData);
        });
    }, []); // Empty dependency array ensures this effect runs only once on mount

    // Function to save settings
    const saveSettings = () => {
        // Prepare the data to send
        const settingsData = {};
        Object.keys(snippets).forEach(snippetName => {
            // Prefix each snippet name with 'zenpress_' to match PHP registration
            settingsData[`zenpress_${snippetName}`] = snippets[snippetName];
        });
        // Send a POST request to update settings
        apiFetch({
            path: '/wp/v2/settings',
            method: 'POST',
            data: settingsData,
        }).then(() => {
            // Show a success notice when settings are saved
            createSuccessNotice(
                __('Settings saved.', 'zenpress')
            );
        });
    };

    // Return the state and functions to be used by components
    return {
        snippets,
        setSnippets,
        saveSettings,
    };
};

// Component for a toggle control for a snippet
const SnippetToggleControl = ({ label, value, onChange }) => {
    return (
        <ToggleControl
            label={label}
            checked={value}
            onChange={onChange}
            __nextHasNoMarginBottom
        />
    );
};

// Component for the save button
const SaveButton = ({ onClick }) => {
    return (
        <Button variant="primary" onClick={onClick} __next40pxDefaultSize>
            {__('Save', 'zenpress')}
        </Button>
    );
};

// Component to display notices
const Notices = () => {
    // Get the function to remove notices and the list of notices
    const { removeNotice } = useDispatch(noticesStore);
    const notices = useSelect((select) => select(noticesStore).getNotices());

    // Return null if there are no notices
    if (notices.length === 0) {
        return null;
    }
    // Display the list of notices
    return <NoticeList notices={notices} onRemove={removeNotice} />;
};

// Main settings page component
const SettingsPage = () => {
    // Get the snippets state and functions from the custom hook
    const { snippets, setSnippets, saveSettings } = useSettings();

    // Function to handle toggle changes
    const handleToggleChange = (snippetName) => {
        setSnippets(prevSnippets => ({
            // Keep all existing snippets data
            ...prevSnippets,
            // Update the specific snippet's enable-snippet value
            [snippetName]: {
                ...prevSnippets[snippetName],
                'enable-snippet': !prevSnippets[snippetName]?.['enable-snippet']
            }
        }));
    };

    // Render the settings page
    return (
        <>
            <Panel>
                <PanelBody title={__('Snippets', 'zenpress')}>
                    {/* Map through each snippet and create a toggle control */}
                    {Object.keys(snippets).map((snippetName) => (
                        <PanelRow key={snippetName}>
                            <SnippetToggleControl
                                label={snippetName}
                                value={snippets[snippetName]?.['enable-snippet'] || false}
                                onChange={() => handleToggleChange(snippetName)}
                            />
                        </PanelRow>
                    ))}
                </PanelBody>
            </Panel>
            {/* Save button to save settings */}
            <SaveButton onClick={saveSettings} />
            {/* Component to display notices */}
            <Notices />
        </>
    );
};

// Render the settings page when the DOM is ready
domReady(() => {
    const root = createRoot(
        document.getElementById('zenpress-settings')
    );
    root.render(<SettingsPage />);
});
