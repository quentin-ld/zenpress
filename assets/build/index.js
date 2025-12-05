/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/src/index.scss":
/*!*******************************!*\
  !*** ./assets/src/index.scss ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./assets/src/js/components/Notices.js":
/*!*********************************************!*\
  !*** ./assets/src/js/components/Notices.js ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   Notices: () => (/* binding */ Notices)
/* harmony export */ });
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/data */ "@wordpress/data");
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_data__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_notices__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/notices */ "@wordpress/notices");
/* harmony import */ var _wordpress_notices__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_notices__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__);




/**
 * Notices component to display success/error messages.
 *
 * @return {JSX.Element|null} List of notices or null if none exist.
 */

const Notices = () => {
  const {
    removeNotice
  } = (0,_wordpress_data__WEBPACK_IMPORTED_MODULE_0__.useDispatch)(_wordpress_notices__WEBPACK_IMPORTED_MODULE_1__.store);
  const notices = (0,_wordpress_data__WEBPACK_IMPORTED_MODULE_0__.useSelect)(select => select(_wordpress_notices__WEBPACK_IMPORTED_MODULE_1__.store).getNotices(), []);
  if (!notices || notices.length === 0) {
    return null;
  }
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.NoticeList, {
    notices: notices,
    onRemove: removeNotice
  });
};

/***/ }),

/***/ "./assets/src/js/components/SaveButton.js":
/*!************************************************!*\
  !*** ./assets/src/js/components/SaveButton.js ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   SaveButton: () => (/* binding */ SaveButton)
/* harmony export */ });
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/i18n */ "@wordpress/i18n");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__);



/**
 * Save button component for ZenPress settings.
 *
 * @param {Object}   props         - Component props.
 * @param {Function} props.onClick - Click handler for save action.
 * @param {boolean}  props.isBusy  - Whether the button is in loading state.
 * @return {JSX.Element} The save button.
 */

const SaveButton = ({
  onClick,
  isBusy
}) => {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_0__.Button, {
    variant: "primary",
    onClick: onClick,
    isBusy: isBusy,
    __next40pxDefaultSize: true,
    children: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Save settings', 'zenpress')
  });
};

/***/ }),

/***/ "./assets/src/js/components/SnippetToggleControl.js":
/*!**********************************************************!*\
  !*** ./assets/src/js/components/SnippetToggleControl.js ***!
  \**********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   SnippetToggleControl: () => (/* binding */ SnippetToggleControl)
/* harmony export */ });
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


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

const SnippetToggleControl = ({
  label,
  value,
  onChange,
  help
}) => {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_0__.ToggleControl, {
    label: label,
    checked: value,
    onChange: onChange,
    help: help,
    __nextHasNoMarginBottom: true
  });
};

/***/ }),

/***/ "./assets/src/js/components/Tabs.js":
/*!******************************************!*\
  !*** ./assets/src/js/components/Tabs.js ***!
  \******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   Tab: () => (/* binding */ Tab),
/* harmony export */   TabList: () => (/* binding */ TabList),
/* harmony export */   TabPanel: () => (/* binding */ TabPanel),
/* harmony export */   Tabs: () => (/* binding */ Tabs)
/* harmony export */ });
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


const TabsContext = (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createContext)();

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
const Tabs = ({
  selectedTabId: controlledId,
  onSelect,
  orientation = 'horizontal',
  children
}) => {
  const [internalId, setInternalId] = (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.useState)();
  const selectedId = controlledId !== undefined ? controlledId : internalId;
  const handleSelect = id => {
    if (controlledId === undefined) setInternalId(id);
    onSelect?.(id);
  };
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(TabsContext.Provider, {
    value: {
      selectedTabId: selectedId,
      onSelect: handleSelect,
      orientation
    },
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: `zenpress-tabs zenpress-tabs--${orientation}`,
      children: children
    })
  });
};

/**
 * TabList component - container for Tab components
 *
 * @param {Object} props       - Component props.
 * @param {Object} props.children - Tab components.
 * @return {JSX.Element} The tab list container.
 */
const TabList = ({
  children
}) => {
  const {
    orientation
  } = (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.useContext)(TabsContext);
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
    className: `zenpress-tabs__list zenpress-tabs__list--${orientation}`,
    role: "tablist",
    "aria-orientation": orientation,
    children: children
  });
};

/**
 * Tab component - individual tab button
 *
 * @param {Object}   props          - Component props.
 * @param {string}   props.tabId    - Unique identifier for the tab.
 * @param {string}   props.title    - Tab title (optional, uses children if not provided).
 * @param {Object}   props.children - Tab content.
 * @return {JSX.Element} The tab button.
 */
