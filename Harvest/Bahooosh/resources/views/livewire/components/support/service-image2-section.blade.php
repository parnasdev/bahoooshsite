<div>
    @if(!$is_edit)
        <div class="{{ $block->data['class'] ?? '' }} sm:mt-28 max-[700px]:gap-4 flex max-[700px]:flex-col justify-between items-start">
            <div
                class="box-img md:ml-6 w-1/2 max-[700px]:w-full bg-white flex justify-center items-center relative overflow-hidden">
                <img class="w-full h-full object-cover" src="{{ asset($block->data['image_url']  ?? '') }}" alt="">
            </div>
            <div class="box-end w-1/2 max-[700px]:w-full flex flex-col items-start">
                <div class="title-website-s relative">
                    <h2>{{ $block->data['title']  ?? '' }}</h2>
                </div>
                <p class="text-small leading-5 text-gray text-justify mt-7">
                    {{ $block->data['description'] ?? '' }}
                </p>
                <div class="w-full">
                    <div class="w-full mt-12 grid md:grid-cols-2 max-[700px]:grid-cols-1 gap-2">
                        @foreach($blocks as $block)
                            <livewire:dynamic-component :is="$block->component_name" :key="$block->component_name"
                                                        :block="$block"/>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    @else
        <x-bahooosh::support.serviceimage2-edit-form :$blockForm/>
    @endif
</div>
