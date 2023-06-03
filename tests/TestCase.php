<?php

namespace The3LabsTeam\LaravelGooglenewsSitemap\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use The3LabsTeam\LaravelGooglenewsSitemap\LaravelGooglenewsSitemapServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'The3LabsTeam\\LaravelGooglenewsSitemap\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelGooglenewsSitemapServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-googlenews-sitemap_table.php.stub';
        $migration->up();
        */
    }
}
