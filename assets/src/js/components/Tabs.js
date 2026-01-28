import {
	useState,
	createContext,
	useContext,
	useRef,
	useEffect,
} from '@wordpress/element';

const TabsContext = createContext();

/**
 * Custom Tabs component with vertical orientation support
 *
 * @param {Object}   props               - Component props.
 * @param {string}   props.selectedTabId - Currently selected tab ID.
 * @param {Function} props.onSelect      - Callback when tab is selected.
 * @param {string}   props.orientation   - Tab orientation ('vertical' or 'horizontal').
 * @param {Object}   props.children      - Child components (TabList and TabPanels).
 * @return {JSX.Element} The tabs container.
 */
export const Tabs = ({
	selectedTabId: controlledId,
	onSelect,
	orientation = 'horizontal',
	children,
}) => {
	const [internalId, setInternalId] = useState();
	const tabListRef = useRef(null);
	const selectedId = controlledId !== undefined ? controlledId : internalId;
	const handleSelect = (id) => {
		if (controlledId === undefined) {
			setInternalId(id);
		}
		onSelect?.(id);
	};

	// Function to get ordered tab IDs from DOM
	const getOrderedTabIds = () => {
		if (!tabListRef.current) {
			return [];
		}

		const tabs = Array.from(
			tabListRef.current.querySelectorAll('[role="tab"]')
		);
		return tabs
			.map((tab) => {
				const id = tab.getAttribute('id');
				return id ? id.replace('zenpress-tab-', '') : null;
			})
			.filter(Boolean);
	};

	return (
		<TabsContext.Provider
			value={{
				selectedTabId: selectedId,
				onSelect: handleSelect,
				orientation,
				getOrderedTabIds,
				tabListRef,
			}}
		>
			<div className={`zenpress-tabs zenpress-tabs--${orientation}`}>
				{children}
			</div>
		</TabsContext.Provider>
	);
};

/**
 * TabList component - container for Tab components
 *
 * @param {Object} props          - Component props.
 * @param {Object} props.children - Tab components.
 * @return {JSX.Element} The tab list container.
 */
export const TabList = ({ children }) => {
	const { orientation, tabListRef } = useContext(TabsContext);

	return (
		<div
			ref={tabListRef}
			className={`zenpress-tabs__list zenpress-tabs__list--${orientation}`}
			role="tablist"
			aria-orientation={orientation}
		>
			{children}
		</div>
	);
};

/**
 * Tab component - individual tab button
 *
 * @param {Object} props           - Component props.
 * @param {string} props.tabId     - Unique identifier for the tab.
 * @param {string} props.title     - Tab title (optional, uses children if not provided).
 * @param {string} props.className - Additional CSS class name.
 * @param {Object} props.children  - Tab content.
 * @return {JSX.Element} The tab button.
 */
export const Tab = ({ tabId, title, className = '', children }) => {
	const { selectedTabId, onSelect, orientation, getOrderedTabIds } =
		useContext(TabsContext);
	const isSelected = selectedTabId === tabId;
	const tabRef = useRef(null);

	// Handle keyboard navigation according to W3C ARIA pattern
	const handleKeyDown = (e) => {
		const tabIds = getOrderedTabIds();
		if (!tabIds || tabIds.length === 0) {
			return;
		}

		const currentIndex = tabIds.indexOf(tabId);
		if (currentIndex === -1) {
			return;
		}

		let targetIndex = currentIndex;

		// Handle arrow keys based on orientation
		if (orientation === 'vertical') {
			if (e.key === 'ArrowDown') {
				e.preventDefault();
				targetIndex =
					currentIndex < tabIds.length - 1 ? currentIndex + 1 : 0;
			} else if (e.key === 'ArrowUp') {
				e.preventDefault();
				targetIndex =
					currentIndex > 0 ? currentIndex - 1 : tabIds.length - 1;
			}
		} else if (e.key === 'ArrowRight') {
			// Horizontal orientation
			e.preventDefault();
			targetIndex =
				currentIndex < tabIds.length - 1 ? currentIndex + 1 : 0;
		} else if (e.key === 'ArrowLeft') {
			// Horizontal orientation
			e.preventDefault();
			targetIndex =
				currentIndex > 0 ? currentIndex - 1 : tabIds.length - 1;
		}

		// Handle Home and End keys
		if (e.key === 'Home') {
			e.preventDefault();
			targetIndex = 0;
		} else if (e.key === 'End') {
			e.preventDefault();
			targetIndex = tabIds.length - 1;
		}

		// Handle Space and Enter for activation (if not auto-activated)
		if (e.key === ' ' || e.key === 'Enter') {
			e.preventDefault();
			onSelect(tabId);
			return;
		}

		// Move focus to target tab if index changed
		if (
			targetIndex !== currentIndex &&
			targetIndex >= 0 &&
			targetIndex < tabIds.length
		) {
			const targetTabId = tabIds[targetIndex];
			const targetTabElement = document.getElementById(
				`zenpress-tab-${targetTabId}`
			);
			if (targetTabElement) {
				targetTabElement.focus();
				// Auto-activate on focus (recommended by W3C for better UX)
				onSelect(targetTabId);
			}
		}
	};

	// Auto-activate tab when it receives focus (recommended by W3C)
	const handleFocus = () => {
		if (!isSelected) {
			onSelect(tabId);
		}
	};

	return (
		<button
			ref={tabRef}
			className={`zenpress-tabs__tab ${isSelected ? 'zenpress-tabs__tab--is-active' : ''} ${className}`.trim()}
			role="tab"
			aria-selected={isSelected}
			aria-controls={`zenpress-tab-panel-${tabId}`}
			id={`zenpress-tab-${tabId}`}
			tabIndex={isSelected ? 0 : -1}
			onClick={() => onSelect(tabId)}
			onKeyDown={handleKeyDown}
			onFocus={handleFocus}
		>
			{title || children}
		</button>
	);
};

/**
 * TabPanel component - container for tab content
 *
 * @param {Object} props          - Component props.
 * @param {string} props.tabId    - Unique identifier matching a Tab's tabId.
 * @param {Object} props.children - Panel content.
 * @return {JSX.Element|null} The tab panel or null if not selected.
 */
export const TabPanel = ({ tabId, children }) => {
	const { selectedTabId } = useContext(TabsContext);
	const panelRef = useRef(null);
	const isSelected = selectedTabId === tabId;

	// Check if panel contains focusable elements
	useEffect(() => {
		if (isSelected && panelRef.current) {
			const focusableElements = panelRef.current.querySelectorAll(
				'a[href], button:not([disabled]), [tabindex]:not([tabindex="-1"]), input:not([disabled]), select:not([disabled]), textarea:not([disabled])'
			);

			// If no focusable elements, make the panel itself focusable
			if (focusableElements.length === 0) {
				panelRef.current.setAttribute('tabindex', '0');
			} else {
				panelRef.current.removeAttribute('tabindex');
			}
		}
	}, [isSelected]);

	if (!isSelected) {
		return (
			<div
				className="zenpress-tabs__panel"
				role="tabpanel"
				id={`zenpress-tab-panel-${tabId}`}
				aria-labelledby={`zenpress-tab-${tabId}`}
				hidden
			>
				{children}
			</div>
		);
	}

	return (
		<div
			ref={panelRef}
			className="zenpress-tabs__panel"
			role="tabpanel"
			id={`zenpress-tab-panel-${tabId}`}
			aria-labelledby={`zenpress-tab-${tabId}`}
		>
			{children}
		</div>
	);
};

Tabs.TabList = TabList;
Tabs.Tab = Tab;
Tabs.TabPanel = TabPanel;
