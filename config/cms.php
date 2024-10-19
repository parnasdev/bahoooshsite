<?php

return [
    // dynamic component start with test::component-location
    'theme' => env('CMS_THEME', 'default'),
    // header component without package name
    'header_id' => env('HEADER_ID'),
    // footer component without package name
    'footer_id' => env('FOOTER_ID'),
    // route prefix for test ui
    'prefix_route' => 'pages'
];
