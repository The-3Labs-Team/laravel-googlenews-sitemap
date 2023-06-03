<?php

namespace The3LabsTeam\LaravelGooglenewsSitemap\Tags;

use Carbon\Carbon;

class Tag
{
    public function __construct(
        public string $url,
        public string $authorName,
        public string $title,
        public string|null $lastModificationDate,
        public string|null $language = 'en',
    ) {

        // If no last modification date is provided, use the current date
        if (empty($lastModificationDate)) {
            $lastModificationDate = Carbon::now();
        }

        // Convert the date to W3C format
        $this->lastModificationDate = Carbon::parse($lastModificationDate)->toIso8601String();
    }
}
