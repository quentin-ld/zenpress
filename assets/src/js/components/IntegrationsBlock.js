import { __ } from '@wordpress/i18n';
import { SnippetToggleControl } from './SnippetToggleControl';
import { AutoconfigButton } from './AutoconfigButton';
import { INTEGRATIONS_AUTOCONFIG } from '../config/integrations';
import { getActiveIntegrations } from '../utils/integrations';

/**
 * Integrations section: admin bar toggle + autoconfig buttons per active integration.
 *
 * @param {Object}        props                      - Component props.
 * @param {boolean}       props.adminBarEnabled      - Whether ZenPress admin bar is enabled.
 * @param {Function}      props.setAdminBarEnabled   - Setter for admin bar enabled.
 * @param {string | null} props.autoconfigBusy       - Key of integration currently running autoconfig.
 * @param {Function}      props.getAutoconfigHandler - (key) => onClick handler for that integration.
 * @return {JSX.Element} Integrations block (admin bar toggle + autoconfig buttons).
 */
export function IntegrationsBlock({
	adminBarEnabled,
	setAdminBarEnabled,
	autoconfigBusy,
	getAutoconfigHandler,
}) {
	return (
		<div className="zenpress-subcategory zenpress-subcategory-integrations">
			<hr />
			<h3>{__('Integrations', 'zenpress')}</h3>
			<SnippetToggleControl
				label={__('Show cache actions in admin bar', 'zenpress')}
				value={adminBarEnabled}
				onChange={() => setAdminBarEnabled(!adminBarEnabled)}
				help={__(
					'Adds a ZenPress menu to the admin bar with "Clear all caches" and options for each active cache (page, static files, object cache). Only appears when Cache Enabler, Autoptimize, or SQLite Object Cache is active. Hides those plugins\' own admin bar buttons.',
					'zenpress'
				)}
			/>
			{INTEGRATIONS_AUTOCONFIG.filter(
				(config) => getActiveIntegrations()[config.key]
			).map((config) => (
				<AutoconfigButton
					key={config.key}
					integrationKey={config.key}
					buttonLabel={config.buttonLabel}
					helpText={config.helpText}
					onClick={getAutoconfigHandler(config.key)}
					busyKey={autoconfigBusy}
				/>
			))}
		</div>
	);
}