const Tab = ({
  tabId,
  title,
  children
}) => {
  const {
    selectedTabId,
    onSelect
  } = (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.useContext)(TabsContext);
  const isSelected = selectedTabId === tabId;
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
    className: `zenpress-tabs__tab ${isSelected ? 'zenpress-tabs__tab--is-active' : ''}`,
    role: "tab",
    "aria-selected": isSelected,
    "aria-controls": `zenpress-tab-panel-${tabId}`,
    id: `zenpress-tab-${tabId}`,
    tabIndex: isSelected ? 0 : -1,
    onClick: () => onSelect(tabId),
    children: title || children
  });
};

/**
 * TabPanel component - container for tab content
 *
 * @param {Object}   props          - Component props.
 * @param {string}   props.tabId    - Unique identifier matching a Tab's tabId.
 * @param {Object}   props.children - Panel content.
 * @return {JSX.Element|null} The tab panel or null if not selected.
 */
const TabPanel = ({
  tabId,
  children
}) => {
  const {
    selectedTabId
  } = (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.useContext)(TabsContext);
  if (selectedTabId !== tabId) return null;
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
    className: "zenpress-tabs__panel",
    role: "tabpanel",
    id: `zenpress-tab-panel-${tabId}`,
    "aria-labelledby": `zenpress-tab-${tabId}`,
    children: children
  });
};
Tabs.TabList = TabList;
Tabs.Tab = Tab;
Tabs.TabPanel = TabPanel;

/***/ }),

/***/ "./assets/src/js/hooks/useSettings.js":
/*!********************************************!*\
  !*** ./assets/src/js/hooks/useSettings.js ***!
  \********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   useSettings: () => (/* binding */ useSettings)
/* harmony export */ });
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/api-fetch */ "@wordpress/api-fetch");
/* harmony import */ var _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/data */ "@wordpress/data");
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_data__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _wordpress_notices__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/notices */ "@wordpress/notices");
/* harmony import */ var _wordpress_notices__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_notices__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/i18n */ "@wordpress/i18n");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_4__);






/**
 * Custom hook to manage ZenPress settings state.
 *
 * @return {Object} Settings state and actions.
 * @property {Object}   snippets     - Current snippets with metadata.
 * @property {Function} setSnippets  - Setter to update snippets state.
 * @property {Function} saveSettings - Function to persist settings to REST API.
 * @property {boolean}  isSaving     - Whether settings are currently being saved.
 */
const useSettings = () => {
  const [snippets, setSnippets] = (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.useState)({});
  const [isSaving, setIsSaving] = (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const {
    createSuccessNotice,
    createErrorNotice
  } = (0,_wordpress_data__WEBPACK_IMPORTED_MODULE_2__.useDispatch)(_wordpress_notices__WEBPACK_IMPORTED_MODULE_3__.store);
  (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_1___default()({
      path: '/wp/v2/settings'
    }).then(settings => {
      const active = Array.isArray(settings?.zenpress_active_snippets) ? settings.zenpress_active_snippets : [];
      const meta = window?.zenpressSnippetsMeta || {};
      const snippetsData = {};
      Object.keys(meta).forEach(name => {
        snippetsData[name] = {
          ...meta[name],
          'enable-snippet': active.includes(name)
        };
      });
      setSnippets(snippetsData);
    }).catch(() => {
      createErrorNotice((0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_4__.__)('Failed to load settings.', 'zenpress'));
    });
  }, [createErrorNotice]);
  const saveSettings = async () => {
    setIsSaving(true);
    const active = Object.keys(snippets).filter(name => snippets[name]?.['enable-snippet']);
    try {
      await _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_1___default()({
        path: '/wp/v2/settings',
        method: 'POST',
        data: {
          zenpress_active_snippets: active
        }
      });
      createSuccessNotice((0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_4__.__)('Settings saved.', 'zenpress'));
    } catch {
      createErrorNotice((0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_4__.__)('Failed to save settings.', 'zenpress'));
    } finally {
      setIsSaving(false);
    }
  };
  return {
    snippets,
    setSnippets,
    saveSettings,
    isSaving
  };
};

/***/ }),

/***/ "./assets/src/js/pages/SettingsPage.js":
/*!*********************************************!*\
  !*** ./assets/src/js/pages/SettingsPage.js ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   SettingsPage: () => (/* binding */ SettingsPage)
