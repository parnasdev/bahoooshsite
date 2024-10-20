<div>
    @if(!$is_edit)
        <div class="{{ $block->data['class'] }} w-full flex mt-12 flex-col items-center">
            <div class="title-website-s">
                {!! $block->data['icon'] !!}


                <h2 class="relative">{{ $block->data['title'] }}</h2>
            </div>
            <div class="list-extensions mb-12 mt-10 w-full grid grid-cols-4 gap-2">
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
