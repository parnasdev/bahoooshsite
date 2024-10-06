<div {{ $attributes->whereDoesntStartWith('wire:model')->merge(['class' => 'c-input']) }}
     x-data="{
        wireModel: @entangle($attributes->wire('model')),
        value: '',
        init() {
            $watch('value' , value => {
                if (value !== '' || value !== undefined) {
                    this.wireModel = value?.split(',').join('');
                }
            })

            if (this.wireModel !== '' || this.wireModel !== undefined || this.wireModel !== null) {
                this.value = new Intl.NumberFormat('en').format(this.wireModel)

                $watch('wireModel' , value => {
                if (value !== '' || value !== undefined) {
                    this.value = new Intl.NumberFormat('en').format(value);
                }
                })
            }
        }
    }">
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
    @empty($icon)
    @else
        <x-utils.icons :icon="$icon"/>
    @endempty
    <!-- text -->
    <input type="text" class="border-light"
           x-mask:dynamic="$money($input)"
           x-model="value"
           {{ ($disabled  ?? false) ? 'disabled': '' }}
           placeholder="{{ $attributes['placeholder'] ?? '' }}"
        {{ $attributes->wire('change') }}>
    @error($attributes->wire('model')->value)
    <span class="text-danger f-14 pt-7 m-left-auto">{{ $message }}</span>
    @enderror
    @if($hint ?? false)
        <span class="text-gray f-12 pt-7 m-left-auto">{{ $hint }}</span>
    @endif
</div>
