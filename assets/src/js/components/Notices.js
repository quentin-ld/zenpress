import { useDispatch, useSelect } from '@wordpress/data';
import { store as noticesStore } from '@wordpress/notices';
import { NoticeList } from '@wordpress/components';

/**
 * Notices component to display success/error messages.
 *
 * @return {JSX.Element|null} List of notices or null if none exist.
 */
export const Notices = () => {
    const { removeNotice } = useDispatch(noticesStore);
    const notices = useSelect((select) => select(noticesStore).getNotices(), []);

    if (!notices || notices.length === 0) {
        return null;
    }

    return <NoticeList notices={notices} onRemove={removeNotice} />;
};
