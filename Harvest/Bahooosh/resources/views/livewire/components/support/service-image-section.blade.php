<div>
    @if(!$is_edit)
        @if(!$blockForm->data['reverse'] ?? false)
            <div class="{{ $blockForm->data['class'] ?? '' }} w-full flex mt-8 flex-col items-center">
                <div class="title-website-s">
                    {!! $blockForm->data['icon'] !!}

                    <h2 class="relative">{{ $blockForm->data['title'] }}</h2>
                </div>
                <div class="show-desktop w-full">
                    <div class="w-full gap-3 mt-24 mb-12 grid grid-cols-2">
                        <div class="right w-full grid gap-2 grid-cols-2">
                            @foreach($blocks as $block)
                                <livewire:dynamic-component :is="$block->component_name" :key="$block->component_name"
                                                            :block="$block"/>
                            @endforeach
                        </div>
                        <div class="box-img flex justify-center  items-center  bg-white">
                            <img class="w-full h-full object-cover" src="{{ asset($blockForm->data['image_url']) }}"
                                 alt="">
                            {{--                            <h1 class="text-lg extraBold">...Cover image </h1>--}}
                        </div>
                    </div>
                </div>
                <div class="show-mobile w-full">
                    <div class="w-full gap-3 mt-10 mb-12 grid grid-cols-1">
                        <div class="box-img flex justify-center  items-center  bg-white">
                            <img class="w-full h-full object-cover" src="{{ asset($blockForm->data['image_url']) }}"
                                 alt="">
                            {{--                            <h1 class="text-lg extraBold">...Cover image </h1>--}}
                        </div>
                        <div class="right w-full grid gap-2 grid-cols-1">
                            @foreach($blocks as $block)
                                <livewire:dynamic-component :is="$block->component_name" :key="$block->component_name"
                                                            :block="$block"/>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        @else
            <div class="{{ $blockForm->data['class'] ?? '' }} w-full flex mt-12 flex-col items-center">
                <div class="title-website-s">
                    {!! $blockForm->data['icon'] !!}

                    <h2 class="relative">{{ $blockForm->data['title'] }}</h2>
                </div>
                <div class="show-desktop w-full">
                    <div class="w-full gap-3 mt-16 mb-12 grid grid-cols-2">
                        <div class="box-img flex justify-center  items-center  bg-white">
                            <img class="w-full h-full object-cover" src="{{ asset($blockForm->data['image_url']) }}"
                                 alt="">
                            {{--                        <h1 class="text-lg extraBold">...Cover image </h1>--}}
                        </div>
                        <div class="left w-full grid gap-2 grid-cols-2">
                            @foreach($blocks as $block)
                                <livewire:dynamic-component :is="$block->component_name" :key="$block->component_name"
                                                            :block="$block"/>
                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="show-mobile w-full">
                    <div class="w-full gap-3 mt-10 mb-12 grid grid-cols-1">
                        <div class="box-img flex justify-center  items-center  bg-white">
                            <img class="w-full h-full object-cover" src="{{ asset($blockForm->data['image_url']) }}"
                                 alt="">
                        </div>
                        <div class="right w-full grid gap-2 grid-cols-1">
                            @foreach($blocks as $block)
                                <livewire:dynamic-component :is="$block->component_name" :key="$block->component_name"
                                                            :block="$block"/>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        @endif
    @else
        <x-bahooosh::support.serviceimage-edit-form :$blockForm/>
    @endif
</div>
