import { __ } from '@wordpress/i18n';
import { Button } from '@wordpress/components';
import { SaveButton } from './SaveButton';

/**
 * Bulk snippet actions: Enable all, Disable all, and Save.
 *
 * @param {Object}   props              - Component props.
 * @param {Function} props.onEnableAll  - Called when "Enable all" is clicked.
 * @param {Function} props.onDisableAll - Called when "Disable all" is clicked.
 * @param {Function} props.onSave       - Called when "Save" is clicked.
 * @param {boolean}  props.isSaving     - Whether save is in progress.
 * @return {JSX.Element} Bulk actions wrapper (Enable all, Disable all, Save).
 */
export function BulkSnippetActions({
	onEnableAll,
	onDisableAll,
	onSave,
	isSaving,
}) {
	return (
		<div className="zenpress-actions">
			<div className="zenpress-actions-bulk">
				<Button
					variant="tertiary"
					onClick={onEnableAll}
					__next40pxDefaultSize
				>
					{__('Enable all actions', 'zenpress')}
				</Button>
				<Button
					isDestructive
					onClick={onDisableAll}
					__next40pxDefaultSize
				>
					{__('Disable all actions', 'zenpress')}
				</Button>
			</div>
			<SaveButton onClick={onSave} isBusy={isSaving} />
		</div>
	);
}
