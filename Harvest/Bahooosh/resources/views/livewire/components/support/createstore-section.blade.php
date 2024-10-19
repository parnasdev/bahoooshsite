<div>
    @if(!$is_edit)
        @php($chunk = collect($block->data['steps'])->chunk(3))
        <div class="p-create-store w-full flex flex-col items-center">
            <div class="title-website">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 31.696 29.055">
                    <path id="fi-rr-desktop-wallpaper"
                          d="M6.6,8.264a1.981,1.981,0,1,1,1.981,1.981A1.978,1.978,0,0,1,6.6,8.264ZM31.7,7.6V18.169a6.606,6.606,0,0,1-6.6,6.6H17.169v2.641h5.283a1.321,1.321,0,1,1,0,2.641H9.245a1.321,1.321,0,1,1,0-2.641h5.283V24.772H6.6a6.606,6.606,0,0,1-6.6-6.6V7.6A6.606,6.606,0,0,1,6.6,1H25.093A6.606,6.606,0,0,1,31.7,7.6ZM2.641,18.169a3.987,3.987,0,0,0,.9,2.509l7.832-7.832a4.464,4.464,0,0,1,6.313,0l.832.845a1.817,1.817,0,0,0,2.575,0l7.634-7.633A3.977,3.977,0,0,0,25.08,3.641H6.6A3.974,3.974,0,0,0,2.641,7.6Zm26.414,0v-8.7l-6.088,6.088a4.464,4.464,0,0,1-6.313,0l-.832-.845a1.817,1.817,0,0,0-2.575,0L5.9,22.052a4.088,4.088,0,0,0,.713.066H25.106a3.974,3.974,0,0,0,3.962-3.962Z"
                          transform="translate(0 -1)"/>
                </svg>


                <h2>فروشگاه خود را بسازید و فروش را شروع کنید!</h2>
            </div>
            <div class="show-desktop w-full">
                <div class="list-create-store relative flex justify-center flex-col w-100">
                    <div class="img-between-rotate absolute">
                        <img width="150" src="/img/view/png/line-between-rotate.png" alt="">
                    </div>
                    @foreach($chunk as $key => $items)
                        <div class="{{ $key == 0 ? 'top-list' : 'bottom-list' }} mt-8 flex justify-between w-full items-center">
                            @foreach($items as $index => $item)
                                @if($index != 0 && $index != 3)
                                    <img width="110" src="/img/view/png/arrow-between-to.png" alt="">
                                @endif
                                <div class="item-store flex flex-col items-center">
                                    <div class="p-number mb-3 w-full flex items-center justify-between">
                                        <strong class="bolX mr-3 text-5xl mt-4">{{ $index + 1 }}</strong>
                                        <img class="ml-3" width="40" src="{{ $item['image_url'] }}" alt="">
                                    </div>
                                    <h3 class="text-base fs-16 bolX">{{ $item['title'] }}</h3>
                                    <span class="text-gray text-small RaviBold text-center mt-3">{{ $item['description'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="show-mobile w-full">
                <div class="list-create-store relative flex justify-center flex-col w-100">
                    @foreach($chunk as $key => $items)
                        <div class="{{ $key == 0 ? 'top-list' : 'bottom-list' }} mt-8 flex flex-col justify-between w-full items-center">
                            @foreach($items as $index => $item)
                                <div class="item-store {{ $index != 0 && $index !== 3 ? 'mt-7' : '' }} flex flex-col items-center">
                                    <div class="p-number mb-3 w-full flex items-center justify-between">
                                        <strong class="bolX mr-3 text-5xl mt-4">{{ $index + 1 }}</strong>
                                        <img class="ml-3" width="40" src="{{ $item['image_url'] }}" alt="">
                                    </div>
                                    <h3 class="text-base fs-16 bolX">{{ $item['title'] }}</h3>
                                    <span class="text-gray text-small RaviBold text-center mt-3">{{ $item['description'] }}</span>
                                </div>
                                @if($index != 5)
                                    @if(($index + 1) % 2 == 0)
                                        <div class="img-arrow-right w-full flex justify-end relative">
                                            <img class="absolute right-0" width="35" src="img/view/svg/img-arrow-right.svg"
                                                 alt="">
                                        </div>
                                    @else
                                        <div class="img-arrow-left w-full flex justify-end relative">
                                            <img class="absolute left-0" width="35" src="img/view/svg/img-arrow-left.svg"
                                                 alt="">
                                        </div>
                                    @endif
                                @endif

                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>


            <x-buttons.home.button href="{{ $block->data['btn_link'] }}" class="bg-black text-white hover:bg-white hover:text-black border-2 border-black md:mt-9  btn-base-create-store gap-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 28.057 30.608">
                    <path id="fi-rr-mug-hot"
                          d="M24.594,12.753h-.638V11.478A3.826,3.826,0,0,0,20.13,7.652H4.826A3.826,3.826,0,0,0,1,11.478V24.231a6.384,6.384,0,0,0,6.377,6.377h10.2a6.388,6.388,0,0,0,6.249-5.1,4.591,4.591,0,0,0,5.229-4.464V17.217A4.464,4.464,0,0,0,24.594,12.753Zm-7.014,15.3H7.377a3.826,3.826,0,0,1-3.826-3.826V11.478A1.275,1.275,0,0,1,4.826,10.2h15.3a1.275,1.275,0,0,1,1.275,1.275V24.231a3.826,3.826,0,0,1-3.826,3.826Zm8.927-7.014a2.067,2.067,0,0,1-2.551,1.913V15.3a2.067,2.067,0,0,1,2.551,1.913ZM11.2,3.826V1.275a1.275,1.275,0,1,1,2.551,0V3.826a1.275,1.275,0,1,1-2.551,0Zm5.1,0V1.275a1.275,1.275,0,1,1,2.551,0V3.826a1.275,1.275,0,1,1-2.551,0Zm-10.2,0V1.275a1.275,1.275,0,1,1,2.551,0V3.826a1.275,1.275,0,1,1-2.551,0Z"
                          transform="translate(-1)" fill="#fff"/>
                </svg>

                {{ $block->data['btn_text'] }}
            </x-buttons.home.button>
        </div>
    @else
        <x-bahooosh::support.createstore-edit-form :$blockForm/>
    @endif
</div>
