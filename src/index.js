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
	// State to track if settings are being saved
	const [isSaving, setIsSaving] = useState(false);
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
		setIsSaving(true);
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
		}).catch(() => {
			// Optionally show an error notice if the save fails
		}).finally(() => {
			setIsSaving(false);
		});
	};
	// Return the state and functions to be used by components
	return {
		snippets,
		setSnippets,
		saveSettings,
		isSaving,
	};
};

// Component for a toggle control for a snippet
const SnippetToggleControl = ({ label, value, onChange, help }) => {
	return (
		<ToggleControl
			label={label}
			checked={value}
			onChange={onChange}
			help={help}
			__nextHasNoMarginBottom
		/>
	);
};

// Component for the save button
const SaveButton = ({ onClick, isBusy }) => {
	return (
		<Button variant="primary" onClick={onClick} isBusy={isBusy} __next40pxDefaultSize>
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
	const { snippets, setSnippets, saveSettings, isSaving } = useSettings();
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

	// Group snippets by category
	const groupSnippetsByCategory = () => {
		const groupedSnippets = {};
		Object.keys(snippets).forEach(snippetName => {
			const snippet = snippets[snippetName];
			const category = snippet?.category || 'Uncategorized';
			if (!groupedSnippets[category]) {
				groupedSnippets[category] = [];
			}
			groupedSnippets[category].push({ name: snippetName, data: snippet });
		});
		return groupedSnippets;
	};

	const groupedSnippets = groupSnippetsByCategory();

	// Render the settings page
	return (
		<>
			{Object.keys(groupedSnippets).map(category => (
				<Panel key={category}>
					<PanelBody title={category} initialOpen={true}>
						{groupedSnippets[category].map(({ name: snippetName, data: snippet }) => {
							const title = snippet?.title || snippetName;
							const description = snippet?.description || '';
							const label = title;
							return (
								<PanelRow key={snippetName}>
									<SnippetToggleControl
										label={label}
										value={snippet?.['enable-snippet'] || false}
										onChange={() => handleToggleChange(snippetName)}
										help={description}
									/>
								</PanelRow>
							);
						})}
					</PanelBody>
				</Panel>
			))}
			{/* Save button to save settings */}
			<SaveButton onClick={saveSettings} isBusy={isSaving} __next40pxDefaultSize={true}/>
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
