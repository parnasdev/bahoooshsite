@php

@endphp

@if($attributes->has('href'))
    <a {{ $attributes->merge(['class' => 'btn-base ']) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => 'btn-base ']) }}>
        {{ $slot }}
    </button>
@endif
