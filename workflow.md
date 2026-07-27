# ZenPress — development workflow

## Getting started

### Prerequisites

- PHP **8.1+** (see `readme.txt`)
- WordPress **6.0+** (tested range in `readme.txt`)
- Composer
- Node.js **LTS** and npm (for `@wordpress/scripts`, ESLint, Stylelint, Prettier)
- Python **3** (for `local-wp-cli.sh` site resolution via `sites.json`)

### Install dependencies

```bash
composer install
npm install
bash bin/setup-dev.sh   # one-time: writes .config/wp-tests.env + installs the WP test stack
```

`bin/setup-dev.sh` is safe to re-run. It installs Composer/npm dependencies if they
are missing, then sets up the integration test stack by calling
`bash .config/local-wp-cli.sh setup`, which:

1. Reads your site's DB credentials with `wp config get` (inside Local's environment).
2. Writes **`.config/wp-tests.env`** (machine-specific, gitignored — paths live under
   `$HOME/.cache/zenpress-wp-tests/`).
3. Installs WordPress core + **wordpress-tests-lib** into that cache (one-time).

After it completes, `composer run test:integration` works.
To regenerate the env file (e.g. after the site's DB
credentials change): `bash bin/setup-dev.sh --force`.

**Requirements:** the site must run in **Local by Flywheel** (the integration stack
reuses Local's PHP, MySQL, and WP-CLI — same environment as `lint:pcp` / `make:pot`).

## Code quality (recommended order)

Run these before a commit or release, in order:

| Step | Command | What it does |
|------|---------|----------------|
| 1 | `composer run verify:php` | **PHP CS Fixer + PHPStan + PHPUnit unit tests** (`zenpress.php`, `inc/`, `tests/Unit/`) |
| 2 | `composer run lint:pcp` | Plugin Check via WP-CLI (requires **Local** — see below) |
| 3 | `npm run lint` | ESLint (WordPress preset + Prettier via `@wordpress/eslint-plugin`); `npm run lint:fix` to auto-fix |
| 4 | `npm run lint:css` | Stylelint on `assets/src/**/*.scss` (`npm run lint:css:fix` to auto-fix) |
| 5 | `npm run format` | Prettier check on `assets/src/**/*.{js,jsx}` (`npm run format:fix` to write) |
| 6 | `composer run make:pot` | Regenerate `languages/zenpress.pot` (requires **Local** — see below) |
| 7 | `composer run test:integration` | **PHPUnit integration tests** (full WordPress + DB; routes through `.config/local-wp-cli.sh`, so it uses Local's PHP/mysqli automatically after `bin/setup-dev.sh`) |

To run **everything at once** (all linters + unit, no build):

```bash
npm run test:all
```

Integration tests are included in the default gate. When the WordPress test
environment is not installed, they skip gracefully (exit 0).

WordPress.org suggests using coding standards / static analysis together with [Plugin Check](https://make.wordpress.org/plugins/developers/). This repo uses **PHP CS Fixer** and **PHPStan** for PHP, then Plugin Check for WordPress.org-oriented rules. **PHPUnit** covers pure helpers in `tests/Unit/`; **integration** tests live in `tests/Integration/` and run locally when the WordPress test library is installed.

Front-end JS follows **`@wordpress/eslint-plugin`**; SCSS follows **`@wordpress/stylelint-config/scss-stylistic`**; Prettier uses **`@wordpress/prettier-config`** (see `package.json`). SCSS is linted with Stylelint, not Prettier, so formatter commands target JS/JSX only.

### Composer scripts (reference)

| Script | Definition |
|--------|------------|
| `lint:php` | PHP CS Fixer then PHPStan (see `composer.json`) |
| `test` | PHPUnit **unit** suite only (`.config/phpunit.xml.dist` → `tests/Unit/`) |
| `verify:php` | `lint:php` then `test` — quick PHP gate before commits |
| `verify:all` | `lint:php` + `test` + `test:integration` — full PHP gate (unit **and** integration) |
| `test:integration` | PHPUnit **integration** suite via `bash .config/local-wp-cli.sh integration-test` (uses Local's PHP/mysqli; needs `bin/setup-dev.sh` once) |
| `test:all` | `test` then `test:integration` |
| `lint:pcp` | `bash .config/local-wp-cli.sh pcp` |
| `make:pot` | `bash .config/local-wp-cli.sh pot` |
| `setup` | `bash bin/setup-dev.sh` — one-time dev environment setup |

### npm scripts (front-end, reference)

| Script | What it does |
|--------|----------------|
| `lint` / `lint:fix` | ESLint on `assets/src/**/*.js` |
| `lint:css` / `lint:css:fix` | Stylelint on `assets/src/**/*.scss` |
| `format` / `format:fix` | Prettier on `assets/src/**/*.{js,jsx}` |
| `start` / `build` | `@wordpress/scripts` bundle |
| `setup` | `bash bin/setup-dev.sh` — one-time dev environment setup (env file + WP test stack) |
| `test:all` | `verify:all` (CS Fixer + PHPStan + unit + integration) + `lint:pcp` + `lint` + `lint:css` + `format` |
| `build:all` | `test:all` + `make:pot` + `build` (see **Build** below) |
| `zip` | Build distributable zip via `.config/zip.js` (uses `archiver`; respects `.distignore`-style exclusions) |

### Configuration files

| Path | Role |
|------|------|
| `.config/.php-cs-fixer.php` | PHP code style |
| `.config/phpstan.neon` | Static analysis |
| `.config/phpstan-bootstrap.php` | PHPStan bootstrap |
| `.config/phpunit.xml.dist` | PHPUnit **unit** tests |
| `.config/phpunit.integration.xml.dist` | PHPUnit **integration** tests |
| `.config/.eslintrc.js` | ESLint (`plugin:@wordpress/eslint-plugin/recommended`) |
| `.config/stylelintrc.json` | Stylelint (`@wordpress/stylelint-config/scss-stylistic` + project overrides) |
| `.config/.prettierrc.js` | Prettier configuration (`tabWidth: 4`, single quotes) |
| `.editorconfig` | Tabs for source; spaces for `package.json` / YAML |
| `.config/local-wp-cli.sh` | Local WP shell + `wp` for `lint:pcp` / `make:pot` / `integration-test` / `setup` |
| `.config/pcp-setup.php` | Loaded by `wp plugin check --require` (CLI only) |
| `.config/zip.js` | Distributable zip builder (`npm run zip`); excludes dev files via `archiver` globs |
| `.config/wp-tests-env.example` | Template for integration test DB / path variables (generated automatically by `bin/setup-dev.sh` → `.config/wp-tests.env`) |
| `bin/setup-dev.sh` | One-time dev setup: installs deps + generates `.config/wp-tests.env` + installs the WP test stack |
| `bin/install-wp-tests.sh` | Installs WordPress core + `wordpress-tests-lib` (invoked by `setup`) |

### PHP — `composer run verify:php`

Runs, in order:

1. **PHP CS Fixer** — `.config/.php-cs-fixer.php`
2. **PHPStan** — `.config/phpstan.neon`
3. **PHPUnit (unit)** — `.config/phpunit.xml.dist` (`tests/Unit/`)

For integration tests only, see `bash .config/local-wp-cli.sh integration-test`.

### Front-end — ESLint, Stylelint, Prettier

- **ESLint** — `.config/.eslintrc.js` extends the WordPress `recommended` preset (Prettier runs inside ESLint when `prettier` is installed; do not duplicate `prettier/prettier` rules locally).
- **Stylelint** — `.config/stylelintrc.json`; lints SCSS under `assets/src/` (scripts pass `--config`).
- **Prettier** — configured via `package.json` and `@wordpress/prettier-config`; `format` / `format:fix` apply to JavaScript/JSX only so SCSS stays aligned with Stylelint stylistic rules.

### Plugin Check and POT — Local by Flywheel only

`lint:pcp` and `make:pot` are **not** plain Composer binaries: they run **`.config/local-wp-cli.sh`**, which:

1. Resolves the WordPress root (walks up from this plugin until `wp-load.php`).
2. Finds the matching Local **`~/.config/Local/ssh-entry/*.sh`** entry (same `cd` target as that root).
3. Sources Local's `export` / `cd` / `unset` lines so `PATH`, PHP, and WP-CLI match **Open Site Shell**.
4. Runs `wp plugin check` or `wp i18n make-pot`.

**Requirements**

- Site created in **Local**; plugin under `wp-content/plugins/zenpress` as usual.
- Local has generated **ssh-entry** scripts (open **Site Shell** once or start the site if needed).
- **`bash`** available (Git Bash or WSL on Windows).

No `.env` or extra config files are required for these two commands.

**Plugin Check options** (defined as variables in `.config/local-wp-cli.sh`, edit there to change):

- **Excluded directories:** `.config`, `.github`, `.cursor`, `.agents`, `bin`, `tests`
- **Excluded files:** `workflow.md`, `.distignore`, `.gitignore`, `.gitattributes`, `.editorconfig`, `zenpress.zip` (artifact from `npm run zip` if present)

```bash
composer run lint:pcp
composer run make:pot
```

## Build

Run the complete build + verification pipeline in one shot:

```bash
npm run build:all
```

`build:all` = `npm run test:all` + `composer run make:pot` + `npm run build`. It
executes, in order:

1. `composer run verify:all` (PHP CS Fixer + PHPStan + **unit** + **integration** tests)
2. `composer run lint:pcp`
3. `npm run lint`
4. `npm run lint:css`
5. `npm run format`
6. `composer run make:pot`
7. `npm run build`

To run only the checks (everything above except `make:pot` and `build`):

```bash
npm run test:all
```

Notes:

- Integration tests are part of the default gate. When the WordPress test
  environment is not installed, they skip gracefully (exit 0).
  Run `bash bin/setup-dev.sh` once to install the WP test stack.
- `lint:pcp`, `make:pot`, and the integration tests all rely on **Local by Flywheel**
  (see `.config/local-wp-cli.sh`). On a fresh machine, `composer install` +
  `npm install` + `bash bin/setup-dev.sh` is all that is required.
- `npm run build` uses `@wordpress/scripts` to bundle JS (and compile SCSS imports via the entry `assets/src/index.js`) into `assets/build/`.

## Development workflow

### Build assets (`@wordpress/scripts`)

```bash
npm start    # watch
npm run build
```

- Entry: `assets/src/index.js` (imports `assets/src/index.scss`)
- Output: `assets/build/`, RTL CSS, dependency extraction

### Code layout

- `inc/core/` — plugin constants, metadata, sanitize helpers
- `inc/classes/` — integrations (autoptimize, cache-enabler, sqlite-object-cache) and orchestrator
- `inc/admin/` — admin UI, menus, enqueue
- `inc/settings/` — options and settings
- `inc/snippets/` — feature snippets (functions + metadata)

## License

GPL-2.0-or-later — see **`LICENSE`**.