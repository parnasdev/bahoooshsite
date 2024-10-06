<div {{ $attributes->whereDoesntStartWith('wire:model') }} x-data="{
    data: @entangle($attributes->wire('model')->value)
}">
    <span class="f-13 pb-5" style="margin-top: 17px;">{{ $rightLabel ?? '' }}</span>
    <label for="" class="f-12 mr-5 ml-5">
        <input class="ios-switch" type="checkbox" value="true" :style="{backgroundColor: data === true ? '#012a53': '#eee'}"
               {{ $attributes->wire('model') }}>
    </label>
    <span class="f-13 pb-5" style="margin-top: 17px;">{{ $leftLabel ?? '' }}</span>
</div>
