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
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/i18n */ "@wordpress/i18n");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/api-fetch */ "@wordpress/api-fetch");
/* harmony import */ var _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @wordpress/data */ "@wordpress/data");
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_wordpress_data__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _wordpress_notices__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @wordpress/notices */ "@wordpress/notices");
/* harmony import */ var _wordpress_notices__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_wordpress_notices__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var _index_scss__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./index.scss */ "./assets/src/index.scss");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__);
// Import necessary modules from WordPress libraries














/**
 * Custom hook to manage ZenPress settings state.
 *
 * @returns {object} Settings state and actions.
 * @property {object} snippets - Current snippets with metadata.
 * @property {Function} setSnippets - Setter to update snippets state.
 * @property {Function} saveSettings - Function to persist settings to REST API.
 * @property {boolean} isSaving - Whether settings are currently being saved.
 */

const useSettings = () => {
  const [snippets, setSnippets] = (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.useState)({});
  const [isSaving, setIsSaving] = (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.useState)(false);
  const {
    createSuccessNotice,
    createErrorNotice
  } = (0,_wordpress_data__WEBPACK_IMPORTED_MODULE_5__.useDispatch)(_wordpress_notices__WEBPACK_IMPORTED_MODULE_6__.store);
  (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.useEffect)(() => {
    _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_4___default()({
      path: '/wp/v2/settings'
    }).then(settings => {
      const active = Array.isArray(settings?.zenpress_active_snippets) ? settings.zenpress_active_snippets : [];
      const snippetsData = {};
      const meta = window?.zenpressSnippetsMeta || {};
      Object.keys(meta).forEach(snippetName => {
        const m = meta[snippetName] || {};
        snippetsData[snippetName] = {
          ...m,
          'enable-snippet': active.includes(snippetName)
        };
      });
      setSnippets(snippetsData);
    }).catch(() => {
      createErrorNotice((0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Failed to load settings.', 'zenpress'));
    });
  }, [createErrorNotice]);

  /**
   * Save updated snippets to WordPress REST API.
   *
   * @returns {Promise<void>}
   */
  const saveSettings = () => {
    setIsSaving(true);
    const active = Object.keys(snippets).filter(snippetName => snippets[snippetName]?.['enable-snippet'] || false);
    return _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_4___default()({
      path: '/wp/v2/settings',
      method: 'POST',
      data: {
        zenpress_active_snippets: active
      }
    }).then(() => {
      createSuccessNotice((0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Settings saved.', 'zenpress'));
    }).catch(() => {
      createErrorNotice((0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Failed to save settings.', 'zenpress'));
    }).finally(() => setIsSaving(false));
  };
  return {
    snippets,
    setSnippets,
    saveSettings,
    isSaving
  };
};

/**
 * Toggle control for enabling/disabling a snippet.
 *
 * @param {object} props - Component props.
 * @param {string} props.label - Label of the toggle.
 * @param {boolean} props.value - Current state of the toggle.
 * @param {Function} props.onChange - Change handler.
 * @param {string} [props.help] - Optional description/help text.
 * @returns {JSX.Element} The toggle control.
 */
const SnippetToggleControl = ({
  label,
  value,
  onChange,
  help
}) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_3__.ToggleControl, {
  label: label,
  checked: value,
  onChange: onChange,
  help: help,
  __nextHasNoMarginBottom: true
});

/**
 * Save button component.
 *
 * @param {object} props - Component props.
 * @param {Function} props.onClick - Click handler for save action.
 * @param {boolean} props.isBusy - Whether the button is in loading state.
 * @returns {JSX.Element} The save button.
 */
const SaveButton = ({
  onClick,
  isBusy
}) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_3__.Button, {
  variant: "primary",
  onClick: onClick,
  isBusy: isBusy,
  __next40pxDefaultSize: true,
  children: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Save settings', 'zenpress')
});

/**
 * Notices component to display success/error messages.
 *
 * @returns {JSX.Element|null} List of notices or null if none exist.
 */
const Notices = () => {
  const {
    removeNotice
  } = (0,_wordpress_data__WEBPACK_IMPORTED_MODULE_5__.useDispatch)(_wordpress_notices__WEBPACK_IMPORTED_MODULE_6__.store);
  const notices = (0,_wordpress_data__WEBPACK_IMPORTED_MODULE_5__.useSelect)(select => select(_wordpress_notices__WEBPACK_IMPORTED_MODULE_6__.store).getNotices());
  if (!notices?.length) return null;
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_3__.NoticeList, {
    notices: notices,
    onRemove: removeNotice
  });
};

/**
 * Main settings page component for ZenPress.
 *
 * @returns {JSX.Element} The settings page UI.
 */
const SettingsPage = () => {
  const {
    snippets,
    setSnippets,
    saveSettings,
    isSaving
  } = useSettings();

  /**
   * Handle toggle state change for a snippet.
   *
   * @param {string} snippetName - Name of the snippet to toggle.
   * @return {void}
   */
  const handleToggleChange = snippetName => {
    setSnippets(prev => ({
      ...prev,
      [snippetName]: {
        ...prev[snippetName],
        'enable-snippet': !prev[snippetName]?.['enable-snippet']
      }
    }));
  };

  /**
   * Enable all snippets at once.
   *
   * @return {void}
   */
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

  /**
   * Reset all snippets (disable everything).
   *
   * @return {void}
   */
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

  /**
   * Enable snippets by preset.
   *
   * All snippets not in the preset will be disabled.
   *
   * @param {string} preset - Preset key to enable.
   * @return {void}
   */
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
    const category = snippet?.category || (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Uncategorized', 'zenpress');
    if (!groupedSnippets[category]) groupedSnippets[category] = [];
    groupedSnippets[category].push({
      name: snippetName,
      data: snippet
    });
  });

  // Sort categories alphabetically (case-insensitive)
  const sortedCategories = Object.keys(groupedSnippets).sort((a, b) => a.localeCompare(b, undefined, {
    sensitivity: 'base'
  }));
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.Fragment, {
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)("div", {
      className: "zenpress-row",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsxs)("div", {
        className: "zenpress-col",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsxs)("div", {
          className: "zenpress-presets",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsxs)("div", {
            className: "zenpress-presets-description",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)("p", {
              children: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('ZenPress is designed to preserve the vanilla WordPress experience, so you can enable all features without risk. If you don\'t know which ones to choose, just select your site\'s type and it will set the right features for you.', 'zenpress')
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)("h2", {
              children: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('You can choose you\'re website type', 'zenpress')
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_3__.Button, {
            variant: "secondary",
            onClick: () => enableByPreset('showcase-website'),
            __next40pxDefaultSize: true,
            children: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Showcase website', 'zenpress')
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_3__.Button, {
            variant: "secondary",
            onClick: () => enableByPreset('blog'),
            __next40pxDefaultSize: true,
            children: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Blog', 'zenpress')
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_3__.Button, {
            variant: "secondary",
            onClick: () => enableByPreset('ecommerce'),
            __next40pxDefaultSize: true,
            children: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('E-commerce', 'zenpress')
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)("div", {
            className: "zenpress-presets-description",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)("h2", {
              children: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Or just pick what you need', 'zenpress')
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsxs)("div", {
            className: "zenpress-actions-bulk",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_3__.Button, {
              variant: "secondary",
              onClick: enableAllSnippets,
              __next40pxDefaultSize: true,
              children: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Enable all actions', 'zenpress')
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_3__.Button, {
              isDestructive: "true",
              onClick: resetSettings,
              __next40pxDefaultSize: true,
              children: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Disable all actions', 'zenpress')
            })]
          })]
        }), sortedCategories.map(category => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_3__.Panel, {
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_3__.PanelBody, {
            title: category,
            initialOpen: false,
            children: groupedSnippets[category].map(({
              name,
              data
            }) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_3__.PanelRow, {
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(SnippetToggleControl, {
                label: data.title || name,
                value: data?.['enable-snippet'] || false,
                onChange: () => handleToggleChange(name),
                help: data.description || ''
              })
            }, name))
          })
        }, category)), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsxs)("div", {
          className: "zenpress-actions",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsxs)("div", {
            className: "zenpress-actions-bulk",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_3__.Button, {
              variant: "secondary",
              onClick: enableAllSnippets,
              __next40pxDefaultSize: true,
              children: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Enable all actions', 'zenpress')
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_wordpress_components__WEBPACK_IMPORTED_MODULE_3__.Button, {
              isDestructive: "true",
              onClick: resetSettings,
              __next40pxDefaultSize: true,
              children: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_2__.__)('Disable all actions', 'zenpress')
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(SaveButton, {
            onClick: saveSettings,
            isBusy: isSaving
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)("div", {
          className: "zenpress-notices",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(Notices, {})
        })]
      })
    })
  });
};

/**
 * Render the ZenPress settings page once the DOM is ready.
 *
 * @return {void}
 */
_wordpress_dom_ready__WEBPACK_IMPORTED_MODULE_0___default()(() => {
  const rootEl = document.getElementById('zenpress-settings');
  if (!rootEl) return; // Prevent fatal error if DOM element is missing
  const root = (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createRoot)(rootEl);
  root.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(SettingsPage, {}));
});
})();

/******/ })()
;
//# sourceMappingURL=index.js.map