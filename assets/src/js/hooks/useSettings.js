import { useState, useEffect } from '@wordpress/element';
import apiFetch from '@wordpress/api-fetch';
import { useDispatch } from '@wordpress/data';
import { store as noticesStore } from '@wordpress/notices';
import { __ } from '@wordpress/i18n';

/**
 * Custom hook to manage ZenPress settings state.
 *
 * @return {Object} Settings state and actions.
 * @property {Object}   snippets           - Current snippets with metadata.
 * @property {Function} setSnippets        - Setter to update snippets state.
 * @property {boolean}  adminBarEnabled    - Whether the ZenPress admin bar is enabled.
 * @property {Function} setAdminBarEnabled - Setter for admin bar enabled.
 * @property {Function} saveSettings       - Function to persist settings to REST API.
 * @property {boolean}  isSaving           - Whether settings are currently being saved.
 */
export const useSettings = () => {
	const [snippets, setSnippets] = useState({});
	const [adminBarEnabled, setAdminBarEnabled] = useState(false);
	const [isSaving, setIsSaving] = useState(false);
	const { createSuccessNotice, createErrorNotice } =
		useDispatch(noticesStore);

	useEffect(() => {
		apiFetch({ path: '/wp/v2/settings' })
			.then((settings) => {
				const active = Array.isArray(settings?.zenpress_active_snippets)
					? settings.zenpress_active_snippets
					: [];

				const meta = window?.zenpressSnippetsMeta || {};
				const snippetsData = {};

				Object.keys(meta).forEach((name) => {
					snippetsData[name] = {
						...meta[name],
						'enable-snippet': active.includes(name),
					};
				});

				setSnippets(snippetsData);
				setAdminBarEnabled(
					settings?.zenpress_admin_bar_enabled === true
				);
			})
			.catch(() => {
				createErrorNotice(__('Failed to load settings.', 'zenpress'));
			});
	}, [createErrorNotice]);

	const saveSettings = async () => {
		setIsSaving(true);

		const active = Object.keys(snippets).filter(
			(name) => snippets[name]?.['enable-snippet']
		);

		try {
			await apiFetch({
				path: '/wp/v2/settings',
				method: 'POST',
				data: {
					zenpress_active_snippets: active,
					zenpress_admin_bar_enabled: adminBarEnabled,
				},
			});
			createSuccessNotice(__('Settings saved.', 'zenpress'));
		} catch {
			createErrorNotice(__('Failed to save settings.', 'zenpress'));
		} finally {
			setIsSaving(false);
		}
	};

	return {
		snippets,
		setSnippets,
		adminBarEnabled,
		setAdminBarEnabled,
		saveSettings,
		isSaving,
	};
};
