# Zenpress Plugin

ZenPress is a lightweight WordPress and WooCommerce plugin focused on performance, security, and minimalism.
This document describes the development workflow to keep code quality, consistency, and easy deployment.

## 🚀 Getting Started

### Prerequisites

- PHP **7.4 or higher** (tested up to PHP 8.4)
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

### PHP Linting

Run PHP linting with:
```bash
composer run lint:php
```

This will:

- Use **PHP CS Fixer** to automatically fix code style issues.
- Use **PHPStan** for static analysis and bug detection.

### JavaScript / React Linting

Run JavaScript/React linting with:
```bash
npm run lint
```
- ESLint checks for code quality, JSDoc alignment, and best practices.
- Prettier enforces consistent formatting.

To automatically fix fixable issues:
```bash
npm run lint -- --fix
```

## 🛠️ Development Workflow

- Each snippet is stored in `/inc/snippets/functions/` with its own `.php` file.
- Metadata for snippets is stored in `/inc/snippets/meta/` for scalability and translations.
- All new code must pass linting.

## License

Zenpress is licensed under the GPL-2.0-or-later license. See the [LICENSE](LICENSE) file for more details.
