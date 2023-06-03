# Laravel Google News (GNews) Sitemap

[![Latest Version on Packagist](https://img.shields.io/packagist/v/the-3labs-team/laravel-googlenews-sitemap.svg?style=flat-square)](https://packagist.org/packages/the-3labs-team/laravel-googlenews-sitemap)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/the-3labs-team/laravel-googlenews-sitemap/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/the-3labs-team/laravel-googlenews-sitemap/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Github PHPStan](https://img.shields.io/github/actions/workflow/status/the-3labs-team/laravel-googlenews-sitemap/phpstan.yml?branch=main&label=phpstan&style=flat-square)](https://github.com/the-3labs-team/laravel-googlenews-sitemap/actions?query=workflow%3Aphpstan+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/the-3labs-team/laravel-googlenews-sitemap/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/the-3labs-team/laravel-googlenews-sitemap/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/the-3labs-team/laravel-googlenews-sitemap.svg?style=flat-square)](https://packagist.org/packages/the-3labs-team/laravel-googlenews-sitemap)
[![Codacy Badge](https://app.codacy.com/project/badge/Grade/fa0e9f4bdb9145cdab442dfbf4c26573)](https://app.codacy.com/gh/The-3Labs-Team/laravel-googlenews-sitemap/dashboard?utm_source=gh&utm_medium=referral&utm_content=&utm_campaign=Badge_grade)

This package helps you to create a [Google News Sitemap](https://developers.google.com/search/docs/crawling-indexing/sitemaps/news-sitemap). It is useful when you have a blog/news website and you are involved in [Google Published Center](https://publishercenter.google.com).

Don't forget to create your Google News Sitemap and submit it in [Google Search Console](https://search.google.com/search-console/about), as a standard sitemap.

## Prerequisites

-   Laravel 10.x or higher

## Installation

You can install the package via composer:

```bash
composer require the-3labs-team/laravel-googlenews-sitemap
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="googlenews-sitemap-config"
```

This is the contents of the published config file:

```php
return [
    'path' => 'public/google-news-sitemap.xml',
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-googlenews-sitemap-views"
```

## Usage

You can use the package as follows:

```php
// Init the sitemap
$sitemap = LaravelGooglenewsSitemap::create();

// Add urls
// $articles = App\Models\Article::wherePublished()...
foreach($articles as $article) {
    $sitemap->add(
        url: route('articles.show', $article->slug),
        authorName: $article->authorName,
        title: $article->title,
        lastModificationDate: $article->updated_at,
        language: 'it',
    );
}

// Write sitemap to disk
$sitemap->writeToDisk();
```

Please remembed that Google News **does not accepts** news older than 2 days ([info](https://developers.google.com/search/docs/crawling-indexing/sitemaps/news-sitemap)). Please adapt your collection as well.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Stefano Novelli](https://github.com/The-3Labs-Team)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
