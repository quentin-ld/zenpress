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
	const [snippets, setSnippets] = useState({});
	const [isSaving, setIsSaving] = useState(false);
	const { createSuccessNotice } = useDispatch(noticesStore);

	useEffect(() => {
		apiFetch({ path: '/wp/v2/settings' }).then((settings) => {
			const snippetsData = {};
			Object.keys(settings).forEach(key => {
				if (key.startsWith('zenpress_')) {
					const snippetName = key.replace('zenpress_', '');
					const enable = settings[key]?.['enable-snippet'] || false;
					const meta = window.zenpressSnippetsMeta?.[snippetName] || {};
					snippetsData[snippetName] = { ...meta, 'enable-snippet': enable };
				}
			});
			setSnippets(snippetsData);
		});
	}, []);

	const saveSettings = () => {
		setIsSaving(true);
		const data = {};
		Object.keys(snippets).forEach(snippetName => {
			data[`zenpress_${snippetName}`] = {
				'enable-snippet': snippets[snippetName]?.['enable-snippet'] || false,
			};
		});
		apiFetch({
			path: '/wp/v2/settings',
			method: 'POST',
			data,
		}).then(() => {
			createSuccessNotice(__('Settings saved.', 'zenpress'));
		}).finally(() => setIsSaving(false));
	};

	return { snippets, setSnippets, saveSettings, isSaving };
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
	const { snippets, setSnippets, saveSettings, isSaving } = useSettings();

	const handleToggleChange = (snippetName) => {
		setSnippets(prev => ({
			...prev,
			[snippetName]: {
				...prev[snippetName],
				'enable-snippet': !prev[snippetName]?.['enable-snippet']
			}
		}));
	};

	const groupedSnippets = {};
	Object.keys(snippets).forEach(snippetName => {
		const snippet = snippets[snippetName];
		const category = snippet?.category || __('Uncategorized', 'zenpress');
		if (!groupedSnippets[category]) groupedSnippets[category] = [];
		groupedSnippets[category].push({ name: snippetName, data: snippet });
	});

	return (
		<>
			{Object.keys(groupedSnippets).map(category => (
				<Panel key={category}>
					<PanelBody title={category} initialOpen={true}>
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
			<SaveButton onClick={saveSettings} isBusy={isSaving} />
			<Notices />
		</>
	);
};
// Render the settings page when the DOM is ready
domReady(() => {
	const root = createRoot(document.getElementById('zenpress-settings'));
	root.render(<SettingsPage />);
});
