#!/usr/bin/env bash
#
# One-shot development environment setup for ZenPress.
#
# Run this once after cloning on a new machine or Local site:
#
#   bash bin/setup-dev.sh            # install everything, keep an existing test env
#   bash bin/setup-dev.sh --force    # also regenerate .config/wp-tests.env
#
# It is safe to re-run. After it completes, all commands work
# (integration tests skip gracefully when the env is not set up).
#
# Requirements: Composer, Node.js + npm, bash, and the site running in
# Local by Flywheel (the integration stack reuses Local's PHP, MySQL, and WP-CLI).

set -euo pipefail

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
PLUGIN_ROOT="$(cd "${SCRIPT_DIR}/.." && pwd)"
cd "$PLUGIN_ROOT"

FORCE="${1:-}"

echo "==> ZenPress dev setup (${PLUGIN_ROOT})"

# 1. Composer dependencies (host PHP/Composer).
if [[ ! -d vendor ]]; then
	echo "==> Installing Composer dependencies..."
	composer install
else
	echo "==> Composer dependencies present (vendor/)."
fi

# 2. npm dependencies (host Node/npm).
if [[ ! -d node_modules ]]; then
	echo "==> Installing npm dependencies..."
	npm install
else
	echo "==> npm dependencies present (node_modules/)."
fi

# 3. WordPress integration test stack (Local's PHP/MySQL/WP-CLI).
echo "==> Setting up the WordPress integration test stack..."
if [[ -n "$FORCE" ]]; then
	bash "${PLUGIN_ROOT}/.config/local-wp-cli.sh" setup "$FORCE"
else
	bash "${PLUGIN_ROOT}/.config/local-wp-cli.sh" setup
fi

echo
echo "==> Done. Next:"
echo "      npm run test:all     # all linters + unit tests"
echo "      npm run build:all    # full verification + POT + production build"