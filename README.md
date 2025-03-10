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

## GitHub Actions

Zenpress uses GitHub Actions for continuous integration and deployment. The workflow is defined in the `.github/workflows/release.yml` file.

### How It Works

- **Trigger**: The workflow is triggered on every push to a tag that matches the pattern `[0-9]+.[0-9]+.[0-9]+`.
- **Jobs**:
  - **Build and Zip**: The code is checked out, and a zip file is created containing the necessary files for release.
  - **Publish Release**: The zip file is uploaded as a release artifact on GitHub, and release notes are generated automatically.

This setup ensures that every tagged release is automatically packaged and published, streamlining the release process.

## License

Zenpress is licensed under the GPL-2.0-or-later license. See the [LICENSE](LICENSE) file for more details.
