<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<?php echo '<?xml-stylesheet type="text/xsl" href="' . route('sitemap.main') . '"?>'; ?>

<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($data as $datum)
        @if($datum['lastMod'] <> null)
            <sitemap>
                <loc>{{ route($datum['route']) }}</loc>
                <lastmod>{{ $datum['lastMod'] }}</lastmod>
            </sitemap>
        @endif
    @endforeach
</sitemapindex>
