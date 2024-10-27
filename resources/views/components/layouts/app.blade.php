
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/swiper@11/swiper-bundle.min.css"/>
    <meta name="csrf_token" content="{{ csrf_token() }}"/>
    {!! \Artesaos\SEOTools\Facades\SEOTools::generate() !!}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="{{ $class ?? '' }}">
    {{ $slot }}
</div>

@livewire('wire-elements-modal')


<script src="/assets/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>
