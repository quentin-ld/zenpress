import { Button } from '@wordpress/components';
import { __ } from '@wordpress/i18n';

/**
 * Save button component for ZenPress settings.
 *
 * @param {Object}   props         - Component props.
 * @param {Function} props.onClick - Click handler for save action.
 * @param {boolean}  props.isBusy  - Whether the button is in loading state.
 * @return {JSX.Element} The save button.
 */
export const SaveButton = ({ onClick, isBusy }) => {
    return (
        <Button variant="primary" onClick={onClick} isBusy={isBusy} __next40pxDefaultSize>
            {__('Save settings', 'zenpress')}
        </Button>
    );
};
