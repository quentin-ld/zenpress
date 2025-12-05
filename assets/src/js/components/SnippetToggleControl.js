import { ToggleControl } from '@wordpress/components';
import { useRef, useEffect } from '@wordpress/element';

/**
 * Temporary support function to handle Enter key on toggle controls.
 * TODO: Remove this when WordPress ToggleControl properly handles Enter key.
 *
 * @param {HTMLElement} container - Container element to attach listener to.
 * @param {Function} onChange - Change handler to call when Enter is pressed.
 */
const addEnterKeySupport = (container, onChange) => {
    if (!container) return;

    const handleKeyDown = (e) => {
        // Handle Enter key on the toggle control
        if (e.key === 'Enter') {
            const toggleInput = container.querySelector('input[type="checkbox"]');
            if (toggleInput && (document.activeElement === toggleInput || container.contains(document.activeElement))) {
                e.preventDefault();
                e.stopPropagation();
                onChange();
            }
        }
    };

    container.addEventListener('keydown', handleKeyDown);
    return () => {
        container.removeEventListener('keydown', handleKeyDown);
    };
};

/**
 * Toggle control component for enabling/disabling a snippet.
 * WordPress ToggleControl already supports keyboard navigation:
 * - Tab to focus
 * - Space or Enter to toggle
 *
 * @param {Object}   props          - Component props.
 * @param {string}   props.label    - Label of the toggle.
 * @param {boolean}  props.value    - Current state of the toggle.
 * @param {Function} props.onChange - Change handler.
 * @param {string}   [props.help]   - Optional description/help text.
 * @return {JSX.Element} The toggle control.
 */
export const SnippetToggleControl = ({ label, value, onChange, help }) => {
    const containerRef = useRef(null);

    // Temporary support for Enter key handling
    useEffect(() => {
        return addEnterKeySupport(containerRef.current, onChange);
    }, [onChange]);

    return (
        <div ref={containerRef}>
            <ToggleControl label={label} checked={value} onChange={onChange} help={help} __nextHasNoMarginBottom />
        </div>
    );
};
