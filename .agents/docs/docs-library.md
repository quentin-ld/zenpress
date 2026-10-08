# WordPress Plugin & Theme Development — Engineering Documentation Library

Last updated: 2026-10-07

> See also: `AGENTS.md` at the plugin root — project facts, lint order, i18n protection, frozen files, and note metadata. Always-applied in compatible agent systems.

**Single document:** Curated sections (tables, Agent Directives, project
pointers) live here. The fetched page text behind the **Key Resources** links
is not carried in this repository: follow the links, or fetch the page.

This file is the curated half: the sections, the resource lists, the Agent
Directives and the project pointers. It is the part a reader wants, and it is
small enough to open.

For the house rules of writing — capitalization, punctuation, formatting, the
word list, linking — use the references the `writing` skill carries in
`.agents/skills/writing/references/`: six category files plus the word list
split per letter under `references/word-list/`. Open the one you need; they are
looked up on demand rather than read whole.

This library serves as the authoritative reference for WordPress plugin and theme development, security, optimization, and accessibility. It is designed for both human developers and autonomous agents, ensuring all architectural decisions are grounded in official WordPress standards, W3C protocols, and best practices.

---

## Table of Contents

1. [WordPress Plugin Development](#wordpress-plugin-development)
2. [WordPress Theme Development](#wordpress-theme-development)
3. [Block Themes & Full Site Editing (FSE)](#block-themes--full-site-editing-fse)
4. [WordPress Hooks (Actions & Filters)](#wordpress-hooks-actions--filters)
5. [WordPress REST API](#wordpress-rest-api)
6. [HTTP API](#http-api)
7. [WordPress Database APIs](#wordpress-database-apis)
8. [WordPress Settings API](#wordpress-settings-api)
9. [Custom Post Types & Taxonomies](#custom-post-types--taxonomies)
10. [Users, Roles & Capabilities](#users-roles--capabilities)
11. [WP-Cron](#wp-cron)
12. [Internationalization & Localization (i18n / l10n)](#internationalization--localization-i18n--l10n)
13. [Privacy API](#privacy-api)
14. [JavaScript, jQuery & Ajax in WordPress](#javascript-jquery--ajax-in-wordpress)
15. [WordPress Security Best Practices](#wordpress-security-best-practices)
16. [Data Sanitization & Escaping](#data-sanitization--escaping)
17. [Nonces & Capability Checks](#nonces--capability-checks)
18. [Gutenberg Block Development](#gutenberg-block-development)
19. [WordPress React Components](#wordpress-react-components)
20. [Accessibility (WCAG 2.1+)](#accessibility-wcag-21)
21. [WordPress Accessibility Guidelines](#wordpress-accessibility-guidelines)
22. [Semantic HTML & ARIA](#semantic-html--aria)
23. [Performance Optimization](#performance-optimization)
24. [WordPress Caching](#wordpress-caching)
25. [Core Web Vitals](#core-web-vitals)
26. [WordPress Coding Standards](#wordpress-coding-standards)
27. [PHP Compatibility](#php-compatibility)
28. [WP-CLI](#wp-cli)
29. [WordPress native updates (core)](#wordpress-native-updates-core)
30. [WordPress Testing](#wordpress-testing)
31. [PHPUnit for WordPress](#phpunit-for-wordpress)
32. [Playwright / E2E Testing](#playwright--e2e-testing)
33. [Plugin Check (WordPress.org Compliance)](#plugin-check-wordpressorg-compliance)
34. [Guidelines for AI Agents](#guidelines-for-ai-agents)
35. [WordPress Documentation Standards](#wordpress-documentation-standards)
36. [Agent Documentation Guidelines](#agent-documentation-guidelines)

---

## WordPress Plugin Development

**When to consult:** At the start of any plugin project, to understand the basic structure (main file with header, directory, PHP file format) and general development best practices.

### Key Resources
- [Plugin Handbook](https://developer.wordpress.org/plugins/)
- [Plugin Basics](https://developer.wordpress.org/plugins/plugin-basics/)
- [Header Requirements](https://developer.wordpress.org/plugins/plugin-basics/header-requirements/)
- [Best Practices](https://developer.wordpress.org/plugins/plugin-basics/best-practices/)
- [Activation / Deactivation Hooks](https://developer.wordpress.org/plugins/plugin-basics/activation-deactivation-hooks/)
- [Uninstall Methods](https://developer.wordpress.org/plugins/plugin-basics/uninstall-methods/)
- [Determining Plugin and Content Directories](https://developer.wordpress.org/plugins/plugin-basics/determining-plugin-and-content-directories/)

### Implementation Patterns
| Requirement               | Implementation Pattern                                                                 | Rationale                                                                 |
|---------------------------|----------------------------------------------------------------------------------------|---------------------------------------------------------------------------|
| Security Gate             | `if ( ! defined( 'ABSPATH' ) ) { exit; }`                                              | Prevents path traversal and direct file execution.                        |
| Main File Naming          | `plugin-name/plugin-name.php`                                                          | Ensures consistency with directory-based identification.                 |
| Prefixing                 | `unique_prefix_`                                                                       | Prevents collisions in the global namespace.                             |
| Localization              | `load_plugin_textdomain()`                                                             | Facilitates i18n via standardized .mo and .po files.                     |
| Activation Hook           | `register_activation_hook()`                                                           | Run setup tasks (e.g. create tables, set default options) on activation. |
| Deactivation Hook         | `register_deactivation_hook()`                                                         | Clean up scheduled tasks, flush rewrite rules.                           |
| Uninstall                 | `uninstall.php`                                                                        | Ensures clean database state upon total removal.                          |
| Path helpers              | `plugin_dir_path()`, `plugin_dir_url()`, `plugins_url()`                              | Portable, multisite-safe path resolution.                                |

**Agent Directives:**
- Always implement a security gate at the entry of every PHP file.
- Use `uninstall.php` for data removal, not deactivation hooks.
- Prefix all functions, classes, and options to avoid naming collisions.
- Never hardcode paths; use `plugin_dir_path( __FILE__ )` and `plugin_dir_url( __FILE__ )`.

---

## WordPress Theme Development

**When to consult:** When creating or modifying WordPress themes (classic or block).

### Key Resources
- [Theme Handbook](https://developer.wordpress.org/themes/)
- [Theme Basics](https://developer.wordpress.org/themes/basics/)
- [Theme Functions](https://developer.wordpress.org/themes/basics/theme-functions/)
- [Template Hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/)
- [Template Files](https://developer.wordpress.org/themes/basics/template-files/)
- [Including CSS & JavaScript](https://developer.wordpress.org/themes/basics/including-css-javascript/)
- [Child Themes](https://developer.wordpress.org/themes/advanced-topics/child-themes/)
- [Theme Testing](https://developer.wordpress.org/themes/release/testing/)
- [Theme Directory Requirements](https://developer.wordpress.org/themes/release/required-theme-files/)

### Classic Theme Structure
| File / Pattern             | Purpose                                                              |
|----------------------------|----------------------------------------------------------------------|
| `style.css`                | Theme metadata header + base styles.                                 |
| `functions.php`            | Bootstrap: enqueues, supports, hooks, widget areas.                  |
| `index.php`                | Fallback template (required).                                        |
| `template-parts/`          | Reusable partial includes via `get_template_part()`.                 |
| `inc/`                     | PHP modules loaded from `functions.php`.                             |
| `add_theme_support()`      | Opt-in to core features (post-thumbnails, html5, title-tag, etc.).  |
| `wp_enqueue_scripts` hook  | Correct hook for enqueueing styles and scripts.                      |

**Agent Directives:**
- Always enqueue styles and scripts via `wp_enqueue_scripts` (or `admin_enqueue_scripts` for admin).
- Use `get_template_part()` for partials; never use `include`/`require` directly for template parts.
- Declare `add_theme_support( 'title-tag' )` instead of hardcoding `<title>`.
- Use `wp_localize_script()` or `wp_add_inline_script()` to pass PHP data to JS.

---

## Block Themes & Full Site Editing (FSE)

**When to consult:** When building or working with block-based themes using the Site Editor, `theme.json`, template parts, and block patterns.

### Key Resources
- [Block Theme Handbook](https://developer.wordpress.org/block-editor/how-to-guides/themes/)
- [Global Settings & Styles (theme.json)](https://developer.wordpress.org/block-editor/how-to-guides/themes/global-settings-and-styles/)
- [Theme.json Reference](https://developer.wordpress.org/block-editor/reference-guides/theme-json-reference/)
- [Block Template Files](https://developer.wordpress.org/themes/templates/)
- [Block Patterns](https://developer.wordpress.org/themes/features/block-patterns/)
- [Block Style Variations](https://developer.wordpress.org/themes/features/block-style-variations/)
- [Site Editor Architecture (Block Editor Handbook)](https://developer.wordpress.org/block-editor/explanations/architecture/full-site-editing-templates/)
- [Interactivity API](https://developer.wordpress.org/block-editor/reference-guides/interactivity-api/)

### Structure
| Concept                   | Implementation Detail                                                                  |
|---------------------------|----------------------------------------------------------------------------------------|
| `theme.json`              | Canonical config for editor settings, color palettes, font sizes, spacing, borders.   |
| `/templates/*.html`       | Block markup templates (replaces PHP templates in classic themes).                     |
| `/parts/*.html`           | Reusable template parts (header, footer, sidebar) editable in Site Editor.            |
| `/patterns/*.php`         | Registered block patterns, available in inserter.                                      |
| `appearanceTools`         | Single `theme.json` flag enabling borders, padding, margin, link color, etc.          |
| CSS Custom Properties     | Presets in `theme.json` are auto-converted to `--wp--preset--*` CSS variables.        |
| `register_block_style()`  | PHP function to add alternate style variations to any block.                           |
| Template synchronization  | Edited templates are forked to `wp_template` CPT; original file is kept as fallback.  |

**Agent Directives:**
- Prefer `theme.json` over `add_theme_support()` for all block editor configuration.
- Never hardcode colors or font sizes that belong in `theme.json` presets.
- Use `--wp--preset--color--{slug}` CSS variables to reference theme palette colors.
- Block themes automatically support: `post-thumbnails`, `editor-styles`, `responsive-embeds`, `html5`. Do not re-declare them.
- `title-tag` support is automatic in block themes — do not add it manually.
- Register patterns in `/patterns/` using the file-based API (header comment metadata) — no PHP registration required since WP 6.0.

---

## WordPress Hooks (Actions & Filters)

**When to consult:** When extending or modifying WordPress behavior via plugins or themes.

### Key Resources
- [Hooks Handbook](https://developer.wordpress.org/plugins/hooks/)
- [Actions](https://developer.wordpress.org/plugins/hooks/actions/)
- [Filters](https://developer.wordpress.org/plugins/hooks/filters/)
- [Custom Hooks](https://developer.wordpress.org/plugins/hooks/custom-hooks/)
- [Advanced Topics](https://developer.wordpress.org/plugins/hooks/advanced-topics/)

| Hook Type | Return Requirement | Primary Use Case                                      |
|-----------|--------------------|-------------------------------------------------------|
| Action    | Returns void       | Outputting scripts, sending emails, updating database.|
| Filter    | Must return value  | Altering content, adjusting arrays, modifying queries.|

**Agent Directives:**
- Differentiate between actions (event-driven, no return) and filters (data-processing, must return a value).
- Avoid side effects in filters (e.g., modifying globals or echoing output).
- Use priority settings to control execution order.
- Use `do_action_ref_array()` / `apply_filters_ref_array()` when passing arguments by reference.
- Always remove hooks with the same priority and object reference used to add them.

---

## WordPress REST API

**When to consult:** When developing headless interfaces, custom JSON routes, or JavaScript-driven data fetching.

### Key Resources
- [REST API Handbook](https://developer.wordpress.org/rest-api/)
- [Routes & Endpoints](https://developer.wordpress.org/rest-api/using-the-rest-api/routes-and-endpoints/)
- [Requests](https://developer.wordpress.org/plugins/rest-api/requests/)
- [Responses](https://developer.wordpress.org/plugins/rest-api/responses-2/)
- [Schema](https://developer.wordpress.org/plugins/rest-api/schema/)
- [Authentication](https://developer.wordpress.org/rest-api/using-the-rest-api/authentication/)
- [Extending the REST API](https://developer.wordpress.org/rest-api/extending-the-rest-api/)
- [Adding Custom Endpoints](https://developer.wordpress.org/rest-api/extending-the-rest-api/adding-custom-endpoints/)

| HTTP Method | API Action         | Controller Method Mapping         |
|-------------|--------------------|-----------------------------------|
| GET         | Retrieve resource  | `get_items()` or `get_item()`     |
| POST        | Create resource    | `create_item()`                   |
| PUT/PATCH   | Update resource    | `update_item()`                   |
| DELETE      | Remove resource    | `delete_item()`                   |

**Agent Directives:**
- Use namespaces (e.g., `myplugin/v1`) to prevent route collisions.
- Always implement a `permission_callback` for every custom route.
- Define detailed JSON schemas for endpoint arguments and responses.
- Extend `WP_REST_Controller` for consistent controller structure.
- Register routes on `rest_api_init`, not `init`.

---

## HTTP API

**When to consult:** When making outbound HTTP requests to external APIs or services.

### Key Resources
- [HTTP API (Plugin Handbook)](https://developer.wordpress.org/plugins/http-api/)
- [WP_HTTP Class Reference](https://developer.wordpress.org/reference/classes/wp_http/)
- [`wp_remote_get()`](https://developer.wordpress.org/reference/functions/wp_remote_get/)
- [`wp_remote_post()`](https://developer.wordpress.org/reference/functions/wp_remote_post/)
- [`wp_remote_request()`](https://developer.wordpress.org/reference/functions/wp_remote_request/)

| Function               | HTTP Method | Primary Use Case                                  |
|------------------------|-------------|---------------------------------------------------|
| `wp_remote_get()`      | GET         | Fetch data from an external API.                  |
| `wp_remote_post()`     | POST        | Send data (form data, JSON body) to an endpoint.  |
| `wp_remote_head()`     | HEAD        | Check headers/freshness without downloading body. |
| `wp_remote_request()`  | Any         | Full control over method, headers, body, timeout. |
| `wp_safe_remote_get()` | GET         | Same as `wp_remote_get()` but blocks local IPs.   |

**Agent Directives:**
- Always check for `WP_Error` after each HTTP call: `is_wp_error( $response )`.
- Use `wp_remote_retrieve_response_code()` to validate the HTTP status before parsing the body.
- Use `wp_remote_retrieve_body()` to extract the response body.
- Cache responses with the Transients API to avoid hammering external services.
- Use `wp_safe_remote_get()` for user-supplied URLs to prevent SSRF attacks.
- Set a reasonable `timeout` argument (default is 5s; increase for slow APIs).

---

## WordPress Database APIs

**When to consult:** For managing data stored in WordPress (options, metadata, transients, raw SQL access).

### Key Resources
- [`$wpdb` Class Reference](https://developer.wordpress.org/reference/classes/wpdb/)
- [Options API](https://developer.wordpress.org/plugins/settings/options-api/)
- [Transients API](https://developer.wordpress.org/apis/transients/)
- [Metadata API](https://developer.wordpress.org/plugins/metadata/)
- [Managing Post Metadata](https://developer.wordpress.org/plugins/metadata/managing-post-metadata/)

| Storage Type  | Ideal For                          | Native API                           |
|---------------|------------------------------------|--------------------------------------|
| Options       | Static configuration settings      | `get_option()`, `update_option()`    |
| Metadata      | Properties linked to posts/users   | `add_post_meta()`, `get_user_meta()` |
| Transients    | Temporary/cached data              | `set_transient()`, `get_transient()` |
| Custom Tables | Large, unique datasets             | `$wpdb->insert()`, `$wpdb->query()`  |

**Agent Directives:**
- Use `$wpdb->prepare()` for all dynamic queries to prevent SQL injection.
- Audit autoloaded options: keep total autoloaded size under 800 KB.
- Use `$wpdb->get_results()`, `$wpdb->get_row()`, `$wpdb->get_var()` instead of raw `query()` for SELECT statements.
- Always use the table name constants (`$wpdb->posts`, `$wpdb->postmeta`, etc.) rather than hardcoded table names.
- When creating custom tables, use `dbDelta()` (from `wp-admin/includes/upgrade.php`) to handle schema changes safely.

---

## WordPress Settings API

**When to consult:** When adding admin setting pages with fields registered and sanitized through the core API.

### Key Resources
- [Settings API](https://developer.wordpress.org/plugins/settings/settings-api/)
- [Using the Settings API](https://developer.wordpress.org/plugins/settings/using-settings-api/)
- [Custom Settings Page](https://developer.wordpress.org/plugins/settings/custom-settings-page/)
- [Options API](https://developer.wordpress.org/plugins/settings/options-api/)

| Component         | Function                  | Hook               |
|-------------------|---------------------------|--------------------|
| Page Registration | `add_options_page()`      | `admin_menu`       |
| Settings Group    | `register_setting()`      | `admin_init`       |
| Section           | `add_settings_section()`  | `admin_init`       |
| Field             | `add_settings_field()`    | `admin_init`       |
| Form Rendering    | `settings_fields()` + `do_settings_sections()` | Callback |

**Agent Directives:**
- Register settings during `admin_init`, not `admin_menu`.
- Always provide a `sanitize_callback` in `register_setting()`.
- Use `options-general.php` as parent for settings pages unless a custom admin menu is needed.

---

## Custom Post Types & Taxonomies

**When to consult:** When registering CPTs or custom taxonomies for domain-specific content models.

### Key Resources
- [Custom Post Types](https://developer.wordpress.org/plugins/post-types/)
- [Registering Custom Post Types](https://developer.wordpress.org/plugins/post-types/registering-custom-post-types/)
- [Working with Custom Post Types](https://developer.wordpress.org/plugins/post-types/working-with-custom-post-types/)
- [Taxonomies](https://developer.wordpress.org/plugins/taxonomies/)
- [Working with Custom Taxonomies](https://developer.wordpress.org/plugins/taxonomies/working-with-custom-taxonomies/)

| Concept                  | Function / Hook                                    | Notes                                              |
|--------------------------|----------------------------------------------------|----------------------------------------------------|
| Register CPT             | `register_post_type()` on `init`                  | Use early priority (< 10) to ensure availability. |
| Register taxonomy        | `register_taxonomy()` on `init`                   | Link to CPT via `object_type` argument.            |
| Flush rewrite rules      | `flush_rewrite_rules()` on activation only        | Never call on every request — severe performance hit. |
| Custom meta boxes        | `add_meta_box()` on `add_meta_boxes`              | Prefer block editor's `registerPlugin` for FSE.   |
| REST API support         | `'show_in_rest' => true`                          | Required for block editor compatibility.           |

**Agent Directives:**
- Always set `'show_in_rest' => true` for CPTs that need block editor support.
- Call `flush_rewrite_rules()` only on plugin activation/deactivation hooks, never on `init`.
- Use `post_type_supports()` to add features (title, editor, thumbnail, etc.) after registration.
- Prefer capability types tied to the CPT (`'capability_type' => 'my_post_type'`) for granular permissions.

---

## Users, Roles & Capabilities

**When to consult:** When handling user authentication, authorization, role-based access, or user metadata.

### Key Resources
- [Users](https://developer.wordpress.org/plugins/users/)
- [Roles and Capabilities](https://developer.wordpress.org/plugins/users/roles-and-capabilities/)
- [Working with Users](https://developer.wordpress.org/plugins/users/working-with-users/)
- [Working with User Metadata](https://developer.wordpress.org/plugins/users/working-with-user-metadata/)
- [`WP_User` Class Reference](https://developer.wordpress.org/reference/classes/wp_user/)

| Task                         | Function / Method                            |
|------------------------------|----------------------------------------------|
| Get current user             | `wp_get_current_user()`, `get_current_user_id()` |
| Check capability             | `current_user_can( 'capability' )`           |
| Add custom capability        | `$role->add_cap( 'my_cap' )` on activation   |
| Add custom role              | `add_role()` on activation                   |
| Remove role on uninstall     | `remove_role()` in `uninstall.php`           |
| User meta                    | `get_user_meta()`, `update_user_meta()`      |

**Agent Directives:**
- Always check capabilities, not roles (`current_user_can( 'edit_posts' )` not `is_admin()`).
- Add custom capabilities in the activation hook; remove them in `uninstall.php`.
- Never store sensitive user data in plain text in user meta.

---

## WP-Cron

**When to consult:** When scheduling recurring or deferred tasks in WordPress.

### Key Resources
- [WP-Cron (Plugin Handbook)](https://developer.wordpress.org/plugins/cron/)
- [Scheduling WP Cron Events](https://developer.wordpress.org/plugins/cron/scheduling-wp-cron-events/)
- [Hooking WP-Cron Into the System Task Scheduler](https://developer.wordpress.org/plugins/cron/hooking-wp-cron-into-the-system-task-scheduler/)
- [Simple Testing for WP-Cron](https://developer.wordpress.org/plugins/cron/simple-testing/)
- [WP-CLI `cron` commands](https://developer.wordpress.org/cli/commands/cron/)

| Function                         | Purpose                                              |
|----------------------------------|------------------------------------------------------|
| `wp_schedule_event()`            | Schedule a recurring event.                          |
| `wp_schedule_single_event()`     | Schedule a one-time event.                           |
| `wp_unschedule_event()`          | Remove a specific scheduled event.                   |
| `wp_clear_scheduled_hook()`      | Remove all events for a given hook.                  |
| `wp_next_scheduled()`            | Check if an event is already scheduled.              |
| `wp_get_schedule()`              | Retrieve the recurrence of a scheduled event.        |

**Agent Directives:**
- Always check `wp_next_scheduled()` before scheduling to avoid duplicate events.
- Clear scheduled hooks in the plugin deactivation hook via `wp_clear_scheduled_hook()`.
- WP-Cron only runs on page load — for high-precision timing, hook it into the system cron via `wp-cron.php` with `DISABLE_WP_CRON`.
- Use WP-CLI (`wp cron event run`, `wp cron event list`) to test and debug cron events.

---

## Internationalization & Localization (i18n / l10n)

**When to consult:** When making plugin or theme strings translatable.

### Key Resources
- [Internationalization (Plugin Handbook)](https://developer.wordpress.org/plugins/internationalization/)
- [How to Internationalize Your Plugin](https://developer.wordpress.org/plugins/internationalization/how-to-internationalize-your-plugin/)
- [Localization (Plugin Handbook)](https://developer.wordpress.org/plugins/internationalization/localization/)
- [Security in Translatable Strings](https://developer.wordpress.org/plugins/security/securing-output/#i18n-functions-are-not-escape-functions)
- [Polyglots: Plugin/Theme Authors Guide](https://make.wordpress.org/polyglots/handbook/plugin-theme-authors-guide/)
- [JavaScript i18n (`@wordpress/i18n`)](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/)
- [`wp i18n make-pot` (WP-CLI)](https://developer.wordpress.org/cli/commands/i18n/make-pot/)

| Function                       | Use Case                                            |
|--------------------------------|-----------------------------------------------------|
| `__( 'string', 'textdomain' )` | Simple string translation.                          |
| `_e( 'string', 'textdomain' )` | Translate and echo.                                 |
| `_n()`                         | Singular/plural form.                               |
| `_x()`                         | Translation with context.                           |
| `esc_html__()`                 | Translate + escape for HTML output (preferred).     |
| `esc_attr__()`                 | Translate + escape for attribute output.            |
| `wp_set_script_translations()` | Load JS translations for a registered script.       |
| `load_plugin_textdomain()`     | Load the plugin's `.mo` file.                       |

**Agent Directives:**
- Never use variable strings or concatenated strings inside i18n functions — they break static analysis.
- i18n functions are **not** escape functions. Always escape output separately, or use `esc_html__()` / `esc_attr__()`.
- For JavaScript strings, use `@wordpress/i18n` (`__`, `_n`, `_x` from the package) and call `wp_set_script_translations()` with the correct text domain and path.
- Generate `.pot` files with `wp i18n make-pot` (WP-CLI) — do not use Poedit or PoEdit manually for generation.
- Load the text domain on the `init` hook (or `after_setup_theme` for themes), not `plugins_loaded` for most modern setups.

---

## Privacy API

**When to consult:** When handling personal data, GDPR compliance, data export/erasure flows.

### Key Resources
- [Privacy (Plugin Handbook)](https://developer.wordpress.org/plugins/privacy/)
- [Adding a Personal Data Exporter](https://developer.wordpress.org/plugins/privacy/adding-the-personal-data-exporter-to-your-plugin/)
- [Adding a Personal Data Eraser](https://developer.wordpress.org/plugins/privacy/adding-the-personal-data-eraser-to-your-plugin/)
- [Privacy-Related Options, Hooks and Capabilities](https://developer.wordpress.org/plugins/privacy/privacy-related-options-hooks-and-capabilities/)
- [Suggesting Privacy Policy Text](https://developer.wordpress.org/plugins/privacy/suggesting-text-for-the-site-privacy-policy/)

| Hook / Function                        | Purpose                                               |
|----------------------------------------|-------------------------------------------------------|
| `wp_privacy_personal_data_exporters`   | Filter to register a data exporter callback.          |
| `wp_privacy_personal_data_erasers`     | Filter to register a data eraser callback.            |
| `wp_add_privacy_policy_content()`      | Suggest text for the site's privacy policy page.      |
| `wp_get_user_request_data()`           | Retrieve a confirmed data request.                    |

**Agent Directives:**
- Register exporters and erasers on `wp_privacy_personal_data_exporters` / `wp_privacy_personal_data_erasers` filters.
- Provide suggested privacy policy text via `wp_add_privacy_policy_content()` when the plugin collects personal data.
- Erasers must be idempotent and return `['items_removed' => bool, 'items_retained' => bool, 'messages' => [], 'done' => bool]`.

---

## JavaScript, jQuery & Ajax in WordPress

**When to consult:** When adding front-end or admin JavaScript, making Ajax calls, or using jQuery.

### Key Resources
- [JavaScript, jQuery & Ajax (Plugin Handbook)](https://developer.wordpress.org/plugins/javascript/)
- [Ajax (Plugin Handbook)](https://developer.wordpress.org/plugins/javascript/ajax/)
- [Enqueuing Scripts](https://developer.wordpress.org/themes/basics/including-css-javascript/)
- [`wp_enqueue_script()`](https://developer.wordpress.org/reference/functions/wp_enqueue_script/)
- [`wp_localize_script()`](https://developer.wordpress.org/reference/functions/wp_localize_script/)
- [`wp_add_inline_script()`](https://developer.wordpress.org/reference/functions/wp_add_inline_script/)
- [Heartbeat API](https://developer.wordpress.org/plugins/javascript/heartbeat-api/)

| Pattern                       | Implementation                                               |
|-------------------------------|--------------------------------------------------------------|
| Enqueue with dependency       | `wp_enqueue_script( $handle, $src, ['jquery'], $ver, true )` |
| Pass PHP data to JS           | `wp_localize_script()` or `wp_add_inline_script()`           |
| Admin Ajax (legacy)           | Hook on `wp_ajax_{action}` / `wp_ajax_nopriv_{action}`       |
| Admin Ajax URL                | `admin_url( 'admin-ajax.php' )` (passed via `wp_localize_script`) |
| REST-based Ajax (modern)      | Use `wp_remote_request` client-side via REST API endpoints    |
| Nonce in Ajax                 | Generate with `wp_create_nonce()`, verify with `check_ajax_referer()` |

**Agent Directives:**
- Prefer REST API endpoints over `admin-ajax.php` for new JavaScript integrations — better performance and standardized auth.
- Always pass the nonce via `wp_localize_script()` and verify server-side with `check_ajax_referer()`.
- Enqueue scripts with `true` as the 5th argument to load in footer.
- Use `wp_add_inline_script()` instead of `wp_localize_script()` when passing complex structured data.

---

## WordPress Security Best Practices

**When to consult:** For code security reviews, audits, or threat modeling.

### Key Resources
- [Security (Plugin Handbook)](https://developer.wordpress.org/plugins/security/)
- [Data Validation](https://developer.wordpress.org/plugins/security/data-validation/)
- [Checking User Capabilities](https://developer.wordpress.org/plugins/security/checking-user-capabilities/)
- [Nonces](https://developer.wordpress.org/plugins/security/nonces/)
- [Securing Output (Escaping)](https://developer.wordpress.org/plugins/security/securing-output/)
- [Securing Input (Sanitizing)](https://developer.wordpress.org/plugins/security/securing-input/)

| Threat Category         | Mitigation Strategy                               |
|-------------------------|---------------------------------------------------|
| XSS                     | Late escaping (`esc_html`, `esc_attr`, `wp_kses`) |
| SQL Injection           | `$wpdb->prepare()`                                |
| CSRF                    | Nonces (`wp_verify_nonce`, `check_admin_referer`) |
| Privilege Escalation    | `current_user_can()` before every sensitive action|
| SSRF                    | `wp_safe_remote_get()` for user-supplied URLs     |
| Path Traversal          | `ABSPATH` guard + `realpath()` validation          |
| Open Redirect           | `wp_safe_redirect()` instead of `wp_redirect()`  |

**Agent Directives:**
- Assume all input is malicious — validate, sanitize, and escape unconditionally.
- Use `current_user_can()` before processing any privileged action.
- Use `wp_safe_redirect()` to prevent open redirect vulnerabilities.
- Never trust `$_SERVER['HTTP_REFERER']` for security checks — use nonces.

---

## Data Sanitization & Escaping

**When to consult:** Before processing user input or rendering any output.

### Key Resources
- [Securing Input (Sanitizing)](https://developer.wordpress.org/plugins/security/securing-input/)
- [Securing Output (Escaping)](https://developer.wordpress.org/plugins/security/securing-output/)
- [Data Validation](https://developer.wordpress.org/plugins/security/data-validation/)

| Context          | Sanitization (Input)          | Escaping (Output)          |
|------------------|-------------------------------|----------------------------|
| Plain Text       | `sanitize_text_field()`       | `esc_html()`               |
| HTML Attribute   | `sanitize_text_field()`       | `esc_attr()`               |
| URLs             | `esc_url_raw()`               | `esc_url()`                |
| Email            | `sanitize_email()`            | `antispambot()`            |
| Integer          | `intval()` / `absint()`       | `intval()`                 |
| HTML Content     | `wp_kses_post()` / `wp_kses()`| `wp_kses_post()`           |
| Textarea         | `sanitize_textarea_field()`   | `esc_textarea()`           |
| File name        | `sanitize_file_name()`        | `esc_attr()`               |
| SQL              | `$wpdb->prepare()`            | N/A                        |
| JS output        | N/A                           | `esc_js()`                 |
| Translated text  | N/A                           | `esc_html__()`, `esc_attr__()` |

**Agent Directives:**
- Practice "late escaping" — escape as close to the point of output as possible.
- Use the most restrictive function for the context.
- `wp_kses_post()` allows the subset of HTML permitted in post content; prefer over `wp_kses()` with manual allowed tags.

---

## Nonces & Capability Checks

**When to consult:** When securing forms, Ajax handlers, or any state-changing action.

### Key Resources
- [Nonces](https://developer.wordpress.org/plugins/security/nonces/)
- [Checking User Capabilities](https://developer.wordpress.org/plugins/security/checking-user-capabilities/)

| Function                           | Context                                  |
|------------------------------------|------------------------------------------|
| `wp_create_nonce( 'action' )`      | Generate nonce value for forms/Ajax.     |
| `wp_nonce_field( 'action' )`       | Output hidden nonce field in a form.     |
| `wp_verify_nonce( $nonce, 'action' )` | Verify nonce (returns 1 or 2, not bool). |
| `check_admin_referer( 'action' )`  | Verify nonce + referer; die on failure.  |
| `check_ajax_referer( 'action' )`   | Verify nonce in Ajax handlers; die on failure. |
| `current_user_can( 'cap' )`        | Check capability before any action.      |

**Agent Directives:**
- Nonces expire (default 24h, split into 12h windows) — do not cache pages containing nonce values.
- Check capabilities **before** verifying the nonce to avoid leaking information about nonce validity.
- Check capabilities, not roles: `current_user_can( 'manage_options' )` not `is_admin()`.

---

## Gutenberg Block Development

**When to consult:** When creating custom blocks for the block editor.

### Key Resources
- [Block Editor Handbook](https://developer.wordpress.org/block-editor/)
- [Block API Reference](https://developer.wordpress.org/block-editor/reference-guides/block-api/)
- [block.json Reference](https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/)
- [Block Supports](https://developer.wordpress.org/block-editor/reference-guides/block-api/block-supports/)
- [Block Patterns](https://developer.wordpress.org/block-editor/reference-guides/block-api/block-patterns/)
- [Block Variations](https://developer.wordpress.org/block-editor/reference-guides/block-api/block-variations/)
- [Block Transforms](https://developer.wordpress.org/block-editor/reference-guides/block-api/block-transforms/)
- [`@wordpress/create-block`](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-create-block/)
- [`@wordpress/scripts`](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/)

| Block Feature      | Implementation Detail                                                 |
|--------------------|-----------------------------------------------------------------------|
| `block.json`       | Canonical metadata: name, title, category, attributes, supports.      |
| Attributes         | Define in `block.json`; map to saved markup via `source` + `selector`.|
| Edit component     | React component for editor interface; uses `useBlockProps()`.         |
| Save function      | Produces static HTML stored in `post_content`; must be deterministic. |
| Dynamic blocks     | `render_callback` in PHP; save returns `null`; no static HTML stored. |
| Block supports     | Opt-in editor features (`color`, `typography`, `spacing`, `align`).  |
| `useBlockProps()`  | Required hook; merges core block attributes (class, id, etc.).        |

**Agent Directives:**
- Always use `block.json` as the single source of truth for block metadata.
- Use `@wordpress/create-block` to scaffold new blocks.
- Use dynamic blocks (PHP `render_callback`) for any content that must be fresh on render.
- Validate static `save` output rigorously — serialization errors break existing content.
- Register block assets via `block.json` `editorScript`, `script`, `style`, `editorStyle` fields.

---

## WordPress React Components

**When to consult:** When building admin interfaces or block controls in JS/React.

### Key Resources
- [Components Reference (`@wordpress/components`)](https://developer.wordpress.org/block-editor/reference-guides/components/)
- [Data Module (`@wordpress/data`)](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-data/)
- [Block Editor Data Stores](https://developer.wordpress.org/block-editor/reference-guides/data/)

| Component Category | Key Components                             | Use Case                              |
|--------------------|---------------------------------------------|---------------------------------------|
| Basic Inputs       | `TextControl`, `SelectControl`, `CheckboxControl` | Settings and form fields.        |
| Pickers            | `ColorPicker`, `FontSizePicker`, `GradientPicker` | Design controls.                 |
| Layout             | `Flex`, `Grid`, `HStack`, `VStack`          | Structuring sidebar panels.           |
| Feedback           | `Notice`, `Spinner`, `Tooltip`              | Status messages and loading states.   |
| Navigation         | `TabPanel`, `NavigableMenu`, `Dropdown`     | Multi-section UIs.                    |
| Panels             | `Panel`, `PanelBody`, `PanelRow`            | Collapsible settings sections.        |

**Agent Directives:**
- Use `@wordpress/components` for UI consistency with the block editor.
- Access block editor data via `@wordpress/data` stores (`core`, `core/editor`, `core/blocks`).
- Use `useSelect()` and `useDispatch()` hooks for reactive store access.
- Check for missing contexts (e.g., `SlotFillProvider`) if components fail to render.

---

## Accessibility (WCAG 2.1+)

**When to consult:** To ensure compliance with international accessibility standards.

### Key Resources
- [WCAG 2.1 (W3C)](https://www.w3.org/TR/WCAG21/)
- [WCAG 2.2 (W3C)](https://www.w3.org/TR/WCAG22/)
- [WCAG Quick Reference](https://www.w3.org/WAI/WCAG21/quickref/)
- [Understanding WCAG 2.1](https://www.w3.org/WAI/WCAG21/Understanding/)

| WCAG Principle | Technical Requirement                        | Agent Action                           |
|----------------|----------------------------------------------|----------------------------------------|
| Perceivable    | Alt text for images; contrast ratios ≥ 4.5:1.| Use descriptive alt text on all images.|
| Operable       | Full keyboard navigation; visible focus.     | Ensure tab order; test without mouse.  |
| Understandable | Clear instructions; descriptive error messages.| Use explicit form labels; inline errors.|
| Robust         | Compatible with assistive technologies.      | Use semantic HTML; test with NVDA/VoiceOver.|

**Agent Directives:**
- Target Level AA conformance minimum.
- Check color contrast with tools like the WebAIM Contrast Checker.
- Ensure all interactive elements have a visible focus indicator.
- Note: WCAG 2.2 added SC 2.4.11 (Focus Appearance) and SC 2.5.8 (Target Size Minimum 24×24px).

---

## WordPress Accessibility Guidelines

**When to consult:** For WordPress-specific accessibility requirements in admin UIs and front-end output.

### Key Resources
- [WordPress Accessibility](https://developer.wordpress.org/accessibility/)
- [WordPress Accessibility Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/accessibility/)
- [Accessibility in the Block Editor](https://developer.wordpress.org/block-editor/how-to-guides/accessibility/)
- [Make WordPress Accessible](https://make.wordpress.org/accessibility/)

| Requirement         | Implementation Standard                       |
|---------------------|-----------------------------------------------|
| Contrast Ratio      | Minimum 4.5:1 for standard text.              |
| Links               | Underlined if within content blocks.          |
| Focus Indicators    | Visible for all keyboard-accessible elements. |
| Form Labels         | Use `<label>` tags; avoid placeholder-only.   |
| Skip Links          | Required for admin pages and rich frontends.  |
| Modals & Dialogs    | Trap focus inside; restore on close.          |
| Error messages      | Programmatically associated with form fields. |

**Agent Directives:**
- Add "Skip to main content" skip link on all front-end templates.
- Differentiate decorative images (`alt=""`) from informative images.
- Use `aria-live` regions for dynamic content updates.
- In WP admin, follow the established `screen-reader-text` CSS class convention for visually hidden content.

---

## Semantic HTML & ARIA

**When to consult:** For coding accessible, semantic markup.

### Key Resources
- [ARIA Authoring Practices Guide (APG)](https://www.w3.org/WAI/ARIA/apg/)
- [ARIA in HTML](https://www.w3.org/TR/html-aria/)
- [Using ARIA (W3C)](https://www.w3.org/TR/using-aria/)

| Rule                                    | Detail                                                                 |
|-----------------------------------------|------------------------------------------------------------------------|
| First rule of ARIA                      | Do not use ARIA if native HTML semantics suffice.                      |
| Interactive elements                    | Only `role`s that are inherently interactive need keyboard support.    |
| Required owned elements                 | Some roles require specific child roles (e.g., `listbox` → `option`). |
| `aria-label` vs `aria-labelledby`       | Prefer `aria-labelledby` if a visible label exists.                    |
| Live regions                            | Use `aria-live="polite"` for non-urgent updates; `"assertive"` sparingly.|

**Agent Directives:**
- Prefer native HTML elements over ARIA roles (e.g., `<button>` not `<div role="button">`).
- Ensure keyboard usability for all interactive ARIA controls (Enter, Space, arrow keys per APG pattern).
- Do not use `aria-hidden="true"` on focusable elements.

---

## Performance Optimization

**When to consult:** To improve site speed, TTFB, and resource efficiency.

### Key Resources
- [Performance Handbook](https://developer.wordpress.org/advanced-administration/performance/)
- [Performance Lab Plugin (official)](https://wordpress.org/plugins/performance-lab/)
- [Query Monitor (debugging)](https://wordpress.org/plugins/query-monitor/)

| Optimization Layer  | Strategy                              | Rationale                             |
|---------------------|---------------------------------------|---------------------------------------|
| PHP                 | Use PHP 8.2+ and OPcache.             | Faster execution, reduced memory.     |
| Database            | Optimize queries; clean transients.   | Prevents bloat and slow queries.      |
| Frontend            | Minify CSS/JS; lazy-load images.      | Reduces TTFB and LCP.                 |
| Script loading      | `async`/`defer` wherever possible.   | Non-blocking page render.             |
| Image optimization  | `loading="lazy"`, WebP, correct sizes.| Reduces bandwidth and CLS.            |

**Agent Directives:**
- Prioritize page caching for public-facing pages.
- Use object caching (Redis/Memcached) for high-traffic sites.
- Audit N+1 query patterns with Query Monitor.
- Use `wp_is_mobile()` cautiously — it relies on user-agent sniffing; prefer CSS or client hints.

---

## WordPress Caching

**When to consult:** For temporary data storage to reduce database load.

### Key Resources
- [Transients API](https://developer.wordpress.org/apis/transients/)
- [Object Cache API](https://developer.wordpress.org/reference/classes/wp_object_cache/)
- [Persistent Object Caching](https://developer.wordpress.org/advanced-administration/performance/cache/)

| Cache Type       | API                                          | TTL Support | Persistent |
|------------------|----------------------------------------------|-------------|------------|
| Transients       | `set_transient()`, `get_transient()`         | Yes         | Yes (with object cache)|
| Object Cache     | `wp_cache_set()`, `wp_cache_get()`           | Yes         | Only with drop-in      |
| Site Transients  | `set_site_transient()` (multisite-aware)     | Yes         | Yes                    |

**Agent Directives:**
- Use transients for data with a natural expiration (API responses, computed aggregates).
- Use the object cache (`wp_cache_*`) for within-request caching of expensive computations.
- When a persistent object cache drop-in is present, transients use it automatically — avoid duplicate caching strategies.
- Always delete transients on relevant data changes; do not wait for expiration.

---

## Core Web Vitals

**When to consult:** To optimize user experience metrics for Google Search ranking and UX.

### Key Resources
- [Core Web Vitals (Google)](https://web.dev/vitals/)
- [INP (Interaction to Next Paint)](https://web.dev/inp/)
- [CLS (Cumulative Layout Shift)](https://web.dev/cls/)
- [LCP (Largest Contentful Paint)](https://web.dev/lcp/)

| Metric | Target   | Optimization Strategy                           |
|--------|----------|-------------------------------------------------|
| LCP    | < 2.5s   | Preload hero image; critical inline CSS; CDN.   |
| INP    | < 200ms  | Defer non-essential JS; avoid long tasks.       |
| CLS    | < 0.1    | Set explicit `width`/`height` on images/embeds. |

**Agent Directives:**
- Note: INP replaced FID as a Core Web Vital in March 2024.
- Prioritize above-the-fold assets; defer everything else.
- Use `fetchpriority="high"` on LCP image element.
- Avoid inserting DOM elements above existing content after initial render (CLS).

---

## WordPress Coding Standards

**When to consult:** For consistent, maintainable, WordPress.org-compliant code.

### Key Resources
- [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/)
- [PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/)
- [JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/)
- [CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/)
- [HTML Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/html/)
- [Inline Documentation Standards](https://developer.wordpress.org/coding-standards/inline-documentation-standards/)
- [WPCS (WordPress Coding Standards for PHPCS)](https://github.com/WordPress/WordPress-Coding-Standards)

| Standard Category | Rule                                                  |
|-------------------|-------------------------------------------------------|
| Naming (PHP)      | `snake_case` for functions; `PascalCase` for classes. |
| PHP Tags          | Always use `<?php ?>` — never shorthand `<?= ?>`.     |
| Indentation       | Tabs, not spaces.                                     |
| Spaces            | Around operators, after commas, inside array brackets.|
| Yoda conditions   | `if ( true === $var )` — value on left.               |
| Brace style       | Opening brace on same line (K&R variant).             |

**Agent Directives:**
- Use PHP_CodeSniffer with the `WordPress` ruleset (`composer require --dev wp-coding-standards/wpcs`).
- Run PHPCS in CI to catch violations before merge.
- Use `@wordpress/eslint-plugin` for JavaScript linting.

---

## PHP Compatibility

**When to consult:** To ensure compatibility with the WordPress minimum PHP requirement and supported versions.

### Key Resources
- [PHP Migration Guides (php.net)](https://www.php.net/manual/en/migration84.php)
- [PHP Compatibility Check (PHPCS sniff)](https://github.com/PHPCompatibility/PHPCompatibility)
- [WordPress PHP Requirements](https://wordpress.org/about/requirements/)

| PHP Version | Support Status     | Notable Features                             |
|-------------|--------------------|----------------------------------------------|
| 7.4         | EOL (Nov 2022)     | Arrow functions, typed properties.           |
| 8.0         | EOL (Nov 2023)     | Match expression, named arguments, nullsafe. |
| 8.1         | Security Only      | Enumerations, Fibers, readonly properties.   |
| 8.2         | Active Support     | Readonly classes, `true` type.               |
| 8.3         | Active Support     | Typed class constants, `json_validate()`.    |
| 8.4         | Active Support     | Property hooks, asymmetric visibility.       |

**Agent Directives:**
- WordPress requires PHP 7.2.24+ (minimum); target 8.1+ for new projects.
- Run `PHPCompatibility` sniff alongside WPCS to catch version-specific issues.
- Avoid deprecated functions — check PHP changelogs for each minor version.

---

## WP-CLI

**When to consult:** For automating WordPress tasks in terminal, CI/CD, or dev tooling.

### Key Resources
- [WP-CLI Commands Reference](https://developer.wordpress.org/cli/commands/)
- [WP-CLI Handbook](https://make.wordpress.org/cli/handbook/)
- [Creating WP-CLI Commands](https://make.wordpress.org/cli/handbook/guides/commands-cookbook/)
- [`wp plugin` commands](https://developer.wordpress.org/cli/commands/plugin/)
- [`wp i18n` commands](https://developer.wordpress.org/cli/commands/i18n/)
- [`wp cron` commands](https://developer.wordpress.org/cli/commands/cron/)
- [`wp scaffold` commands](https://developer.wordpress.org/cli/commands/scaffold/)

| Command Category        | Key Commands                                                   |
|-------------------------|----------------------------------------------------------------|
| Plugin management       | `wp plugin install`, `wp plugin activate`, `wp plugin update`  |
| Database                | `wp db export`, `wp db import`, `wp search-replace`            |
| Users                   | `wp user create`, `wp user list`, `wp user update`             |
| i18n                    | `wp i18n make-pot`, `wp i18n make-json`, `wp i18n update-po`   |
| Cron                    | `wp cron event list`, `wp cron event run`, `wp cron schedule list` |
| Scaffolding             | `wp scaffold plugin`, `wp scaffold block`, `wp scaffold theme` |
| Evaluation              | `wp eval`, `wp eval-file`                                      |
| Plugin Check            | `wp plugin check {slug}` (requires Plugin Check plugin)        |

**Agent Directives:**
- Use `wp search-replace` with `--dry-run` first when replacing URLs in the database.
- Use `wp scaffold plugin` to bootstrap new plugins with the correct structure and readme.
- Use `wp i18n make-pot` as the canonical POT generation method (integrates with block scripts).
- Pass `--allow-root` only when running in Docker/CI containers — never in production as root.

---

## WordPress native updates (core)

**When to consult:** When designing plugin behavior around core, plugin, theme, or translation updates — including automatic background updates, admin UI flows, WP-CLI parity, Filesystem API credentials, or comparison with third-party “update manager” plugins.

### Canonical project reference

> **Frozen file.** `.agents/docs/wordpress-native-updates-reference.md` is **read-only for all agents**. Do not modify, rewrite, append to, or restructure this file under any circumstances. Only the project owner may authorize changes.

- **`.agents/docs/wordpress-native-updates-reference.md`** — **WordPress core only:** discovery (§1.1–§1.10) vs application (§2.1–§2.13), **upgrader skins** (§2.5), **`wp-config.php` constants** (§5.10), **rollback** (§2.7), **locks** (§2.8), **Site Health** (§4.3), **`WP_Plugin_Dependencies`** (§2.6), entry points (§5.1–§5.13), **in-admin notices** vs **`wp_mail`** (§4.1–§4.6), **`automatic_updates_complete`** / results payload (**§4.7**), branch policy (`Core_Upgrader::should_update_to_version()` method and `auto_update_core` filter in **§1.3**, **§3.7**), full hook and filter reference (§6.1–§6.8), key core file paths and class reference (§7.1–§7.2).
- **ZenPress plugin:** how this codebase consumes core (hooks, logger, REST, settings) lives in **`inc/`** and **`zenpress.php`** — there is no separate integration markdown; trace behaviour from source and the frozen reference above.

### Key Resources (official)

- [Filesystem API](https://developer.wordpress.org/apis/filesystem/)
- [HTTP API](https://developer.wordpress.org/plugins/http-api/) (update checks use `wp_remote_post` / `wp_remote_get`)
- [WP-CLI commands](https://developer.wordpress.org/cli/commands/) (`wp core update`, `wp plugin update`, `wp theme update`, `wp cron`)
- [Plugin Handbook — Cron](https://developer.wordpress.org/plugins/cron/) (relationship between `wp-cron.php` and scheduled update checks)

**Agent Directives:**

- Treat `wp_update_plugins()` / `wp_update_themes()` / `wp_version_check()` as **discovery only**; applying updates always goes through `WP_Upgrader` subclasses or `WP_Automatic_Updater`.
- Extension points for “policy” (disable auto-updates, defer visibility) are primarily **filters** on `automatic_updater_disabled`, `auto_update_*`, and **site transient** hooks — see the project reference doc for file-level pointers.
- Bulk updates follow **caller order**; use **`WP_Plugin_Dependencies`** public APIs to build dependency-aware queues when needed.

---

## WordPress Testing

**When to consult:** For setting up and running automated tests for plugin functionality.

### Key Resources
- [Automated Testing (Core Handbook)](https://make.wordpress.org/core/handbook/testing/automated-testing/)
- [`wp-env` (local environment)](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-env/)
- [Jest testing (`@wordpress/jest-preset-default`)](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-jest-preset-default/)

| Test Level | Tool       | Coverage Focus                          |
|------------|------------|-----------------------------------------|
| Unit (PHP) | PHPUnit    | Hooks, filters, REST endpoints, classes.|
| Unit (JS)  | Jest       | Block edit/save logic, utility modules. |
| E2E        | Playwright | Full browser admin + front-end flows.   |

**Agent Directives:**
- Use `@wordpress/env` (`wp-env`) for reproducible local test environments.
- Run `wp-env start` before PHPUnit to spin up the test WordPress instance.
- Keep unit tests focused on a single function or class; mock `$wpdb` and globals.

---

## PHPUnit for WordPress

**When to consult:** For PHP unit testing of plugin logic.

### Key Resources
- [Writing PHPUnit Tests (Core Handbook)](https://make.wordpress.org/core/handbook/testing/automated-testing/writing-phpunit-tests/)
- [PHPUnit Documentation](https://phpunit.de/documentation.html)
- [`WP_UnitTestCase`](https://make.wordpress.org/core/handbook/testing/automated-testing/writing-phpunit-tests/)
- [`WP_Ajax_UnitTestCase`](https://make.wordpress.org/core/handbook/testing/automated-testing/writing-phpunit-tests/)
- [`WP_REST_TestCase`](https://make.wordpress.org/core/handbook/testing/automated-testing/writing-phpunit-tests/)

**Agent Directives:**
- Extend `WP_UnitTestCase` for WordPress-specific test cases.
- Use `WP_Ajax_UnitTestCase` for testing Ajax handlers.
- Use `WP_REST_TestCase` for testing REST API endpoints.
- Use `$this->factory` for creating test fixtures (posts, users, terms) without raw SQL.
- Database changes within tests are rolled back automatically by `WP_UnitTestCase`.

---

## Playwright / E2E Testing

**When to consult:** For end-to-end UI testing of admin and front-end flows.

### Key Resources
- [`@wordpress/scripts` (includes Playwright utilities)](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/)
- [`@wordpress/e2e-test-utils-playwright`](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-e2e-test-utils-playwright/)
- [Playwright Documentation](https://playwright.dev/docs/intro)

**Agent Directives:**
- Use `@wordpress/e2e-test-utils-playwright` for WP-specific utilities (login, visiting admin, etc.).
- Configure `WP_BASE_URL` in `playwright.config.ts` (usually `http://localhost:8889` with `wp-env`).
- Run Playwright tests against `wp-env` — never against production.

---

## Plugin Check (WordPress.org Compliance)

**When to consult:** Before submitting to the WordPress.org plugin repository or for compliance auditing.

### Key Resources
- [Plugin Check Plugin](https://wordpress.org/plugins/plugin-check/)
- [Plugin Check GitHub](https://github.com/WordPress/plugin-check)
- [Plugin Review Guidelines](https://developer.wordpress.org/plugins/wordpress-org/detailed-plugin-guidelines/)
- [WP-CLI Plugin Check command](https://github.com/WordPress/plugin-check#wp-cli-command)

| Category       | Check Focus                            |
|----------------|----------------------------------------|
| Plugin Repo    | Compliance with directory rules.       |
| Security       | Detection of common vulnerabilities.   |
| Performance    | Autoloaded options; query efficiency.  |
| Accessibility  | Basic structural checks.               |
| i18n           | Translatable strings, text domain.     |
| Readme         | Valid `readme.txt` structure.          |

**Agent Directives:**
- Run `wp plugin check {plugin-slug}` via WP-CLI before any WordPress.org submission.
- Integrate Plugin Check into CI/CD to catch regressions early.
- Address all `ERROR` severity items; treat `WARNING` items case-by-case.

---

## Guidelines for AI Agents

**Protocol for Documentation Consultation:**
- Always consult official WordPress documentation before making assumptions.
- Cite specific sources for code solutions.
- Verify standards and check for deprecations before implementing.

**When to Consult the Library:**
- Project initialization, feature implementation, security review, performance audit.
- Prefer official sources (`developer.wordpress.org`, `make.wordpress.org`, `www.w3.org`) over secondary sources.

**Verification Checklist:**
- Is the hook/function still available in the current WordPress version?
- Is the pattern compatible with the project's minimum PHP requirement?
- Has the relevant API been deprecated or replaced in recent WordPress releases?

---

## WordPress Documentation Standards

**When to consult:** When an agent produces any user-facing content — readme.txt, inline help text, tooltips, tutorial steps, release notes, or any prose that will be read by humans outside the development team.

**Inside this repo:** For article-level HelpHub rules (capitalization,
punctuation, formatting, word list, linking), use the references the `writing`
skill carries in `.agents/skills/writing/references/` — the official WordPress
Documentation Style Guide cut into six categories, `general-guidelines.md`,
`language-and-grammar.md`, `punctuation.md`, `formatting.md`, `linking.md` and
`developer-content.md`, plus the word list split per letter under
`references/word-list/`. Each section carries a **`Source:`** URL for the
canonical live page. For **PHPDoc and JSDoc block structure** (required tags,
file headers, hook examples), use **WordPress Coding Standards** above and
[Inline Documentation Standards](https://developer.wordpress.org/coding-standards/inline-documentation-standards/)
— the references do not replace DevHub for that.

### Key Resources
- [Documentation Team Handbook](https://make.wordpress.org/docs/handbook/documentation-team-handbook/)
- [Grammar Guide](https://make.wordpress.org/docs/handbook/documentation-team-handbook/handbooks-grammar-guide/)
- [Style & Formatting Guide](https://make.wordpress.org/docs/handbook/documentation-team-handbook/handbooks-style-and-formatting-guide/)
- [Tone & Voice Guide](https://make.wordpress.org/docs/handbook/documentation-team-handbook/tone-and-voice-guide/)
- [External Linking Policy](https://make.wordpress.org/docs/handbook/documentation-team-handbook/external-linking-policy/)
- [Tutorial Template](https://make.wordpress.org/docs/handbook/documentation-team-handbook/tutorial-template/)
- [Common APIs Handbook](https://developer.wordpress.org/apis/)

---

### Grammar Guide

**When to consult:** Before writing or editing any user-facing prose — especially when unsure about punctuation, capitalization, or phrasing conventions in WordPress documentation.

**Key Resources**
- [Documentation Grammar Guide](https://make.wordpress.org/docs/handbook/documentation-team-handbook/handbooks-grammar-guide/)

| Rule | Standard |
|------|----------|
| Spelling | American English (`-ize`, `-or`; not `-ise`, `-our`). |
| Voice | Active voice preferred; avoid passive constructions. |
| Oxford comma | Always use: `apples, oranges, and bananas`. |
| Quotation marks | Only for direct quotes and document titles — never for emphasis or commands. |
| Inline code | Use backticks for commands, functions, file names — never quotation marks. |
| WordPress | Always capitalize the P: `WordPress`. |
| UI element names | Capitalize specific names: `the Save button`, `the Posts page`. |
| Generic nouns | Do not capitalize: theme, plugin, page, block, user, administrator. |
| Emphasis | Use bold or italics — never capitalization or quotation marks. |
| Adjective hyphenation | `back-end` / `front-end` (adj); `back end` / `front end` (noun). |
| `-ly` adverbs | Never hyphenate: `a nicely formatted document`. |
| Login | `login` (noun/adj), `log in` (verb), `log in to` (not `log into`). |
| Homepage | One word: `homepage`. |
| List introduction | Use a colon only when preceded by a full sentence. |
| Consistency | Use the same term for the same concept throughout a document. |

**Agent Directives:**
- Run a final grammar pass against the rules above on all user-facing text before marking a task complete.
- When referring to the editor, qualify `block editor` or `classic editor` on first mention; use `editor` alone after that.
- Rearrange ambiguous sentences rather than relying on the Oxford comma alone to disambiguate.

---

### Style & Formatting Guide

**When to consult:** When structuring any documentation page, choosing heading levels, formatting UI references, or embedding code examples and screenshots.

**Key Resources**
- [Handbooks & HelpHub Style and Formatting Guide](https://make.wordpress.org/docs/handbook/documentation-team-handbook/handbooks-style-and-formatting-guide/)

| Rule | Standard |
|------|----------|
| Person | Always second person (`you`); never first person (`we`). |
| Tone | Informal but knowledgeable — a friend explaining clearly. |
| Paragraphs | One major point per paragraph; keep short and scannable. |
| Topic scope | One topic per article; link out to related topics. |
| Heading hierarchy | `h2`–`h6` in strict sequential order; never skip levels. |
| Bold | Use for important instructions: **Navigate to Pages > Add New**. |
| Menu paths | Format as `Parent > Child` (e.g., `Plugins > Add New`). |
| Inline code | Wrap functions, hooks, classes, variables in `<code>` and link to code reference. |
| Code blocks | Use language-specific shortcodes (`[php]`, `[html]`, `[css]`, `[js]`). |
| Callouts | Use `[info]`, `[tip]`, `[alert]`, `[warning]` shortcodes as appropriate. |
| Images | Full-size screenshots; resize browser to capture only the relevant area. |
| Image accessibility | Descriptive alt text required; do not rely solely on screenshots. |
| Link text | Must be descriptive — never `here` or `this`; unique per page unless same target. |
| Abbreviations | Expand on first use: `Content Management System (CMS)`. |
| GIFs | Avoid autoplay; prefer video with play/pause controls, or thumbnail with play trigger. |
| Codex links | Replace with `developer.wordpress.org` equivalents unless the page has not been migrated. |

**Agent Directives:**
- Always set heading levels sequentially — an `h4` must be preceded by an `h3`.
- When producing screenshots, resize the browser to capture only the relevant area; never use click-to-expand thumbnails.
- Replace any Codex link with its DevHub equivalent before publishing.
- Stick to one topic per document or section; link to related topics instead of diverging.

---

### Tone & Voice Guide

**When to consult:** When writing any user-facing prose, to ensure the correct degree of formality, inclusiveness, and translatability.

**Key Resources**
- [Tone and Voice Guide](https://make.wordpress.org/docs/handbook/documentation-team-handbook/tone-and-voice-guide/)

| Attribute | Guideline |
|-----------|-----------|
| Voice | Friendly but professional — consistent across all documents. |
| Contractions | Use them (`don't`, `you'll`) to sound approachable. |
| Person | Always second person (`you`). |
| Conciseness | Explain in as few words as possible; get to the point quickly. |
| Active voice | Prefer active constructions; avoid passive voice. |
| Jargon | Avoid; if unavoidable, define on first use. |
| Slang & shorthand | Never use internet slang or web shorthand. |
| Exclamation marks | Use sparingly — one per document at most. |
| Cultural references | Avoid idioms, sports metaphors, and culture-specific references (content is translated globally). |
| User doc tone | Friendly, informal, clear, concise, precise; explain technical terms without condescending. |
| Developer doc tone | Direct and precise; assume technical knowledge; minimize conversational phrasing. |
| Code references | Be maximally direct — avoid narrative lead-ins like "Let's talk about…". |

**Agent Directives:**
- Before finalizing any prose, verify: Is it friendly? Is it direct? Would a non-native English speaker understand it without cultural context?
- For developer docs, lead with the function/hook name and its purpose — skip preamble.
- For user docs, briefly state the context before explaining the feature.
- Keep paragraphs short and vocabulary consistent to support localization.

---

### External Linking Policy

**When to consult:** Before adding any hyperlink to external (non-WordPress.org) content in documentation, readme files, or help text.

**Key Resources**
- [External Linking Policy](https://make.wordpress.org/docs/handbook/documentation-team-handbook/external-linking-policy/)
- [Policy discussion archive](https://make.wordpress.org/docs/tag/external-linking-policy/)

| Rule | Detail |
|------|--------|
| Default stance | All external links are prohibited unless on the pre-approved whitelist. |
| New links | No new external links shall be added at this time. |
| Pre-approved sites | Linked page content must not sell or promote a product or service. |
| Plugins / themes / hosting | Never promote or recommend specific plugins, themes, services, or hosting providers. |
| Documentation scope | HelpHub and DevHub document only what is in Core or planned for Core. |
| Link text | Must be descriptive — never `click here`, `here`, or `this`. |

**Agent Directives:**
- Default to linking only to `wordpress.org`, `developer.wordpress.org`, `make.wordpress.org`, and `w3.org` domains.
- If an external link is genuinely needed (e.g., PHP.net, MDN), flag it for manual review with a `<!-- REVIEW: external link -->` comment.
- Never link to commercial pages, tutorials on third-party blogs, or hosted services.
- No plugins, themes, or hosting recommendations in any documentation output.

---

### Tutorial Template

**When to consult:** When writing any tutorial, how-to guide, or step-by-step instructions — whether in docs, readme, or inline help.

**Key Resources**
- [Tutorial Template](https://make.wordpress.org/docs/handbook/documentation-team-handbook/tutorial-template/)

**Required sections:**

| Section | Content |
|---------|---------|
| **Overview** | Introduce what the reader will accomplish; provide an ordered list of learning outcomes. |
| **What You Will Need** | List prerequisites: tools, knowledge, environment. |
| **Steps** (numbered) | One clear task per step; each step has a heading: `Step N – Task Title`. |
| **Learn More** | List of resources for further reading. |

**Step formatting rules:**

| Rule | Detail |
|------|--------|
| Task granularity | Each step contains exactly one clear task. |
| Step headings | Numbered, concise, wrapped in the appropriate heading tag. |
| Logical order | Steps follow in strict sequence — never double-back. |
| Screenshots | Include where relevant with descriptive alt text. |
| Code examples | Wrap in correct syntax-highlighter shortcode (`[php]`, `[html]`, `[js]`). |
| Person & brevity | Second person; as few words as possible. |

**Agent Directives:**
- Always include Overview, Prerequisites, numbered Steps, and Learn More in any tutorial output.
- Number steps sequentially — never branch or revisit earlier steps.
- Each step heading must state the task concisely (e.g., `Step 3 – Configure the API Key`).
- Screenshots must have descriptive alt text and must not be the sole means of conveying information.

---

### Common APIs Handbook

**When to consult:** When looking up canonical documentation for any WordPress core API, or when determining the correct handbook URL for an API reference.

**Key Resources**
- [Common APIs Handbook](https://developer.wordpress.org/apis/)
- [Documentation team — Common APIs Handbook](https://make.wordpress.org/docs/handbook/documentation-team-handbook/common-apis-handbook/)
- [Migration status spreadsheet](https://docs.google.com/spreadsheets/d/1S5HO0889uMB6veCpAHphdDzbL15UOpPVBtBhodPyjiE/edit?usp=sharing)

The Common APIs Handbook at `developer.wordpress.org/apis/` is the central index for all WordPress core APIs. It consolidates documentation that was previously scattered across the Codex.

**APIs covered (with canonical base URL `https://developer.wordpress.org/apis/`):**

| API | Path suffix |
|-----|-------------|
| Dashboard Widgets | `dashboard-widgets/` |
| Database (`$wpdb`) | `database/` |
| File Header | `file-header/` |
| Filesystem | `filesystem/` |
| HTTP | `http/` |
| Metadata | `metadata/` |
| Options | `options/` |
| Plugin API (Hooks) | `hooks/` |
| Quicktags | `quicktags/` |
| Rewrite | `rewrite/` |
| Settings | `settings/` |
| Shortcodes | `shortcodes/` |
| Transients | `transients/` |
| Widgets | `widgets/` |
| XML-RPC | `xml-rpc/` |

**Cross-cutting conventions across WordPress APIs:**

| Pattern | Convention |
|---------|-----------|
| Error returns | Most getter functions return `false`, `null`, or an empty value on failure — not exceptions. |
| Error objects | Functions that can fail meaningfully return `WP_Error` instances. |
| Hook naming | `{object_type}_{action}` pattern (e.g., `save_post`, `delete_term`, `update_option`). |
| Filter convention | Filters receive the value to modify as the first parameter and must return it. |
| Capability gating | State-changing API functions do not check capabilities internally — callers must check `current_user_can()`. |
| Sanitization | API functions generally do not sanitize input — callers must sanitize before passing data. |

**Agent Directives:**
- Always link to `developer.wordpress.org/apis/` (not the Codex) when referencing a core API.
- When using any WordPress API function, check its return type for `WP_Error` or `false` and handle failures explicitly.
- Never assume an API function performs capability checks or sanitization on your behalf — always add your own.
- Consult the migration status spreadsheet if a page appears incomplete or references the Codex.

---

## Agent Documentation Guidelines

This section defines how agents should contribute to this library over time. The goal is to accumulate reusable knowledge that benefits **any** WordPress project — project-specific notes belong in `.agents/notes/`.

### What to document here

When an agent encounters something worth preserving across projects, append it to the relevant section above (or create a new section if none fits). Examples:

- **WordPress API patterns**: non-obvious behavior, undocumented gotchas, version-specific quirks.
- **Build tool findings**: `@wordpress/scripts` configuration patterns, ESLint/Stylelint rule conflicts, Webpack customization tips.
- **Security patterns**: sanitization edge cases, escaping strategies for unusual contexts, nonce lifecycle details.
- **Performance patterns**: query optimization techniques, caching strategies, asset loading patterns.
- **Accessibility patterns**: ARIA patterns for WP admin components, screen reader testing findings, keyboard navigation solutions.
- **Testing patterns**: PHPUnit setup quirks, Playwright selectors for WP admin, environment configuration tips.
- **i18n patterns**: JS translation loading failures, PCP linter violations, `wp_set_script_translations()` path resolution.
- **Documentation writing**: when an agent produces any user-facing content (readme.txt, inline help text, tooltips, tutorial steps, release notes), it must follow the WordPress Documentation Standards section of this library — grammar, tone, formatting, and linking rules apply.

### What NOT to document here

- Project-specific architecture decisions → `.agents/notes/`
- Feature-specific implementation details → `.agents/notes/`
- Temporary findings or debugging notes → `.agents/notes/`

### Format

Append entries under the most relevant existing section. Use the established format: a brief "When to consult" note, key resources (links), implementation patterns (tables where applicable), and agent directives. Keep entries concise and actionable.

> Any agent that modifies `docs-library.md` must update the `Last updated`
> date at the top of the file to the current date (YYYY-MM-DD). **Edit only
> the curated region — this whole file.** Adding or removing a **Key
> Resources** link is a change to this file alone, and nothing outside this
> repository reads it.

### Documentation update reflexes

**When to consult:** Before closing any task that adds, removes, or modifies user-facing behaviour, hooks, REST endpoints, options, schemas, or translatable strings.

**Reflexes (enforced by `AGENTS.md` and the project skills):**

| Event | Action | Owner |
|-------|--------|-------|
| New feature, bug fix, refactor with user-visible change | Append an entry to the `== Changelog ==` block in `readme.txt` (under the active version). | Agent that did the work |
| New PHPDoc on a public function, hook, REST handler | Mandatory; include `@since`, typed `@param`, typed `@return`, one-sentence description. | `interface-content` |
| Translatable string added, removed, or changed | Flag to the human in chat: "Translatable string modified — retranslation required for: `{string}` in `{file}`." Add changelog entry. Run `composer run make:pot` once intentional. | Agent that touched the string |
| New REST endpoint added | Document the route in the relevant agent note and add changelog entry. | `fullstack` (route), `interface-content` (docblock) |
| New public hook exposed | PHPDoc on the hook, including `@since` and one example, plus changelog entry. | `interface-content` (PHPDoc), `fullstack` (signature) |
| Version bump | All three anchors aligned (`Version:`, `ZENPRESS_VERSION`, `Stable tag:`); promote the active changelog block to a versioned entry. | `release` |

**Hard rule on translatable strings:** never silent-edit. Always flag to the human and append a changelog entry. See `AGENTS.md` § Hard Rules — i18n.
