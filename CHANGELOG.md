# Changelog

All notable changes to `laravel-googlenews-sitemap` will be documented in this file.

## v1.1.0 - 2026-03-26

### What's Changed

- refresh the maintenance baseline with a single verified pull request CI workflow
- upgrade the package development toolchain to Laravel 13 / Testbench 11 / Pest 4 / PHPStan 2 / Larastan 3
- add Composer Dependabot coverage and remove redundant workflow noise
- include the XML declaration compatibility fix for sitemap rendering

### Config Changes

- No package config changes are required.

### Upgrade Steps

- Run `composer update the-3labs-team/laravel-googlenews-sitemap`.
- If you published the package views, update or republish `laravel-googlenews-sitemap` views so the XML declaration compatibility fix is included.
- Repository automation now centers on a single pull request CI workflow plus weekly Dependabot coverage for Composer and GitHub Actions.

### Compatibility Notes

- Runtime constraints remain PHP 8.1+.
- The repository CI baseline is now verified on PHP 8.3 with Laravel 13 via Testbench 11.
- This release supersedes the old workflow-only Dependabot PRs #20, #21, and #23.

## v1.0.2 - 2025-07-22

Add support to PHP 8.4

### What's Changed

* Bump aglipanci/laravel-pint-action from 2.3.1 to 2.4 by @dependabot[bot] in https://github.com/The-3Labs-Team/laravel-googlenews-sitemap/pull/9
* Bump amancevice/setup-code-climate from 1 to 2 by @dependabot[bot] in https://github.com/The-3Labs-Team/laravel-googlenews-sitemap/pull/7
* Bump stefanzweifel/git-auto-commit-action from 4 to 5 by @dependabot[bot] in https://github.com/The-3Labs-Team/laravel-googlenews-sitemap/pull/4
* Bump ramsey/composer-install from 2 to 3 by @dependabot[bot] in https://github.com/The-3Labs-Team/laravel-googlenews-sitemap/pull/6
* Bump dependabot/fetch-metadata from 1.6.0 to 2.2.0 by @dependabot[bot] in https://github.com/The-3Labs-Team/laravel-googlenews-sitemap/pull/11
* Bump dependabot/fetch-metadata from 2.2.0 to 2.3.0 by @dependabot[bot] in https://github.com/The-3Labs-Team/laravel-googlenews-sitemap/pull/12
* Bump aglipanci/laravel-pint-action from 2.4 to 2.5 by @dependabot[bot] in https://github.com/The-3Labs-Team/laravel-googlenews-sitemap/pull/13
* Bump dependabot/fetch-metadata from 2.3.0 to 2.4.0 by @dependabot[bot] in https://github.com/The-3Labs-Team/laravel-googlenews-sitemap/pull/16

**Full Changelog**: https://github.com/The-3Labs-Team/laravel-googlenews-sitemap/compare/v1.0.1...v1.0.2

## v1.0.1 - 2024-03-18

### What's Changed

* Support for PHP 8.2 + 8.3
* Remove contracts dependecy
* Bump dependabot/fetch-metadata from 1.5.1 to 1.6.0 by @dependabot in https://github.com/The-3Labs-Team/laravel-googlenews-sitemap/pull/2
* Bump actions/checkout from 3 to 4 by @dependabot in https://github.com/The-3Labs-Team/laravel-googlenews-sitemap/pull/3
* Bump aglipanci/laravel-pint-action from 2.3.0 to 2.3.1 by @dependabot in https://github.com/The-3Labs-Team/laravel-googlenews-sitemap/pull/5

**Full Changelog**: https://github.com/The-3Labs-Team/laravel-googlenews-sitemap/compare/v1.0.0...v1.0.1

## v1.0.0 - 2023-06-03

### What's Changed

- First working release
- Bump aglipanci/laravel-pint-action from 2.2.0 to 2.3.0 by @dependabot in https://github.com/The-3Labs-Team/laravel-googlenews-sitemap/pull/1

### New Contributors

- @dependabot made their first contribution in https://github.com/The-3Labs-Team/laravel-googlenews-sitemap/pull/1

**Full Changelog**: https://github.com/The-3Labs-Team/laravel-googlenews-sitemap/commits/v1.0.0
