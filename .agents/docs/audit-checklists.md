# Shared audit checklists (WordPress)

Used by `qa`, `reviewer`, `security`. Grep one category.

> Canonical source. Keep these in sync with the QA skill's framing and methodology sections.

## Plugin bootstrap

- `ABSPATH` guard present
- `defined('ABSPATH') || exit;` — not `die()` or bare exit
- No direct `$_REQUEST` / `$_GET` / `$_POST` access without nonce + capability
- `register_activation_hook` / `register_deactivation_hook` / `register_uninstall_hook` — correct syntax
- No `WP_PLUGIN_DIR` assumptions — use `plugin_dir_path()` / `plugin_basename()`
- Text domain matches plugin slug
- `load_plugin_textdomain()` called early

## REST API

- `permission_callback` present on every route — no `__return_true` unless explicitly justified
- `current_user_can()` with the correct capability, not `manage_options` unless that's the right level
- Input via `$request->get_param()` — not `$_GET` / `$_POST`
- `$wpdb->prepare()` for all SQL in callbacks
- Schema registered (`args` with `type`, `required`, `sanitize_callback`, `validate_callback`)
- No `rest_ensure_response()` missing
- Route namespace matches plugin slug (`updatronix/v1`)

## SQL

- `$wpdb->prepare()` on every query with dynamic values — `%s`, `%d`, `%f`
- No `$wpdb->escape()` — deprecated
- Custom table names prefixed with `$wpdb->prefix`
- Indexes on queried columns
- `%i` for identifier placeholders (WP 6.2+) — else hardcoded table names with `$wpdb->prefix` concatenation

## i18n

- Every user-facing string wrapped in `__()`, `_e()`, `_n()`, `_x()`, `esc_html__()`, `esc_attr__()`
- Text domain matches plugin slug
- No string concatenation inside translation functions
- Placeholders use `printf()` / `sprintf()` with `%s` — not string interpolation
- `_n()` for plural forms where needed
- `_x()` / `_ex()` for context-sensitive strings

## Security

- Nonce verification on admin pages and Ajax handlers (`check_admin_referer()`, `check_ajax_referer()`, `wp_verify_nonce()`)
- Capability checks before any admin action — not just `is_admin()`
- `sanitize_*()` / `esc_*()` on input; `esc_*()` / `wp_kses_*()` on output
- `wp_redirect()` followed by `exit;`
- No `eval()`, `unserialize()` on untrusted data, `base64_decode()` on user input, `file_get_contents()` on user-supplied URLs
- Remote requests use `wp_remote_get()` / `wp_remote_post()` with timeout and SSL verification
- CSRF: nonce on forms, `X-WP-Nonce` header on REST

## Admin UI

- `add_menu_page()` / `add_submenu_page()` with correct capability, not `manage_options` blindly
- Screen IDs use plugin slug prefix
- `admin_post_*` hooks use nonce + capability
- Enqueue scripts/styles only on plugin's own pages (`$hook_suffix` check)
- `wp_die()` or `wp_redirect()` + `exit` after form processing

## Configuration & build

- `.gitignore` covers all generated files (`.env`, `.config/wp-tests.env`, `*.zip`, `node_modules/`, `vendor/`, `assets/build/`, `.phpunit.cache/`)
- `.distignore` matches `.gitattributes` export-ignore for release zips
- `composer.json` / `package.json` scripts match `workflow.md`
- No hardcoded paths or platform assumptions (Linux-only paths, macOS-only paths, missing `python3`)
- Plugin Check exclusions justified in comments
- ZIP builder excludes dev files correctly

## Multisite

- `is_network_admin()` checks where appropriate
- Site options vs network options — correct API used
- `get_site_option()` / `update_site_option()` for network-wide settings
- Uninstall script clears network options with `delete_site_option()`
- Capability checks use `is_super_admin()` or custom network caps where appropriate

## Error handling

- `wp_die()` or `wp_redirect()` after errors, not silent `return`
- `WP_Error` objects returned from functions, not false/nulls that callers must guess at
- Try/catch around external calls, with fallback behavior
- `error_reporting` / `display_errors` not changed by the plugin
- Logging uses `error_log()` or `updatronix_` logger, not `var_dump()` / `print_r()`
