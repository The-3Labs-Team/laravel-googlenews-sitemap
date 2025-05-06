<p align="center"><img src="https://github.com/the-3labs-team/laravel-googlenews-sitemap/raw/HEAD/art/banner.png" width="100%" alt="Logo Laravel Shortcode Plus"></p>

# Laravel Google News (GNews) Sitemap

[![Latest Version on Packagist](https://img.shields.io/packagist/v/the-3labs-team/laravel-googlenews-sitemap.svg?style=flat-square)](https://packagist.org/packages/the-3labs-team/laravel-googlenews-sitemap)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/the-3labs-team/laravel-googlenews-sitemap/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/the-3labs-team/laravel-googlenews-sitemap/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Github PHPStan](https://img.shields.io/github/actions/workflow/status/the-3labs-team/laravel-googlenews-sitemap/phpstan.yml?branch=main&label=phpstan&style=flat-square)](https://github.com/the-3labs-team/laravel-googlenews-sitemap/actions?query=workflow%3Aphpstan+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/the-3labs-team/laravel-googlenews-sitemap/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/the-3labs-team/laravel-googlenews-sitemap/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Maintainability](https://api.codeclimate.com/v1/badges/22028e79c4aa8a329bd5/maintainability)](https://codeclimate.com/github/The-3Labs-Team/laravel-googlenews-sitemap/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/22028e79c4aa8a329bd5/test_coverage)](https://codeclimate.com/github/The-3Labs-Team/laravel-googlenews-sitemap/test_coverage)
![License Mit](https://img.shields.io/github/license/murdercode/laravel-shortcode-plus)
[![Total Downloads](https://img.shields.io/packagist/dt/the-3labs-team/laravel-googlenews-sitemap.svg?style=flat-square)](https://packagist.org/packages/the-3labs-team/laravel-googlenews-sitemap)

This package helps you to create a [Google News Sitemap](https://developers.google.com/search/docs/crawling-indexing/sitemaps/news-sitemap). It is useful when you have a blog/news website and you are involved in [Google Published Center](https://publishercenter.google.com).

Don't forget to create your Google News Sitemap and submit it in [Google Search Console](https://search.google.com/search-console/about), as a standard sitemap.

## Prerequisites

-   PHP 8.1 or higher
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

You can use it as a scheduled command, observer etc...

**Note**: according to ([Google](https://developers.google.com/search/docs/crawling-indexing/sitemaps/news-sitemap)), you should provide articles that are:

-   No older than 2 days
-   No more than 60 items

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

## Sponsor

<div>  
    <a href="https://www.tomshw.it/" target="_blank" rel="noopener noreferrer">
        <img  src="https://3labs-assets.b-cdn.net/assets/logos/banner-github/toms.png" alt="Tom's Hardware - Notizie, recensioni, guide all'acquisto e approfondimenti per tutti gli appassionati di computer, smartphone, videogiochi, film, serie tv, gadget e non solo" />  
    </a>
    <a href="https://spaziogames.it/" target="_blank" rel="noopener noreferrer" >
        <img src="https://3labs-assets.b-cdn.net/assets/logos/banner-github/spazio.png" alt="Spaziogames - Tutto sul mondo dei videogiochi. Troverai tantissime anteprime, recensioni, notizie dei giochi per tutte le console, PC, iPhone e Android." />
    </a>
    <br/>
    <a href="https://cpop.it/" target="_blank" rel="noopener noreferrer" >
        <img src="https://3labs-assets.b-cdn.net/assets/logos/banner-github/cpop.png" alt="Cpop - News, recensioni, guide su fumetto, cinema & serie TV, gioco da tavolo e di ruolo e collezionismo. Tutto quello di cui hai bisogno per rimanere aggiornato sul mondo della cultura pop"/>
    </a>
    <a href="https://data4biz.com/" target="_blank" rel="noopener noreferrer" >
        <img src="https://3labs-assets.b-cdn.net/assets/logos/banner-github/d4b.png" alt="Data4Biz - Sito dedicato alla trasformazione digitale del business" />
    </a>
    <br/>
    <a href="https://soshomegarden.com/" target="_blank" rel="noopener noreferrer" >
        <img src="https://3labs-assets.b-cdn.net/assets/logos/banner-github/sos.png" alt="SOS Home & Garden - Realtà dedicata a 360 gradi ai settori della casa e del giardino." />
    </a>
    <a href="https://global.techradar.com/it-it" target="_blank" rel="noopener noreferrer" >
        <img src="https://3labs-assets.b-cdn.net/assets/logos/banner-github/techradar.png" alt="Techradar - Le ultime notizie e recensioni dal mondo della tecnologia, su computer, sistemi per la casa, gadget e altro." />
    </a>
    <br/>
    <a href="https://aibay.it/" target="_blank" rel="noopener noreferrer" >
        <img src="https://3labs-assets.b-cdn.net/assets/logos/banner-github/aibay.png" alt="Aibay - Scopri AiBay, il leader delle notizie sull'intelligenza artificiale. Resta aggiornato sulle ultime innovazioni, ricerche e tendenze del mondo AI con approfondimenti, interviste esclusive e analisi dettagliate." />
    </a>
    <a href="https://coinlabs.it/" target="_blank" rel="noopener noreferrer" >
        <img src="https://3labs-assets.b-cdn.net/assets/logos/banner-github/coinlabs.png" alt="Coinlabs - Notizie, analisi approfondite, guide e opinioni aggiornate sul mondo delle criptovalute, blockchain e finanza" />
    </a>

</div>

