<div>
    @if(!$is_edit)
        <div class="p-plans">
            <div class="title-website">
                {!! $block->data['icon'] ?? '' !!}
                <h2>{{ $block->data['title'] }}</h2>
            </div>
            <div class="show-desktop">
                <div class="list-plans mx-auto mt-14 mb-6 w-11/12 grid grid-cols-3 gap-3">
                    @foreach($block->data['plans'] as $plan)
                        <div
                            class="thumbnail-plan {{ $plan['is_special'] ? 'thumbnail-plan-special' : '' }} bg-white flex flex-col items-center justify-start relative">
                            <div class="polygon-circle flex items-center absolute z-10 bg-white  justify-center">
                                <img class="relative" width="40" src="{{ asset($plan['image_url'] )}}" alt="">
                            </div>
                            <div class="detail-top mt-12 px-4 flex justify-between items-center w-full">
                                <div class="text flex flex-col">
                                    @if($plan['is_special'])
                                        <span class="text-s text-small RaviBold">انتخاب هوشمندانه</span>
                                    @endif

                                    <h3 class="text-md RaviBold text-gray-s">{{ $plan['title'] }}</h3>
                                    <span class="text-small text-base RaviBold">{{ $plan['subtitle'] }}</span>
                                </div>
                                <div class="price flex flex-col items-center">
                                    @if($plan['price'] > $plan['sell_price'])
                                        <del
                                            class="text-normal text-light price-before">{{ number_format($plan['price'] , thousands_separator:'/') }}</del>
                                        <strong
                                            class="price-after bolX text-lg">{{ number_format($plan['sell_price'] , thousands_separator:'/') }}</strong>
                                    @else
                                        <strong
                                            class="price-after bolX text-lg">{{ number_format($plan['sell_price'] , thousands_separator:'/') }}</strong>
                                    @endif

                                </div>
                            </div>
                            <div class="features-list px-6 flex w-full flex-col items-start  mt-8 gap-3">
                                @foreach($plan['facilities'] as $facility)
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18"
                                             src="{{ $facility['is_active'] ? '/img/view/png/tick.png' : '/img/view/png/cancel.png' }}"
                                             alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">{{ $facility['title'] }}</span>
                                    </div>
                                @endforeach
                            </div>
                            <x-buttons.home.button-o href="{{ $plan['btn_link'] }}"
                                                     class="bg-white text-black border-2 border-black hover:bg-black hover:text-white text-small relative rounded-md mt-7 w-2/3">
                                {{ $plan['btn_text'] }}

                                <svg class="absolute left-2" id="fi-rr-angle-circle-left"
                                     xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                     viewBox="0 0 28.889 28.889">
                                    <path id="Path_2849" data-name="Path 2849"
                                          d="M28.889,14.445A14.445,14.445,0,1,0,14.445,28.889,14.445,14.445,0,0,0,28.889,14.445Zm-26.482,0A12.037,12.037,0,1,1,14.445,26.482,12.037,12.037,0,0,1,2.407,14.445Z"/>
                                    <path id="Path_2850" data-name="Path 2850"
                                          d="M8,13.216a3.6,3.6,0,0,1,.905-2.392c.35-.394.691-.767.935-1.011l3.4-3.458A1.2,1.2,0,0,1,14.956,8.04l-3.405,3.467c-.225.226-.531.563-.843.914a1.2,1.2,0,0,0,0,1.593c.311.349.616.686.834.905l3.414,3.474a1.2,1.2,0,0,1-1.717,1.685L9.834,16.613c-.241-.241-.578-.61-.926-1A3.6,3.6,0,0,1,8,13.216Z"
                                          transform="translate(1.63 1.228)"/>
                                </svg>
                            </x-buttons.home.button-o>
                        </div>
                    @endforeach


                </div>
            </div>
            <div class="show-mobile">
                <div class="list-plans mx-auto mt-14 mb-6 w-11/12 flex justify-start gap-3">
                    @foreach($block->data['plans'] as $plan)
                        <div x-data="{showMore:false}"
                             class="thumbnail-plan bg-white flex flex-col items-center justify-start relative">
                            <div class="polygon-circle flex items-center absolute z-10 bg-white  justify-center">
                                <img class="relative" width="40" src="{{ asset($plan['image_url']) }}" alt="">
                            </div>
                            @if($plan['is_special'])
                                <span class="text-s text-s-mobi absolute left-0 top-5 text-small RaviBold">انتخاب هوشمندانه</span>
                            @endif
                            <div class="detail-top mt-12 px-4 flex justify-center flex-col items-center w-full">
                                <div class="text flex flex-col items-center">


                                    <h3 class="text-md RaviBold text-gray-s">{{ $plan['title'] }}</h3>
                                    <span class="text-small text-base RaviBold">{{ $plan['subtitle'] }}</span>
                                </div>
                                <div class="price flex flex-col items-center">
                                    @if($plan['price'] > $plan['sell_price'])
                                        <del
                                            class="text-normal text-light price-before">{{ number_format($plan['price'] , thousands_separator:'/') }}</del>
                                        <strong
                                            class="price-after bolX text-lg">{{ number_format($plan['sell_price'] , thousands_separator:'/') }}</strong>
                                    @else
                                        <strong
                                            class="price-after bolX text-lg">{{ number_format($plan['sell_price'] , thousands_separator:'/') }}</strong>
                                    @endif
                                </div>
                            </div>
                            <x-buttons.home.button-o href="{{ $plan['btn_link'] }}"
                                                     class="bg-white text-black border-2 border-black hover:bg-black hover:text-white text-small relative btn-store-free  rounded-md mt-7">
                                {{ $plan['btn_text'] }}

                                <svg class="absolute left-2" id="fi-rr-angle-circle-left"
                                     xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                     viewBox="0 0 28.889 28.889">
                                    <path id="Path_2849" data-name="Path 2849"
                                          d="M28.889,14.445A14.445,14.445,0,1,0,14.445,28.889,14.445,14.445,0,0,0,28.889,14.445Zm-26.482,0A12.037,12.037,0,1,1,14.445,26.482,12.037,12.037,0,0,1,2.407,14.445Z"/>
                                    <path id="Path_2850" data-name="Path 2850"
                                          d="M8,13.216a3.6,3.6,0,0,1,.905-2.392c.35-.394.691-.767.935-1.011l3.4-3.458A1.2,1.2,0,0,1,14.956,8.04l-3.405,3.467c-.225.226-.531.563-.843.914a1.2,1.2,0,0,0,0,1.593c.311.349.616.686.834.905l3.414,3.474a1.2,1.2,0,0,1-1.717,1.685L9.834,16.613c-.241-.241-.578-.61-.926-1A3.6,3.6,0,0,1,8,13.216Z"
                                          transform="translate(1.63 1.228)"/>
                                </svg>
                            </x-buttons.home.button-o>
                            <span class="w-full flex justify-center gap-2 items-center mt-3 text-small text-gray-s"
                                  @click="showMore=!showMore">
                                    مشاهده امکانات اشتراک
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8.288" height="4.246"
                                         viewBox="0 0 8.288 4.246">
                                          <path id="fi-rr-angle-small-left"
                                                d="M9.667,9.564a.592.592,0,0,1,0-.841l2.717-2.711a.592.592,0,0,0-.835-.841L8.832,7.888a1.776,1.776,0,0,0,0,2.51l2.717,2.717a.592.592,0,1,0,.835-.841Z"
                                                transform="translate(-4.999 12.559) rotate(-90)" fill="#808285"/>
                                    </svg>
                            </span>

                            <div style="display: none" x-collapse x-show="showMore"
                                 class="features-list px-6 flex w-full flex-col items-start  mt-8 gap-3">
                                @foreach($plan['facilities'] as $facility)
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="{{ $facility['is_active'] ? '/img/view/png/tick.png' : '/img/view/png/cancel.png' }}" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">{{ $facility['title'] }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="w-full flex justify-center">
                <a class="text-small text-gray-s RaviBold"
                   href="{{ $block->data['link_url'] }}">{{ $block->data['link_text'] }}</a>
            </div>
        </div>
    @else
        <x-bahooosh::support.plans-edit-form :$blockForm/>
    @endif
</div>
