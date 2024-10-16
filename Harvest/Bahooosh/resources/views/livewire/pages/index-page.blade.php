<div>
    <div class="index-page">
        @foreach($blocks->sortBy('order_item') as $block)
            <livewire:dynamic-component :is="$block->component_name" :key="$block->component_name" :block="$block"/>
        @endforeach
    </div>
</div>
