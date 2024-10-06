<div {{ $attributes->whereDoesntStartWith('wire:model')->merge(['class' => 'c-input']) }}>
    @if($label ?? false)
        <div class="d-flex justify-content-start m-left-auto pos-relative pr-5">
            <label class="d-flex f-14 text-63">
                {{$label}}
                <div class="rx-title title-input pb-10">
                    <div class="p-rx">
                        <div class="rx-border-rectangle-after label-input"></div>
                    </div>
                </div>
            </label>
        </div>
    @endif

    <!-- text -->
    <input type="password" class="border-light" {{ $attributes->wire('model') }}
    placeholder="{{ $attributes['placeholder'] ?? '' }}">
    @error($attributes->wire('model')->value)
    <span class="text-danger f-14 pt-7 m-left-auto">{{ $message }}</span>
    @enderror
</div>
