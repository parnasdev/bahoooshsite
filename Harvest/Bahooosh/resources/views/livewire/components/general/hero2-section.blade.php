<div>
    @if(!$is_edit)
        <div class="{{ $block->data['class'] ?? '' }}">
            <div class="text-main max-[600px]:w-full flex gap-3 sm:w-full flex-col items-center w-1/2">
                <h1 class="text sm:text-xl md:text-xl lg:text-2xl xl:text-2xl extraBold">
                    {{ $block->data['title'] ?? '' }}
                </h1>
                <span class="text-gray-s text-small max-[600px]:w-full w-2/5 text-center medium">{{ $block->data['subtitle'] }}</span>
                @if(!empty($block->data['btn_text'] ?? ''))
                    @if(($block->data['btn_type'] ?? 1) == 1)
                        <x-buttons.home.button href="{{ $block->data['btn_link'] ?? '' }}" class="bg-black text-white hover:bg-white hover:text-black border-2 border-black max-[600px]:w-48 mt-2 w-64 gap-5">
                            {{ $block->data['btn_text'] ?? '' }}
                        </x-buttons.home.button>
                    @else
                        <x-buttons.home.button-o href="{{ $block->data['btn_link'] ?? '' }}" class="bg-white text-black hover:bg-black hover:text-white border-2 border-black mt-2 w-64 gap-5">
                            {{ $block->data['btn_text'] ?? '' }}
                        </x-buttons.home.button-o>
                    @endif
                @endif

            </div>
            @if($block->data['show_border'])
                <div class="border-row-one relative flex justify-content-end mt-16 mb-12 border-t-2 border-black">
                    <img width="110" src="{{ asset($block->data['image_url'] ?? '') }}" alt="" class="img-left absolute">
                    <img width="40" src="/img/view/png/img-arrow-right.png" alt=""
                         class="img-right top-0 right-2 absolute">
                </div>
            @endif
        </div>
    @else
        <x-bahooosh::general.hero2-edit-form :$blockForm/>
    @endif
</div>
