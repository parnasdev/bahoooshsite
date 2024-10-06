@props(['label' => null , 'placeholder' => null , 'disabled' => false])
<div class="c-input input-number-wrapper {{ $attributes['class'] }}" x-data="{
                                num: @entangle($attributes->wire('model')),
                                incInputNumber(step) {

                                    if (!$refs.numInput.disabled) {
                                        let val = +$refs.numInput.value;

                                        if (isNaN(val)) val = 0
                                        val += +step;

                                        if ($refs.numInput.max && val > $refs.numInput.max) {
                                            val = $refs.numInput.max;
                                        } else if ($refs.numInput.min && val < $refs.numInput.min) {
                                            val = $refs.numInput.min;
                                        } else if (val < 0) {
                                            val = 0;
                                        }

                                        this.num = val
                                        console.log(this.num)
                                    }

                                }

                            }">
    @if($label ?? false)
        <div class="d-flex justify-content-start m-left-auto pos-relative pr-5">
            <label for="useData" class="d-flex f-14 text-63">
                {{ $label ?? '' }}
                <div class="rx-title title-input pb-10">
                    <div class="p-rx">
                        <div class="rx-border-rectangle-after label-input"></div>
                    </div>
                </div>
            </label>
        </div>
    @endif
    <input type="number" x-model="num" x-ref="numInput" {{ $attributes->whereDoesntStartWith('wire:model')->whereDoesntStartWith('class') }}
           placeholder="{{ $placeholder ?? '' }}" {{ ($disabled ?? false) ? 'disabled' : '' }}>
    <div class="controller-number">
        <div class="increase d-flex image cursor-pointer mb-3" @click="incInputNumber(1)">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <rect x="0.5" y="0.5" width="15" height="15"
                      rx="2.5" stroke="#CCD2E3" stroke-opacity="1.5"></rect>
                <path d="M4 8H12" stroke="#CCD2E3" stroke-opacity="1.5"
                      stroke-linecap="round"></path>
                <line x1="8" y1="4.5" x2="8" y2="11.5"
                      stroke="#CCD2E3" stroke-opacity="1.5" stroke-linecap="round"></line>
            </svg>
        </div>
        <div class="decrease d-flex image cursor-pointer mb-3" @click="incInputNumber(-1)">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <rect x="0.5" y="0.5" width="15" height="15"
                      rx="2.5" stroke="#CCD2E3" stroke-opacity="1.5"></rect>
                <line x1="4.5" y1="8.5" x2="11.5" y2="8.5"
                      stroke="#CCD2E3" stroke-opacity="1.5" stroke-linecap="round">
                </line>
            </svg>
        </div>
    </div>
    @error($attributes->wire('model')->value)
    <p class="text-danger alert-invalid f-14">{{ $message }}</p>
    @enderror
</div>
