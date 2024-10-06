<div {{ $attributes->whereDoesntStartWith('wire:model')
->whereDoesntStartWith('value')
->whereDoesntStartWith('checked')
->merge(['class' => 'checkbox-list']) }}>
    @php(['value' => $value , 'checked' => $checked] = $attributes)
    <label class="checkbox mr-10 f-14">
        <input class="checkbox-input" x-ref="checkbox" type="checkbox"
               {{ $attributes->wire('model') }} {{ $attributes->wire('click') }}
            {{ ($value ?? false) ? 'value=' . $value : '' }}
        {{ $checked ? 'checked' : '' }}>
        <span class="checkbox-checkmark-box">
            <span class="checkbox-checkmark"></span>
        </span>
        @if($label ?? false)
            <span class="f-13">{{$label}}</span>
        @endif

    </label>
    @error($attributes->wire('model')->value)
    <span class="text-danger f-14 pt-7 m-left-auto">{{ $message }}</span>
    @enderror
</div>
