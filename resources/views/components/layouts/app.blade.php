<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        {!! \Artesaos\SEOTools\Facades\SEOTools::generate() !!}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        {{ $slot }}
        @livewire('wire-elements-modal')

    </body>
</html>
