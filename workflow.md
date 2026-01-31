# Zenpress Plugin

ZenPress is a lightweight WordPress and WooCommerce plugin focused on performance, security, and minimalism.
This document describes the development workflow to keep code quality, consistency, and easy deployment.

## 🚀 Getting Started

### Prerequisites

- PHP **8.1 or higher** (tested up to PHP 8.4)
- Composer
- Node.js & npm (for WordPress Scripts)
- WordPress >= **6.0**

### Installation

Clone the repository and install dependencies:
```bash
composer install
npm install
```

## 🧹 Code Quality

ZenPress enforces strict coding standards and static analysis to avoid bugs and maintain clean code.

All configuration files are stored in the `.config` folder:
- `.config/.eslintrc.js` - ESLint configuration
- `.config/.prettierrc.js` - Prettier configuration
- `.config/.php-cs-fixer.php` - PHP CS Fixer configuration
- `.config/phpstan.neon` - PHPStan configuration
- `.config/phpstan-bootstrap.php` - PHPStan bootstrap file

### PHP Linting

Run PHP linting with:
```bash
composer run lint:php
```

This will:

- Use **PHP CS Fixer** (configured in `.config/.php-cs-fixer.php`) to automatically fix code style issues.
- Use **PHPStan** (configured in `.config/phpstan.neon`) for static analysis and bug detection.

### JavaScript / React Linting

Run JavaScript/React linting with:
```bash
npm run lint
```
- ESLint (configured in `.config/.eslintrc.js`) checks for code quality, JSDoc alignment, and best practices.
- Prettier (configured in `.config/.prettierrc.js`) enforces consistent formatting.

To automatically fix fixable issues:
```bash
npm run lint -- --fix
```

### Code Formatting

Format code with Prettier:
```bash
npm run format
```

This will format all JavaScript files according to the Prettier configuration.

## 🛠️ Development Workflow

### Building Assets

The plugin uses **@wordpress/scripts** for building JavaScript and SCSS assets:

```bash
# Development mode with watch (hot reload)
npm start

# Production build
npm run build
```

The build process:
- Compiles JavaScript/React code from `assets/src/index.js`
- Compiles SCSS from `assets/src/index.scss` (imported in the JS file)
- Outputs to `assets/build/` directory
- Automatically generates RTL CSS files
- Handles WordPress dependency extraction

### Code Structure

- Each snippet is stored in `/inc/snippets/functions/` with its own `.php` file.
- Metadata for snippets is stored in `/inc/snippets/meta/` for scalability and translations.
- All new code must pass linting before committing.

### Integrations

- Third-party integrations (Autoptimize, and later Cache Enabler, SQLite Object Cache, etc.) live in `/inc/classes/`: one file per plugin (e.g. `autoptimize.php`), plus `integrations.php` as the orchestrator.
- The orchestrator adds a single "ZenPress" admin bar item (when enabled and at least one integration is active) with "Clear caches", and hides integration-specific admin bar buttons. Clear caches runs the `zenpress_caches_clear` action so each integration can clear its cache.
- In the settings page (Tools tab), when at least one integration is active, an "Integrations" block appears with a toggle for the admin bar and one-click autoconfig buttons per active integration (e.g. "One-click autoconfig Autoptimize"). Autoconfig is triggered via the REST route `POST /zenpress/v1/autoconfig/autoptimize` (and equivalent for future integrations).

## License

Zenpress is licensed under the GPL-2.0-or-later license. See the [LICENSE](LICENSE) file for more details.
