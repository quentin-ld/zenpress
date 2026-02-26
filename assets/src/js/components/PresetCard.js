import { __ } from '@wordpress/i18n';
import { Button } from '@wordpress/components';

/**
 * Single preset card: icon + title, description, Enable button.
 *
 * @param {Object}   props             - Component props.
 * @param {string}   props.icon        - Emoji or icon character.
 * @param {string}   props.title       - Preset title (translated).
 * @param {string}   props.description - Preset description (translated).
 * @param {string}   props.presetId    - Preset key for enableByPreset (e.g. 'corporate-website').
 * @param {Function} props.onEnable    - Called with presetId when Enable is clicked.
 * @return {JSX.Element} Single preset card (title, description, Enable button).
 */
export function PresetCard({ icon, title, description, presetId, onEnable }) {
	return (
		<>
			<hr />
			<h3>
				{icon} {title}
			</h3>
			<p>{description}</p>
			<Button
				variant="secondary"
				onClick={() => onEnable(presetId)}
				__next40pxDefaultSize
			>
				{__('Apply preset', 'zenpress')}
			</Button>
		</>
	);
}
