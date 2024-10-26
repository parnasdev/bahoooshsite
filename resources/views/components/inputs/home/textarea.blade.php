<div
    {{ $attributes->whereDoesntStartWith('wire')->whereDoesntStartWith('placeholder')->merge(['class' => 'textarea w-full flex flex-col items-start justify-center']) }}
>
    <textarea class="w-full" {{ $attributes->whereStartsWith(['placeholder' , 'cols' , 'rows'])->merge(['placeholder' => $label ?? $attributes['placeholder']]) }} {{ $attributes->wire('model') }}></textarea>

    @error($attributes->wire('model')->value)
    <span class="text-sm text-red-600">{{ $message }}</span>
    @enderror
</div>
