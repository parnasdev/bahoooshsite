<div {{ $attributes->whereDoesntStartWith('wire:click')->merge(['class' => 'c-btn']) }}>
    <a href="{{ $route ?? '#' }}" {{ $attributes->wire('click') }}
       class="ancher btn-effect bg-{{ $attributes['color'] ?? 'success' }} text-white radius-5">
        <div class="circle-solid top-right bg-white"></div>
        @if($icon ?? false)
            <x-utils.icons :icon="$icon ?? ''" :width="$iconWidth ?? 20" :height="$iconHeight ?? 20" />
        @endif

        {{ $slot ?? '' }}
    </a>
</div>
