@props(['disabled' => false , 'model' => null , 'value' => null , 'eventName' => '' , 'options' => []])

<div class="select c-s h-2percent-3rem w-100 mx-10" x-data="">
    <select class="radius-7"
            {{ $disabled ? 'disabled' : '' }}
            @change="$dispatch('{{$eventName}}' , {id: '{{$model->id}}' ,value: $el.value})">
        @foreach ($options as $key => $option)
            <option value="{{ $key }}"
                {{ $value == $key ? 'selected' : '' }}
            >
                {{ __($option) }}
            </option>
        @endforeach
    </select>
</div>
