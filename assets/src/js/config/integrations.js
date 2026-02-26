import { __ } from '@wordpress/i18n';

/**
 * Integration config for autoconfig (REST path, messages, button/help labels).
 * Keys must match window.zenpressIntegrationsActive.
 */
export const INTEGRATIONS_AUTOCONFIG = [
	{
		key: 'autoptimize',
		path: '/zenpress/v1/autoconfig/autoptimize',
		successMessage: __('Autoptimize configured.', 'zenpress'),
		errorMessage: __(
			'Autoptimize setup failed. Is Autoptimize installed and active?',
			'zenpress'
		),
		buttonLabel: __('Set up Autoptimize', 'zenpress'),
		helpText: __(
			'Apply recommended settings: minify JS and CSS, combine CSS, static file caching, 404 fallbacks.',
			'zenpress'
		),
	},
	{
		key: 'cache_enabler',
		path: '/zenpress/v1/autoconfig/cache-enabler',
		successMessage: __('Cache Enabler configured.', 'zenpress'),
		errorMessage: __(
			'Cache Enabler setup failed. Is Cache Enabler installed and active?',
			'zenpress'
		),
		buttonLabel: __('Set up Cache Enabler', 'zenpress'),
		helpText: __(
			'Apply recommended settings: clear cache on content changes, WebP, compression, minify HTML.',
			'zenpress'
		),
	},
	{
		key: 'sqlite_object_cache',
		path: '/zenpress/v1/autoconfig/sqlite-object-cache',
		successMessage: __('SQLite Object Cache configured.', 'zenpress'),
		errorMessage: __(
			'SQLite Object Cache setup failed. Is it installed and active?',
			'zenpress'
		),
		buttonLabel: __('Set up SQLite Object Cache', 'zenpress'),
		helpText: __(
			'Apply recommended settings. Enable "Use APCu" in the plugin if available.',
			'zenpress'
		),
	},
];
