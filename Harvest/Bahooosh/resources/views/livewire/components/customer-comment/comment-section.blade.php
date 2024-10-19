<div>
    @if(!$is_edit)
        <div class="p-s3 w-full"  x-data="{
            init() {

                new Swiper($refs.swiper, {
                    slidesPerView: $store.device.mobile ? 1 : ($store.device.tablet ? 2.2 : 3),
                    spaceBetween: 15,
                     centeredSlides: true,
                     loop:true,
                    pagination:false,
                    navigation: {
                        nextEl: $refs.prevBtn,
                        prevEl: $refs.nextBtn
                    }
                })
            }
        }">
            <div class="title-website">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 30.405 30.405">
                    <path id="fi-rr-comment-quote"
                          d="M13.936,12.035V16.47a5.073,5.073,0,0,1-5.068,5.068,1.267,1.267,0,1,1,0-2.534A2.536,2.536,0,0,0,11.4,16.47H9.5a1.9,1.9,0,0,1-1.9-1.9v-1.9a2.533,2.533,0,0,1,2.534-2.534h1.9A1.9,1.9,0,0,1,13.936,12.035Zm6.968-1.9H19a2.533,2.533,0,0,0-2.534,2.534v1.9a1.9,1.9,0,0,0,1.9,1.9h1.9A2.536,2.536,0,0,1,17.737,19a1.267,1.267,0,1,0,0,2.534A5.073,5.073,0,0,0,22.8,16.47V12.035A1.9,1.9,0,0,0,20.9,10.135Zm9.5,5.5v8.438a6.342,6.342,0,0,1-6.335,6.335h-7.5C7.705,30.406.6,24.335.038,16.285A15.207,15.207,0,0,1,16.262.035,15.469,15.469,0,0,1,30.406,15.634Zm-2.534,0A12.925,12.925,0,0,0,16.091,2.565c-.29-.02-.58-.029-.868-.029A12.671,12.671,0,0,0,2.565,16.111c.473,6.816,6.364,11.762,14.01,11.762h7.5a3.805,3.805,0,0,0,3.8-3.8V15.635Z"
                          transform="translate(-0.001 -0.001)"/>
                </svg>
                <h2>{{ $block->data['title'] }}</h2>
            </div>
            <div class="p-swiper relative flex items-center justify-between mt-4">
                <button class="absolute next-button" x-ref="nextBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         width="65" height="65" viewBox="0 0 81 82">
                        <defs>
                            <filter id="Rectangle_1744" x="0" y="0" width="81" height="82"
                                    filterUnits="userSpaceOnUse">
                                <feOffset input="SourceAlpha"/>
                                <feGaussianBlur stdDeviation="5" result="blur"/>
                                <feFlood flood-color="#313131" flood-opacity="0.098"/>
                                <feComposite operator="in" in2="blur"/>
                                <feComposite in="SourceGraphic"/>
                            </filter>
                        </defs>
                        <g id="Component_3_1" data-name="Component 3 – 1" transform="translate(15 15)">
                            <g transform="matrix(1, 0, 0, 1, -15, -15)" filter="url(#Rectangle_1744)">
                                <rect id="Rectangle_1744-2" data-name="Rectangle 1744" width="51" height="52"
                                      rx="25.5" transform="translate(15 15)" fill="#fff"/>
                            </g>
                            <g id="fi-rr-angle-circle-right" transform="translate(10.805 11.801)">
                                <path id="Path_2851" data-name="Path 2851"
                                      d="M0,14.445A14.445,14.445,0,1,0,14.445,0,14.445,14.445,0,0,0,0,14.445Zm26.482,0A12.037,12.037,0,1,1,14.445,2.407,12.037,12.037,0,0,1,26.482,14.445Z"
                                      transform="translate(0)"/>
                                <path id="Path_2852" data-name="Path 2852"
                                      d="M17.242,13.228a3.6,3.6,0,0,1-.905,2.392c-.35.394-.691.767-.935,1.011L12,20.089A1.2,1.2,0,1,1,10.285,18.4l3.405-3.467c.225-.226.531-.563.843-.914a1.2,1.2,0,0,0,0-1.593c-.311-.349-.616-.686-.834-.905L10.285,8.052A1.2,1.2,0,1,1,12,6.367l3.405,3.466c.241.241.578.61.926,1a3.6,3.6,0,0,1,.909,2.393Z"
                                      transform="translate(2.018 1.216)"/>
                            </g>
                        </g>
                    </svg>
                </button>
                <div class="swiper w-full swiperStore  py-16" x-ref="swiper">
                    <div class="swiper-wrapper">
                        @foreach($block->data['comments'] as $comment)
                            <div class="swiper-slide">
                                <div class="box-store flex flex-col items-center w-full">
                                    <div class="logo-store flex items-center justify-content-center p-2">
                                        <div class="img p-2 bg-white flex items-center justify-content-center">
                                            <img src="{{ $comment['image_url'] }}" alt="">
                                        </div>
                                    </div>
                                    <div class="row-title relative bottom-6 w-full flex justify-between px-5">
                                        <h3 class="text-sm text-gray RaviBold">{{ $comment['title'] }}</h3>
                                        <a href="{{ $comment['referer_url'] }}" target="_blank"
                                           class="link-store RaviBold text-base text-normal">{{ $comment['referer_url'] }}</a>
                                    </div>
                                    <div class="row-description pb-3 px-5">
                                        <p class="text-small text-center text-gray RaviBold relative bottom-3">
                                            {{ $comment['description'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
                <button class="absolute prev-button" x-ref="prevBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         width="65" height="65" viewBox="0 0 81 82">
                        <defs>
                            <filter id="Rectangle_1902" x="0" y="0" width="81" height="82"
                                    filterUnits="userSpaceOnUse">
                                <feOffset input="SourceAlpha"/>
                                <feGaussianBlur stdDeviation="5" result="blur"/>
                                <feFlood flood-color="#313131" flood-opacity="0.098"/>
                                <feComposite operator="in" in2="blur"/>
                                <feComposite in="SourceGraphic"/>
                            </filter>
                        </defs>
                        <g id="Component_4_1" data-name="Component 4 – 1" transform="translate(15 15)">
                            <g transform="matrix(1, 0, 0, 1, -15, -15)" filter="url(#Rectangle_1902)">
                                <rect id="Rectangle_1902-2" data-name="Rectangle 1902" width="51" height="52"
                                      rx="25.5" transform="translate(15 15)" fill="#fff"/>
                            </g>
                            <g id="fi-rr-angle-circle-right" transform="translate(11.306 11.801)">
                                <path id="Path_2851" data-name="Path 2851"
                                      d="M28.889,14.445A14.445,14.445,0,1,1,14.445,0,14.445,14.445,0,0,1,28.889,14.445Zm-26.482,0A12.037,12.037,0,1,0,14.445,2.407,12.037,12.037,0,0,0,2.407,14.445Z"
                                      transform="translate(0)"/>
                                <path id="Path_2852" data-name="Path 2852"
                                      d="M9.906,13.228a3.6,3.6,0,0,0,.905,2.392c.35.394.691.767.935,1.011l3.4,3.458A1.2,1.2,0,1,0,16.862,18.4l-3.405-3.467c-.225-.226-.531-.563-.843-.914a1.2,1.2,0,0,1,0-1.593c.311-.349.616-.686.834-.905l3.414-3.474a1.2,1.2,0,1,0-1.717-1.685L11.74,9.833c-.241.241-.578.61-.926,1a3.6,3.6,0,0,0-.909,2.393Z"
                                      transform="translate(-0.276 1.216)"/>
                            </g>
                        </g>
                    </svg>
                </button>
            </div>
        </div>
    @else
        <x-bahooosh::customer-comment.comment-edit-form :$blockForm/>
    @endif
</div>
