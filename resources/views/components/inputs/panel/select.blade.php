@props(['options' => [] , 'label' => null , 'placeholder' => null , 'disabled' => false])
<div class="select-data {{ $attributes['parentClass'] ?? 'flex-100' }}" style="margin-bottom: 4px">
    <!-- parent -->
    <div class="flex-100 selective-custom justify-content-start">
        <!-- child -->
        @if($label ?? false)
            <div
                class="d-flex justify-content-start m-left-auto pos-relative pr-10">
                <label for="useData" class="d-flex f-14 text-63">
                    {{ $label }}
                    <div class="rx-title title-input pb-10">
                        <div class="p-rx">
                            <div class="rx-border-rectangle-after label-input">
                            </div>
                        </div>
                    </div>
                </label>
            </div>
        @endif
        <div {{ $attributes->whereDoesntStartWith('wire:model')->merge(['class' => 'select']) }}>
            <select {{ $attributes->wire('model') }} {{ $disabled ? 'disabled' : '' }}>
                @if($placeholder ?? false)
                    <option value="0">
                        {{ $placeholder ?? '' }}
                    </option>
                @endif

                @empty($options)
                    {{ $slot }}
                @else
                    @foreach ($options ?? [] as $key => $option)
                        <option value="{{ $key }}">
                            {{ __($option) }}
                        </option>
                    @endforeach

                @endempty
            </select>
        </div>
    </div>
    @error($attributes->wire('model')->value)
    <span class="text-danger f-14 pt-7 m-left-auto">{{ $message }}</span>
    @enderror
</div>
