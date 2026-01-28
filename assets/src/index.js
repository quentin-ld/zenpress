import domReady from '@wordpress/dom-ready';
import { createRoot } from '@wordpress/element';
import './index.scss';
import { SettingsPage } from './js/pages/SettingsPage';

/**
 * Render the ZenPress settings page once the DOM is ready.
 */
domReady(() => {
	const rootEl = document.getElementById('zenpress-settings');
	if (!rootEl) {
		return;
	}

	const root = createRoot(rootEl);
	root.render(<SettingsPage />);
});
