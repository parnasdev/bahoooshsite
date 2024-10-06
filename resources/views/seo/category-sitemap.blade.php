<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<?php echo '<?xml-stylesheet type="text/xsl" href="' . route('sitemap.main') . '"?>'; ?>

<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
        xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    @foreach($categories as $category)
        <url>
            <loc>{{ $category['url'] }}</loc>
            <lastmod>{{ $category['lastMod'] }}</lastmod>
            <changeefreq>daily</changeefreq>
            <priority>1.0</priority>
        </url>
    @endforeach

</urlset>