/* harmony export */ });
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/i18n */ "@wordpress/i18n");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _hooks_useSettings__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../hooks/useSettings */ "./assets/src/js/hooks/useSettings.js");
/* harmony import */ var _components_SnippetToggleControl__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../components/SnippetToggleControl */ "./assets/src/js/components/SnippetToggleControl.js");
/* harmony import */ var _components_SaveButton__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../components/SaveButton */ "./assets/src/js/components/SaveButton.js");
/* harmony import */ var _components_Notices__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../components/Notices */ "./assets/src/js/components/Notices.js");
/* harmony import */ var _components_Tabs__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../components/Tabs */ "./assets/src/js/components/Tabs.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__);









/**
 * Main settings page component for ZenPress.
 *
 * @return {JSX.Element} The settings page UI.
 */

const SettingsPage = () => {
  const {
    snippets,
    setSnippets,
    saveSettings,
    isSaving
  } = (0,_hooks_useSettings__WEBPACK_IMPORTED_MODULE_3__.useSettings)();
  const [selectedTabId, setSelectedTabId] = (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.useState)();
  const handleToggleChange = snippetName => {
    setSnippets(prev => ({
      ...prev,
      [snippetName]: {
        ...prev[snippetName],
        'enable-snippet': !prev[snippetName]?.['enable-snippet']
      }
    }));
  };
  const enableAllSnippets = () => {
    setSnippets(prev => {
      const updated = {};
      Object.keys(prev).forEach(name => {
        updated[name] = {
          ...prev[name],
          'enable-snippet': true
        };
      });
      return updated;
    });
  };
  const resetSettings = () => {
    setSnippets(prev => {
      const updated = {};
      Object.keys(prev).forEach(name => {
        updated[name] = {
          ...prev[name],
          'enable-snippet': false
        };
      });
      return updated;
    });
  };
  const enableByPreset = preset => {
    setSnippets(prev => {
      const updated = {};
      Object.entries(prev).forEach(([name, data]) => {
        const presets = Array.isArray(data?.preset) ? data.preset : [];
        const isEnabled = presets.includes(preset);
        updated[name] = {
          ...data,
          'enable-snippet': isEnabled
        };
      });
      return updated;
    });
  };

  // Group snippets by category
  const groupedSnippets = {};
  Object.keys(snippets).forEach(snippetName => {
    const snippet = snippets[snippetName];
    const category = snippet?.category || (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Uncategorized', 'zenpress');
    if (!groupedSnippets[category]) {
      groupedSnippets[category] = [];
    }
    groupedSnippets[category].push({
      name: snippetName,
      data: snippet
    });
  });
  const sortedCategories = Object.keys(groupedSnippets).sort((a, b) => a.localeCompare(b, undefined, {
    sensitivity: 'base'
  }));

  // Set initial selected tab if none is selected
  (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    if (!selectedTabId && sortedCategories.length > 0) {
      setSelectedTabId(sortedCategories[0]);
    }
  }, [selectedTabId, sortedCategories.length]);
  const onSelect = tabName => {
    setSelectedTabId(tabName);
  };
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsxs)("article", {
    className: "zenpress-row",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsxs)("section", {
      className: "zenpress-main",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)("div", {
        className: "zenpress-notices",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_components_Notices__WEBPACK_IMPORTED_MODULE_6__.Notices, {})
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsxs)("div", {
        className: "zenpress-panel",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsxs)(_components_Tabs__WEBPACK_IMPORTED_MODULE_7__.Tabs, {
          orientation: "vertical",
          selectedTabId: selectedTabId,
          onSelect: selectedId => {
            setSelectedTabId(selectedId);
            onSelect(selectedId);
          },
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_components_Tabs__WEBPACK_IMPORTED_MODULE_7__.Tabs.TabList, {
            children: sortedCategories.map(category => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_components_Tabs__WEBPACK_IMPORTED_MODULE_7__.Tabs.Tab, {
              tabId: category,
              title: category,
              children: category
            }, category))
          }), sortedCategories.map(category => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_components_Tabs__WEBPACK_IMPORTED_MODULE_7__.Tabs.TabPanel, {
            tabId: category,
            children: groupedSnippets[category].map(({
              name,
              data
            }) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_components_SnippetToggleControl__WEBPACK_IMPORTED_MODULE_4__.SnippetToggleControl, {
              label: data.title || name,
              value: data?.['enable-snippet'] || false,
              onChange: () => handleToggleChange(name),
              help: data.description || ''
            }, name))
          }, category))]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsxs)("div", {
          className: "zenpress-actions",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsxs)("div", {
            className: "zenpress-actions-bulk",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
              variant: "tertiary",
              onClick: enableAllSnippets,
              __next40pxDefaultSize: true,
              children: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Enable all actions', 'zenpress')
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
              isDestructive: true,
              onClick: resetSettings,
              __next40pxDefaultSize: true,
              children: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Disable all actions', 'zenpress')
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_components_SaveButton__WEBPACK_IMPORTED_MODULE_5__.SaveButton, {
            onClick: saveSettings,
            isBusy: isSaving
          })]
        })]
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)("aside", {
      className: "zenpress-sidebar",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)("div", {
        className: "zenpress-presets",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsxs)("div", {
          className: "zenpress-presets-description",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)("h2", {
            children: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Pick a preset', 'zenpress')
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)("p", {
            children: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)("Select the features that suit your needs. If you don't know which ones to choose, just select your site's type and it will set the right features for you.", 'zenpress')
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)("h3", {
            children: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Showcase website preset', 'zenpress')
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)("p", {}), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
            variant: "secondary",
            onClick: () => enableByPreset('showcase-website'),
            __next40pxDefaultSize: true,
            children: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Enable', 'zenpress')
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)("h3", {
            children: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Blog preset', 'zenpress')
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)("p", {}), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
            variant: "secondary",
            onClick: () => enableByPreset('blog'),
            __next40pxDefaultSize: true,
            children: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Enable', 'zenpress')
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)("h3", {
            children: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('E-commerce preset', 'zenpress')
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)("p", {}), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.Button, {
            variant: "secondary",
            onClick: () => enableByPreset('ecommerce'),
            __next40pxDefaultSize: true,
            children: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Enable', 'zenpress')
          })]
        })
      })
    })]
  });
};

