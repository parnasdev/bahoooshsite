@props(['options' => [] , 'label' => null , 'placeholder' => null , 'disabled' => false])
<select {{ $attributes->wire('model') }} {{ $disabled ? 'disabled' : '' }} x-data="{
                init() {
                    const choices = new Choices($el)
                }
            }">
    @if($options)
        @if($placeholder ?? false)
            <option value="0">
                {{ $placeholder ?? '' }}
            </option>
        @endif

        @foreach ($options ?? [] as $key => $option)
            <option value="{{ $key }}">
                {{ __($option) }}
            </option>
        @endforeach
    @else
        {{ $slot }}
    @endif

</select>
@error($attributes->wire('model')->value)
<span class="text-danger f-14 pt-7 m-left-auto">{{ $message }}</span>
@enderror
