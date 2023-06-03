<?php

namespace The3LabsTeam\LaravelGooglenewsSitemap;

use Carbon\Carbon;
use Illuminate\Contracts\Container\BindingResolutionException;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use The3LabsTeam\LaravelGooglenewsSitemap\Tags\Tag;

class LaravelGooglenewsSitemap
{
    public array $tags = [];

    /**
     * Create a new instance of LaravelGooglenewsSitemap
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Add a new tag to the sitemap
     */
    public function add(
        string $url,
        string $authorName,
        string $title,
        Carbon|null $lastModificationDate,
        string|null $language,
    ): static {

        $tag = new Tag(
            $url,
            $authorName,
            $title,
            $lastModificationDate,
            $language
        );

        $this->tags[] = $tag;

        return $this;
    }

    /**
     * Write the sitemap to disk
     *
     * @throws BindingResolutionException
     * @throws NotFoundExceptionInterface
     * @throws ContainerExceptionInterface
     */
    public function writeToDisk(string $path = ''): void
    {
        $path = $path ?: config('googlenews-sitemap.path');
        file_put_contents(
            $path,
            $this->render()
        );
    }

    /**
     * Render the sitemap
     */
    public function render(): string
    {
        $tags = $this->tags;

        return view('googlenews-sitemap::sitemap')
            ->with(compact('tags'))
            ->render();
    }
}
