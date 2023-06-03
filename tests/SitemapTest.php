<?php

use The3LabsTeam\LaravelGooglenewsSitemap\LaravelGooglenewsSitemap;

it('can add an url in sitemap', function () {
    $sitemap = LaravelGooglenewsSitemap::create();
    $sitemap->add(
        'https://example.com',
        'Author 1',
        'First Post',
        now(),
        'en'
    );
    expect($sitemap->tags)->toHaveCount(1);
});

it('can add an url even if there is no last modification date', function () {
    $sitemap = LaravelGooglenewsSitemap::create();
    $sitemap->add(
        'https://example.com',
        'Author 1',
        'First Post',
        null,
        'en'
    );
    expect($sitemap->tags)->toHaveCount(1);
});

it('can add an url even if there is no language', function () {
    $sitemap = LaravelGooglenewsSitemap::create();
    $sitemap->add(
        'https://example.com',
        'Author 1',
        'First Post',
        now(),
        null
    );
    expect($sitemap->tags)->toHaveCount(1);
});

it('can add multiple urls in sitemap', function () {
    $sitemap = LaravelGooglenewsSitemap::create();

    $sitemap->add(
        'https://example.com',
        'Author 1',
        'First Post',
        now(),
        'en'
    );

    $sitemap->add(
        'https://example.com',
        'Author 1',
        'First Post',
        now(),
        'en'
    );

    expect($sitemap->tags)->toHaveCount(2);
});

it('can write a sitemap in disk', function () {
    $sitemap = LaravelGooglenewsSitemap::create();

    $sitemap->add(
        'https://example.com',
        'Author 1',
        'First Post',
        now(),
        'en'
    );

    $sitemap->writeToDisk();

    expect(file_exists(config('googlenews-sitemap.path')))->toBeTrue();

});

it('can write a sitemap in different path', function () {
    $sitemap = LaravelGooglenewsSitemap::create();

    $sitemap->add(
        'https://example.com',
        'Author 1',
        'First Post',
        now(),
        'en'
    );

    $sitemap->writeToDisk('tests/sitemap.xml');

    expect(file_exists('tests/sitemap.xml'))->toBeTrue();

});

it('can write and render a sitemap', function () {
    $sitemap = LaravelGooglenewsSitemap::create();

    $sitemap->add(
        'https://example.com',
        'Author 1',
        'First Post',
        now(),
        'en'
    );

    $sitemap->add(
        'https://example.com',
        'Author 1',
        'First Post',
        now(),
        'en'
    );

    $sitemap->writeToDisk();

    expect($sitemap->render())
        ->toContain('<urlset')
        ->toContain('</urlset>')
        ->toContain('<url>')
        ->toContain('</url>')
        ->toContain('<loc>https://example.com</loc>')
        ->toContain('<news:news>')
        ->toContain('</news:news>')
        ->toContain('<news:publication>')
        ->toContain('</news:publication>')
        ->toContain('Author 1')
        ->toContain('en')
        ->toContain('First Post')
        ->toContain('<news:publication_date>')
        ->toContain('</news:publication_date>');

});
