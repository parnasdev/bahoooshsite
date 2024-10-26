@aware(['multiple' => false])
@props(['value' => '' , 'text' => '' , 'image' => ''])
@if(!$multiple)
    <div @click="$nextTick(e => {
        select = false;
        $dispatch('on-selected' , {value: @js($value) , text: @js($text)})
    })"
         class="item w-full px-3 h-[60px] border-b-2 border-gray-200 flex items-center justify-between">
        <h4 class="text-[13px] text-gray medium  m-0 p-0">{{ $text }}</h4>
        @empty($image)
        @else
            <img class="w-[45px] h-[45px] rounded-[50%]"
                 src="{{ asset($image) }}" alt="">
        @endempty

    </div>
@else
    <div
        class="item w-full px-3 h-[50px] border-b-2 border-gray-200 flex items-center justify-between">
        <div class="flex items-center" x-id="['input-checkbox']">
            <input :id="$id('input-checkbox')" type="checkbox" value="{{ $value }}"
                   @change="$nextTick(e => {
                        if ($el.checked) {
                            $dispatch('on-checked' , {value: @js($value) , text: @js($text)})
                        } else {
                            $dispatch('on-un-checked' , {value: @js($value) , text: @js($text)})
                        }
                   })"
                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label :for="$id('input-checkbox')"
                   class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $text }}</label>
        </div>
    </div>
@endif


