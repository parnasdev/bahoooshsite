<div
    {{ $attributes->whereDoesntStartWith('wire')->whereDoesntStartWith('placeholder')->merge(['class' => 'textarea w-full flex flex-col items-start justify-center']) }}
>
    <textarea class="w-full" {{ $attributes->whereStartsWith(['placeholder' , 'cols' , 'rows'])->merge(['placeholder' => $label ?? $attributes['placeholder']]) }} {{ $attributes->wire('model') }}></textarea>

    @error($attributes->wire('model')->value)
    <span class="text-[12px] mt-2 text-red-700 bolX">{{$message}}</span>
    @enderror
</div>
