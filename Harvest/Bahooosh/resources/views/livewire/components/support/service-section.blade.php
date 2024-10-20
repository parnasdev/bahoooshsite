<div>
    @if(!$is_edit)
        <div class="{{ $block->data['class'] ?? '' }}">
            <div class="title-website-s">
                {!! $block->data['icon'] ?? '' !!}
                <h2 class="relative">
                    {{ $block->data['title'] ?? '' }}
                </h2>
            </div>
            <div class="list-building grid max-[600px]:grid-cols-1   gap-3 grid-cols-4 mb-5 px-4 mt-20">
                @foreach($blocks as $block)
                    <livewire:dynamic-component :is="$block->component_name" :key="$block->component_name"
                                                :block="$block"/>
                @endforeach
            </div>
        </div>
    @else
        <x-bahooosh::support.service-edit-form :$blockForm/>
    @endif
</div>
