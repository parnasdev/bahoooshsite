@props(['multiple' => false])
<div class="flex w-full flex-col items-start">
@if(!$multiple)
    <div
        {{ $attributes->only('class')->merge(['class' => 'w-full cursor-pointer relative bg-white selectBase flex flex-col px-2  rounded-[10px]']) }}
        x-data="{
            select:false,
            placeholder: @js($attributes['placeholder'] ?? $attributes['label'] ?? ''),
            text: '',
            value: '',
            onSelected(event) {
                let { value , text} = event.detail

                this.text = text
                this.value = value

                $wire.set('{{$attributes->wire('model')->value}}' , this.value)
            }
        }" @on-selected="onSelected">
        <div @click="select=true"
             class="head w-full h-[50px] flex justify-between items-center">
            <h4 x-show="text.length > 0" x-text="text" class="text-dark bolX text-[13px]"></h4>
            <h4 x-show="text.length == 0" x-text="placeholder" class="text-light bolX text-[13px]"></h4>
            <input type="hidden" x-model="value">
            <svg class="transition ease-in-out" :class="select && 'rotate-180'"
                 xmlns="http://www.w3.org/2000/svg" width="13" height="7"
                 viewBox="0 0 16.854 8.635">
                <path id="fi-rr-angle-small-right"
                      d="M16.683,10.874,11.158,5.349a1.2,1.2,0,1,0-1.7,1.709L15,12.572a1.2,1.2,0,0,1,0,1.709L9.46,19.794a1.2,1.2,0,0,0,1.7,1.709l5.525-5.525A3.611,3.611,0,0,0,16.683,10.874Z"
                      transform="translate(21.853 -9.104) rotate(90)"/>
            </svg>
        </div>
        <div class="absolute top-[55px] z-10 right-0  w-full" style="display: none"
             @click.outside="select=false"
             x-collapse.duration.500ms x-show="select">
            <div
                class="w-full flex flex-col shadow-md overflow-y-auto bg-white h-[270px] rounded-[10px]">
                    {{ $slot }}
            </div>
        </div>

    </div>
@else
    <div
        class="w-full cursor-pointer relative bg-white selectBase flex flex-col px-2  rounded-[10px]"
        x-data="{
            multiSelect:false,
            placeholder: @js($attributes['placeholder'] ?? $attributes['label'] ?? ''),
            text: [],
            value: [],
            get displayedItems() {
                if (this.text.length > 3) {
                    return `${this.text.slice(0, 3).join(', ')} (${this.text.length - 3}  مورد دیگر)`;
                }
                return this.text.join(', ');
            },
            onChecked(event) {
                let { value , text} = event.detail

                this.value.push(value)

                this.text.push(text)
            },
            onUnChecked(event) {
                let { value, text } = event.detail;
                let index = this.text.indexOf(text);
                if (index !== -1) this.text.splice(index, 1);

                index = this.value.indexOf(value);
                if (index !== -1) this.value.splice(index, 1);
            }

        }"  @on-checked="onChecked" @on-un-checked="onUnChecked">
        <div @click="multiSelect=!multiSelect"
             class="head w-full h-[50px] flex justify-between items-center">
            <input type="hidden" x-model="value" {{ $attributes->wire('model') }}>
            <h4 x-show="text.length > 0" x-text="displayedItems" class="text-dark bolX text-[13px]"></h4>
            <h4 x-show="text.length == 0" x-text="placeholder" class="text-light bolX text-[13px]"></h4>
            <svg class="transition ease-in-out" :class="multiSelect ? 'rotate-180 ':''"
                 xmlns="http://www.w3.org/2000/svg" width="13" height="7"
                 viewBox="0 0 16.854 8.635">
                <path id="fi-rr-angle-small-right"
                      d="M16.683,10.874,11.158,5.349a1.2,1.2,0,1,0-1.7,1.709L15,12.572a1.2,1.2,0,0,1,0,1.709L9.46,19.794a1.2,1.2,0,0,0,1.7,1.709l5.525-5.525A3.611,3.611,0,0,0,16.683,10.874Z"
                      transform="translate(21.853 -9.104) rotate(90)"/>
            </svg>
        </div>
        <div class="absolute top-[55px] z-10 right-0  w-full" style="display: none"
             @click.outside="multiSelect=false"
             x-collapse.duration.500ms x-show="multiSelect">
            <div
                class="w-full flex flex-col shadow-md overflow-y-auto bg-white h-[270px] rounded-[10px]">
                {{ $slot }}
            </div>

        </div>
    </div>
@endif
    @error($attributes->wire('model')->value)
    <span class="text-[12px] mt-2 text-red-700 bolX">{{$message}}</span>
    @enderror
</div>


