import { useState, createContext, useContext } from '@wordpress/element';

const TabsContext = createContext();

/**
 * Custom Tabs component with vertical orientation support
 *
 * @param {Object}   props                - Component props.
 * @param {string}   props.selectedTabId  - Currently selected tab ID.
 * @param {Function} props.onSelect       - Callback when tab is selected.
 * @param {string}   props.orientation    - Tab orientation ('vertical' or 'horizontal').
 * @param {Object}   props.children       - Child components (TabList and TabPanels).
 * @return {JSX.Element} The tabs container.
 */
export const Tabs = ({ selectedTabId: controlledId, onSelect, orientation = 'horizontal', children }) => {
    const [internalId, setInternalId] = useState();
    const selectedId = controlledId !== undefined ? controlledId : internalId;
    const handleSelect = (id) => {
        if (controlledId === undefined) setInternalId(id);
        onSelect?.(id);
    };

    return (
        <TabsContext.Provider value={{ selectedTabId: selectedId, onSelect: handleSelect, orientation }}>
            <div className={`zenpress-tabs zenpress-tabs--${orientation}`}>{children}</div>
        </TabsContext.Provider>
    );
};

/**
 * TabList component - container for Tab components
 *
 * @param {Object} props       - Component props.
 * @param {Object} props.children - Tab components.
 * @return {JSX.Element} The tab list container.
 */
export const TabList = ({ children }) => {
    const { orientation } = useContext(TabsContext);
    return (
        <div
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
 * @param {Object}   props          - Component props.
 * @param {string}   props.tabId    - Unique identifier for the tab.
 * @param {string}   props.title    - Tab title (optional, uses children if not provided).
 * @param {string}   props.className - Additional CSS class name.
 * @param {Object}   props.children - Tab content.
 * @return {JSX.Element} The tab button.
 */
export const Tab = ({ tabId, title, className = '', children }) => {
    const { selectedTabId, onSelect } = useContext(TabsContext);
    const isSelected = selectedTabId === tabId;
    return (
        <button
            className={`zenpress-tabs__tab ${isSelected ? 'zenpress-tabs__tab--is-active' : ''} ${className}`.trim()}
            role="tab"
            aria-selected={isSelected}
            aria-controls={`zenpress-tab-panel-${tabId}`}
            id={`zenpress-tab-${tabId}`}
            tabIndex={isSelected ? 0 : -1}
            onClick={() => onSelect(tabId)}
        >
            {title || children}
        </button>
    );
};

/**
 * TabPanel component - container for tab content
 *
 * @param {Object}   props          - Component props.
 * @param {string}   props.tabId    - Unique identifier matching a Tab's tabId.
 * @param {Object}   props.children - Panel content.
 * @return {JSX.Element|null} The tab panel or null if not selected.
 */
export const TabPanel = ({ tabId, children }) => {
    const { selectedTabId } = useContext(TabsContext);
    if (selectedTabId !== tabId) return null;
    return (
        <div
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
