<div>
    @if(!$is_edit)
        <div class="{{ $blockForm->data['class'] ?? '' }} grid grid-cols-2 w-full h-full">
            @foreach($blocks as $block)
                <livewire:dynamic-component :is="$block->component_name" :key="$block->component_name" :block="$block"/>
            @endforeach
        </div>
    @else
        <x-bahooosh::columns.edit-form :$blockForm/>
    @endif
</div>
