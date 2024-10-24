<div>
    @if(!$is_edit)
        <div class="show-desktop box-building {{ $block->data['class_desktop'] ?? '' }} bg-white w-full">
            <div class="floating-box flex flex-col items-center w-full ">
                <img class="img" style="scale: 0.9" width="80" src="{{ asset($block->data['image_url'] ?? '') }}" alt="">
                <h3 class="text-base bolX">{{ $block->data['title']  ?? '' }}</h3>
                <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                    {{ $block->data['description']  ?? '' }}
                </span>
            </div>

        </div>

        <div class="show-mobile box-building {{ $block->data['class_mobile'] ?? '' }} bg-white w-full">
            <div class="floating-box flex flex-col gap-4 items-center w-full ">
                <img class="img" width="70" src="{{ asset($block->data['image_url']  ?? '') }}" alt="">
                <div class="flex flex-col items-start w-4/5">
                    <h3 class="text-base bolX">{{ $block->data['title']  ?? '' }}</h3>
                    <span class="text-small text-gray w-10/12 mt-2 text-justify RaviBold">
                        {{ $block->data['description']  ?? '' }}
                    </span>
                </div>

            </div>
        </div>
    @else
        <x-bahooosh::support.servicebox-edit-form :$blockForm/>
    @endif
</div>
