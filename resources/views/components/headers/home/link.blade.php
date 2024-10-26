@props(['link' => null])

@if($link->is_link)
    <a {{ $attributes->only('class') }} href="{{ $link->linktable?->path() ?? $link->href }}">
        @empty($link->icon)
        @else
            <x-utils.icons :icon="$link->icon" fill="#000" />
        @endempty
        {{ $link->title }}
    </a>
@else
    <a {{ $attributes->only('class') }}>
        @empty($link->icon)
        @else
            <x-utils.icons :icon="$link->icon" fill="#000" />
        @endempty
        {{ $link->title }}
    </a>
@endif
