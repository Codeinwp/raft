# Agent Guide — Raft

## Overview

Raft is a block-based WordPress theme built for Full Site Editing. PHP theme code lives in the `Raft` namespace under `inc/`; the theme also provides block patterns, templates, template parts, styles, and JavaScript and SCSS assets.

## Setup provided for the agent

The Copilot setup workflow has already installed Yarn and Composer dependencies, started MySQL, and installed the WordPress PHPUnit test suite. Do not rerun `yarn install`, `composer install`, `bin/install-wp-tests.sh`, or dependency downloads after the agent firewall starts.

The project uses PHP 7.4 and Node.js 16.

## Validation

Run the checks that apply to your change:

```bash
composer run phpunit  # PHPUnit tests; WordPress and MySQL are already prepared
composer run lint     # PHP Coding Standards
yarn run lint         # JavaScript, SCSS, and package metadata checks
yarn run build        # Build theme JavaScript, CSS, RTL assets, and translations
```

This repository has no E2E test framework. Do not add or run E2E tests unless the task adds one.

## Project layout

- `functions.php` — theme bootstrap and WordPress hooks.
- `inc/` — namespaced PHP classes for theme setup, assets, admin behavior, block patterns, block styles, and starter content.
- `inc/patterns/` — registered PHP block patterns.
- `assets/js/src/` — JavaScript sources; `assets/js/build/` is generated output.
- `assets/css/src/` — SCSS sources; generated CSS and RTL files are part of the theme build.
- `patterns/`, `parts/`, `templates/`, and `styles/` — block-theme content and style variations.
- `theme.json` — global styles, settings, templates, and block configuration.
- `tests/` — PHPUnit bootstrap and unit tests.
- `Gruntfile.js` — CSS processing, RTL generation, and translation-file tasks.

## Conventions

- Follow WordPress Coding Standards and the existing `phpcs.xml` configuration.
- Put PHP theme behavior in the existing `Raft` namespace and preserve the current class structure.
- Use the theme text domain from `style.css` for translatable strings.
- Edit source files under `assets/js/src/` and `assets/css/src/`, then run the relevant build command when generated assets must change.
- Keep changes focused. Do not alter release, deployment, or dependency configuration unless the task requires it.

