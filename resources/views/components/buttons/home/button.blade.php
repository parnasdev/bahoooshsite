@if($attributes->has('href'))
    <a {{ $attributes->merge(['class' => 'btn-base ']) }} target="{{ $traget ?? '' }}">
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => 'btn-base ']) }}>
        {{ $slot }}
    </button>
@endif
