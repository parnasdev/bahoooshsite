@if($attributes->has('href'))
    <a {{ $attributes->merge(['class' => 'btn-base-two']) }} target="{{ $traget ?? '' }}">
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => 'btn-base-two']) }}>
        {{ $slot }}
    </button>
@endif
