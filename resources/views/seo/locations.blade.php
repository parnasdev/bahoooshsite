<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<?php echo '<?xml-stylesheet type="text/xsl" href="' . route('sitemap.main') . '"?>'; ?>
<kml xmlns="http://www.opengis.net/kml/2.2" xmlns:atom="http://www.w3.org/2005/Atom">
    <Document>
        <name>Locations for {{ $location['name'] ?? '' }}</name>
        <open>1</open>
        <Folder>
            <Placemark>
                <name><![CDATA[{{ $location['name'] ?? '' }}]]></name>
                <address><![CDATA[{{ $location['address'] ?? '' }}]]></address>
                <phoneNumber><![CDATA[{{ $location['tel'] ?? '' }}]]></phoneNumber>
                <atom:link href="{{ route('index') }}"/>
                <LookAt>
                    <latitude><![CDATA[{{ ($location['coordinates'][0] ?? '') }}]]></latitude>
                    <longitude><![CDATA[{{ ($location['coordinates'][1] ?? '') }}]]></longitude>
                </LookAt>
                <Point>
                </Point>
            </Placemark>
        </Folder>
    </Document>
</kml>
