<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:news="http://www.google.com/schemas/sitemap-news/0.9">

    @foreach ($tags as $tag)
        <url>
            <loc>{{ $tag->url }}</loc>
            <news:news>
                <news:publication>
                    <news:name>
                        {{ $tag->authorName }}
                    </news:name>
                    <news:language>
                        {{ $tag->language }}
                    </news:language>
                </news:publication>
                <news:publication_date>
                    {{ $tag->lastModificationDate }}
                </news:publication_date>
                <news:title>
                    {{ $tag->title }}
                </news:title>
            </news:news>
        </url>
    @endforeach

</urlset>
