import { ToggleControl } from '@wordpress/components';

/**
 * Toggle control component for enabling/disabling a snippet.
 *
 * @param {Object}   props          - Component props.
 * @param {string}   props.label    - Label of the toggle.
 * @param {boolean}  props.value    - Current state of the toggle.
 * @param {Function} props.onChange - Change handler.
 * @param {string}   [props.help]   - Optional description/help text.
 * @return {JSX.Element} The toggle control.
 */
export const SnippetToggleControl = ({ label, value, onChange, help }) => {
    return <ToggleControl label={label} checked={value} onChange={onChange} help={help} __nextHasNoMarginBottom />;
};
