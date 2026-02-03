import { __ } from '@wordpress/i18n';
import { Button } from '@wordpress/components';

/**
 * Single integration autoconfig: button + help text.
 *
 * @param {Object}        props                - Component props.
 * @param {string}        props.integrationKey - Key used for busy state (e.g. 'autoptimize').
 * @param {string}        props.buttonLabel    - Button label when idle.
 * @param {string}        props.helpText       - Help text below button.
 * @param {Function}      props.onClick        - Click handler.
 * @param {string | null} props.busyKey        - Which integration is currently busy (same as integrationKey when applying).
 * @return {JSX.Element} Autoconfig button and help text for one integration.
 */
export function AutoconfigButton({
	integrationKey,
	buttonLabel,
	helpText,
	onClick,
	busyKey,
}) {
	const isBusy = busyKey === integrationKey;

	return (
		<div className="zenpress-autoconfig-actions">
			<Button
				variant="secondary"
				onClick={onClick}
				disabled={busyKey !== null}
				__next40pxDefaultSize
			>
				{isBusy ? __('Applying…', 'zenpress') : buttonLabel}
			</Button>
			<p className="zenpress-autoconfig-help">{helpText}</p>
		</div>
	);
}
