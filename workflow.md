# Zenpress Plugin

Zenpress is a lightweight WordPress and WooCommerce plugin focused on performance, security, and minimalism.

## Getting Started

### Prerequisites

- PHP 7.4 or higher
- Composer

### Installation

Install the dependencies using Composer:
   ```bash
   composer install
   ```

## PHP Linting

To ensure code quality and consistency, Zenpress uses PHP linting tools. You can run the PHP linter using Composer scripts.

### Running PHP Lint

To start the PHP linting process, execute the following command:

```bash
composer run lint:php
```

This command will:
- Use PHP CS Fixer to fix code style issues.
- Use PHPStan for static analysis to find potential bugs.

## License

Zenpress is licensed under the GPL-2.0-or-later license. See the [LICENSE](LICENSE) file for more details.