/***/ }),

/***/ "@wordpress/api-fetch":
/*!**********************************!*\
  !*** external ["wp","apiFetch"] ***!
  \**********************************/
/***/ ((module) => {

module.exports = window["wp"]["apiFetch"];

/***/ }),

/***/ "@wordpress/components":
/*!************************************!*\
  !*** external ["wp","components"] ***!
  \************************************/
/***/ ((module) => {

module.exports = window["wp"]["components"];

/***/ }),

/***/ "@wordpress/data":
/*!******************************!*\
  !*** external ["wp","data"] ***!
  \******************************/
/***/ ((module) => {

module.exports = window["wp"]["data"];

/***/ }),

/***/ "@wordpress/dom-ready":
/*!**********************************!*\
  !*** external ["wp","domReady"] ***!
  \**********************************/
/***/ ((module) => {

module.exports = window["wp"]["domReady"];

/***/ }),

/***/ "@wordpress/element":
/*!*********************************!*\
  !*** external ["wp","element"] ***!
  \*********************************/
/***/ ((module) => {

module.exports = window["wp"]["element"];

/***/ }),

/***/ "@wordpress/i18n":
/*!******************************!*\
  !*** external ["wp","i18n"] ***!
  \******************************/
/***/ ((module) => {

module.exports = window["wp"]["i18n"];

/***/ }),

/***/ "@wordpress/notices":
/*!*********************************!*\
  !*** external ["wp","notices"] ***!
  \*********************************/
/***/ ((module) => {

module.exports = window["wp"]["notices"];

/***/ }),

/***/ "react/jsx-runtime":
/*!**********************************!*\
  !*** external "ReactJSXRuntime" ***!
  \**********************************/
/***/ ((module) => {

module.exports = window["ReactJSXRuntime"];

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be isolated against other modules in the chunk.
(() => {
/*!*****************************!*\
  !*** ./assets/src/index.js ***!
  \*****************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_dom_ready__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/dom-ready */ "@wordpress/dom-ready");
/* harmony import */ var _wordpress_dom_ready__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_dom_ready__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _index_scss__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./index.scss */ "./assets/src/index.scss");
/* harmony import */ var _js_pages_SettingsPage__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./js/pages/SettingsPage */ "./assets/src/js/pages/SettingsPage.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__);





/**
 * Render the ZenPress settings page once the DOM is ready.
 */

_wordpress_dom_ready__WEBPACK_IMPORTED_MODULE_0___default()(() => {
  const rootEl = document.getElementById('zenpress-settings');
  if (!rootEl) return;
  const root = (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createRoot)(rootEl);
  root.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)(_js_pages_SettingsPage__WEBPACK_IMPORTED_MODULE_3__.SettingsPage, {}));
});
})();

/******/ })()
;
//# sourceMappingURL=index.js.map