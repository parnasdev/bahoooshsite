<div>
    @if(!$is_edit)
        <section class="{{ $block->data['class'] ?? '' }}">
            <div class=" prs-container">
                @foreach($blocks as $block)
                    <livewire:dynamic-component :is="$block->component_name" :key="$block->component_name" :block="$block" />
                @endforeach
            </div>
        </section>
    @else
        <x-bahooosh::section.edit-form :$blockForm />
    @endif
</div>
