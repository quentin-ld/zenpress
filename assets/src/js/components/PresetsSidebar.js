import { __ } from '@wordpress/i18n';
import { PresetCard } from './PresetCard';

const PRESETS = [
	{
		id: 'corporate-website',
		icon: '🖼️',
		title: __('Corporate website', 'zenpress'),
		description: __(
			'Optimized for business sites and portfolios. Focuses on security, performance, and removing unnecessary features like RSS feeds and author archives.',
			'zenpress'
		),
	},
	{
		id: 'blog',
		icon: '📰',
		title: __('Blog', 'zenpress'),
		description: __(
			'Tailored for content-focused blogs. Includes performance and security optimizations while preserving essential blog features like RSS feeds.',
			'zenpress'
		),
	},
	{
		id: 'ecommerce',
		icon: '🛒',
		title: __('E-commerce', 'zenpress'),
		description: __(
			'Designed for WooCommerce stores. Includes all performance and security features plus WooCommerce-specific optimizations for faster checkout.',
			'zenpress'
		),
	},
];

/**
 * Sidebar block: "Pick configuration preset" + preset cards.
 *
 * @param {Object}   props                - Component props.
 * @param {Function} props.onEnablePreset - (presetId) => void.
 * @return {JSX.Element} Sidebar with preset cards.
 */
export function PresetsSidebar({ onEnablePreset }) {
	return (
		<div className="zenpress-presets">
			<div className="zenpress-presets-description">
				<h2>{__('Pick configuration preset', 'zenpress')}</h2>
				<p>
					{__(
						"Don't know which features to enable? Quickly configure ZenPress by selecting a preset that matches your site type. Each preset enables optimized features for your specific use case.",
						'zenpress'
					)}
				</p>
				{PRESETS.map((preset) => (
					<PresetCard
						key={preset.id}
						icon={preset.icon}
						title={preset.title}
						description={preset.description}
						presetId={preset.id}
						onEnable={onEnablePreset}
					/>
				))}
			</div>
		</div>
	);
}
