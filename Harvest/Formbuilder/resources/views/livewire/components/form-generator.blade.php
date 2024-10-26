<form class="{{ $class }}" wire:submit="submit">
    @foreach($inputs->sortBy('order_item') as $input)
        @if($input->component_type == \Harvest\Formbuilder\Enums\ComponentType::BUILDER)
            <div class=" w-full grid grid-cols-{{ $input->data['column'] }} gap-2">
                @foreach($input->children as $child)
                    <x-dynamic-component :component="$child->component_name"
                                         wire:model="inbox.{{ $child->input_name }}"
                                         label="{{ $child->input_label }}"
                    />
                @endforeach

            </div>
        @else
            <x-dynamic-component :component="$input->component_name"
                                 wire:model="inbox.{{ $input->input_name }}"
                                 label="{{ $input->input_label }}"
            />
        @endif

    @endforeach
    <x-buttons.home.button class="bg-black text-white hover:bg-white hover:text-black border-2 border-black mt-1 w-48 gap-5">
        {{ $form->btn_text }}
    </x-buttons.home.button>
</form>

