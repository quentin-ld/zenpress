/**
 * Safe read of window.zenpressIntegrationsActive (plain object only).
 *
 * @return {Object} Map of integration key to boolean; empty if missing or invalid.
 */
export function getActiveIntegrations() {
	const raw =
		typeof window !== 'undefined'
			? window.zenpressIntegrationsActive
			: null;
	if (!raw || typeof raw !== 'object' || Array.isArray(raw)) {
		return {};
	}
	return raw;
}

/**
 * Whether at least one integration is active.
 *
 * @return {boolean} True if at least one integration is active.
 */
export function hasActiveIntegration() {
	return Object.values(getActiveIntegrations()).some(Boolean);
}
