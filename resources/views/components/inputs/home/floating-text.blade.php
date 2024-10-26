<div x-data="{inp:false}" :class="inp===true? 'active-border':'deactive-border'"
     {{ $attributes->whereDoesntStartWith(['wire' , 'placeholder' , 'type'])->merge(['class' => 'inp-full w-full bg-white flex flex-col items-start justify-center']) }}
     x-id="['text-input']">
    <label @click="inp=true ; $nextTick(() => { $refs.input.focus(); })" :class="inp === true ? 'labelUp':'labeDown bolX'"
           class="text-light p-x-2 text-normal " :for="$id('text-input')">{{ $label ?? '' }}</label>
    <input x-ref="input" class="mt-3 text-normal" :id="$id('text-input')" style="display: none"
           @click.outside="$el.value.length > 1 ? inp= true :inp=false" x-show="inp"
           x-transition {{ $attributes->whereStartsWith('type')}} {{ $attributes->wire('model')  }}>
    @error($attributes->wire('model')->value)
    <span class="text-sm text-red-600 mt-3 relative">{{ $message }}</span>
    @enderror
</div>

