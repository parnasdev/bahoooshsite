<div>
    @if(!$is_edit)
        @if($block->data['column'] == 2)
            <div class="{{ $block->data['class'] ?? '' }} grid grid-cols-2 w-full h-full">
                @foreach($blocks as $block)
                    <livewire:dynamic-component :is="$block->component_name" :key="$block->component_name"
                                                :block="$block"/>
                @endforeach
            </div>
        @elseif($block->data['column'] == 4)
            <div class="{{ $block->data['class'] ?? '' }} grid max-[600px]:grid-cols-1 gap-3 grid-cols-4">
                @foreach($blocks as $block)
                    <livewire:dynamic-component :is="$block->component_name" :key="$block->component_name"
                                                :block="$block"/>
                @endforeach
            </div>
        @elseif($block->data['column'] == 1)
            <div class="{{ $block->data['class'] ?? '' }} w-full flex-col">
                @foreach($blocks as $block)
                    <livewire:dynamic-component :is="$block->component_name" :key="$block->component_name"
                                                :block="$block"/>
                @endforeach
            </div>
        @endif

    @else
        <x-bahooosh::columns.edit-form :$blockForm/>
    @endif
</div>
