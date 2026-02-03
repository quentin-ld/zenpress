import { __ } from '@wordpress/i18n';

/**
 * Integration config for autoconfig (REST path, messages, button/help labels).
 * Keys must match window.zenpressIntegrationsActive.
 */
export const INTEGRATIONS_AUTOCONFIG = [
	{
		key: 'autoptimize',
		path: '/zenpress/v1/autoconfig/autoptimize',
		successMessage: __('Autoptimize has been configured.', 'zenpress'),
		errorMessage: __(
			'Autoptimize autoconfig failed. Is Autoptimize installed and active?',
			'zenpress'
		),
		buttonLabel: __('Setup Autoptimize', 'zenpress'),
		helpText: __(
			'Apply recommended Autoptimize settings: Minify JS & CSS, aggregate CSS, static files, 404 fallbacks.',
			'zenpress'
		),
	},
	{
		key: 'cache_enabler',
		path: '/zenpress/v1/autoconfig/cache-enabler',
		successMessage: __('Cache Enabler has been configured.', 'zenpress'),
		errorMessage: __(
			'Cache Enabler autoconfig failed. Is Cache Enabler installed and active?',
			'zenpress'
		),
		buttonLabel: __('Setup Cache Enabler', 'zenpress'),
		helpText: __(
			'Apply recommended Cache Enabler settings: Clear site cache on post or plugin changes, WebP support, Gzip or Brotli compression, and minify HTML (excluding inline CSS/JS).',
			'zenpress'
		),
	},
	{
		key: 'sqlite_object_cache',
		path: '/zenpress/v1/autoconfig/sqlite-object-cache',
		successMessage: __(
			'SQLite Object Cache has been configured.',
			'zenpress'
		),
		errorMessage: __(
			'SQLite Object Cache autoconfig failed. Is SQLite Object Cache installed and active?',
			'zenpress'
		),
		buttonLabel: __('Setup SQLite Object Cache', 'zenpress'),
		helpText: __(
			'Apply recommended SQLite Object Cache settings. Enable "Use APCu" if APCu is available.',
			'zenpress'
		),
	},
];
