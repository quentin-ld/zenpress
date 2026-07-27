import { __ } from '@wordpress/i18n';
import { PresetCard } from './PresetCard';

const PRESETS = [
    {
        id: 'corporate-website',
        icon: '🖼️',
        title: __('Corporate website', 'zenpress'),
        description: __(
            'For business sites and portfolios. Disables RSS, author archives, and other features typically unused on company sites.',
            'zenpress'
        ),
    },
    {
        id: 'blog',
        icon: '📰',
        title: __('Blog', 'zenpress'),
        description: __(
            'For content-focused sites. Keeps RSS and other blog-related features while disabling unnecessary assets.',
            'zenpress'
        ),
    },
    {
        id: 'ecommerce',
        icon: '🛒',
        title: __('E-commerce', 'zenpress'),
        description: __(
            'For WooCommerce stores. Disables non-essential WooCommerce features and removes unused WordPress functionality.',
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
                        'Not sure what to enable? Choose a preset that matches your site. Each preset enables a set of features for that type of site.',
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
