
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    {!! \Artesaos\SEOTools\Facades\SEOTools::generate() !!}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="{{ $pageClass ?? '' }}">
    {{ $slot }}
</div>

@livewire('wire-elements-modal')


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>
</body>
</html>
