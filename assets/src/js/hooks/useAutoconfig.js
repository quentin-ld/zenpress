import { useState } from '@wordpress/element';
import { useDispatch } from '@wordpress/data';
import { store as noticesStore } from '@wordpress/notices';
import apiFetch from '@wordpress/api-fetch';
import { INTEGRATIONS_AUTOCONFIG } from '../config/integrations';

/**
 * Hook to run integration autoconfig (API call + notices).
 *
 * @return {{ autoconfigBusy: string | null, runAutoconfig: Function, getHandler: Function }} Autoconfig state and handlers.
 */
export function useAutoconfig() {
	const [autoconfigBusy, setAutoconfigBusy] = useState(null);
	const { createSuccessNotice, createErrorNotice } =
		useDispatch(noticesStore);

	const runAutoconfig = async (
		integrationKey,
		path,
		successMessage,
		errorMessage
	) => {
		if (typeof path !== 'string' || !path.startsWith('/')) {
			createErrorNotice(errorMessage);
			return;
		}
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

	/**
	 * Returns an onClick handler for a given integration key.
	 *
	 * @param {string} integrationKey - Key matching INTEGRATIONS_AUTOCONFIG[].key.
	 * @return {Function} Click handler.
	 */
	const getHandler = (integrationKey) => {
		const config = INTEGRATIONS_AUTOCONFIG.find(
			(c) => c.key === integrationKey
		);
		if (!config) {
			return () => {};
		}
		return () =>
			runAutoconfig(
				config.key,
				config.path,
				config.successMessage,
				config.errorMessage
			);
	};

	return {
		autoconfigBusy,
		runAutoconfig,
		getHandler,
	};
}
