#!/bin/bash
set -euo pipefail

# Only run this in Claude Code on the web (remote) sessions.
if [ "${CLAUDE_CODE_REMOTE:-}" != "true" ]; then
  exit 0
fi

cd "$CLAUDE_PROJECT_DIR"

# JS tooling: prettier/stylelint config, husky git hooks, theme-utils.mjs
# scripts (validate-theme, etc). npm install (not ci) so the cached
# container state can be reused across sessions.
npm install

# PHP tooling: WordPress Coding Standards + PHPCompatibilityWP via phpcs,
# used by `composer run php:lint`. Composer refuses to run its
# dist-installer plugins as root by default; this session runs as root,
# so allow it. Persist the var so manual `composer` runs later in the
# session don't get the safety warning either.
echo 'export COMPOSER_ALLOW_SUPERUSER=1' >> "$CLAUDE_ENV_FILE"
COMPOSER_ALLOW_SUPERUSER=1 composer install
