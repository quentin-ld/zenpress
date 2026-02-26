import { __ } from '@wordpress/i18n';
import { PresetCard } from './PresetCard';

const PRESETS = [
	{
		id: 'corporate-website',
		icon: '🖼️',
		title: __('Corporate website', 'zenpress'),
		description: __(
			'For business sites and portfolios. Focuses on security, performance, and removing unused features like RSS and author archives.',
			'zenpress'
		),
	},
	{
		id: 'blog',
		icon: '📰',
		title: __('Blog', 'zenpress'),
		description: __(
			'For content-focused blogs. Keeps RSS and other blog features while improving performance and security.',
			'zenpress'
		),
	},
	{
		id: 'ecommerce',
		icon: '🛒',
		title: __('E-commerce', 'zenpress'),
		description: __(
			'For WooCommerce stores. Performance and security plus WooCommerce optimizations for faster checkout.',
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
				<h2>{__('Choose a preset', 'zenpress')}</h2>
				<p>
					{__(
						'Not sure what to enable? Choose a preset that matches your site. Each preset turns on a set of features for that type of site.',
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
