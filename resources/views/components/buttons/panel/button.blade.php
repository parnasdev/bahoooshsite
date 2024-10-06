<div {{ $attributes->whereDoesntStartWith('wire:click')->merge(['class' => 'c-btn']) }}>
    <button type="{{ $attributes['type'] ?? 'submit' }}" {{ $attributes->wire('click') }} wire:offline.attr="disabled"
            wire:loading.remove wire:target="{{ $attributes['target'] ?? 'submit' }}"
            class="btn btn-effect bg-{{$attributes['color'] ?? 'success'}} {{ ($btnfull ?? false) ? 'flex-100' : '' }} text-{{ $attributes['fcolor'] ?? 'white' }} radius-5">

        <div class="image tooltip d-flex cursor-pointer">
            {{ $content ?? $slot }}
            @if($tooltip ?? false)
                <div class="s-tooltip">
                    <span>{{$tooltip}}</span>
                </div>
            @endif
        </div>
        <div class="circle-solid up-line-right bg-white"></div>
    </button>
    <button type="button" disabled
            wire:loading wire:target="{{ $attributes['target'] ?? 'submit' }}"
            class="btn btn-effect bg-{{$attributes['color'] ?? 'success'}} {{ ($btnfull ?? false) ? 'flex-100' : '' }} text-{{ $attributes['fcolor'] ?? 'white' }}  radius-5">

        <div class="image tooltip d-flex cursor-pointer">
            <span class="f-13">کمی صبر کنید...</span>
            @if($tooltip ?? false)
                <div class="s-tooltip">
                    <span>{{$tooltip}}</span>
                </div>
            @endif
        </div>
        <div class="circle-solid up-line-right bg-white"></div>
    </button>
</div>
