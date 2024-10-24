<div>
    @if(!$is_edit)
        <div


            class="row-two w-full flex max-[600px]:mt-0  flex-col items-center">
            <div class="show-desktop w-full" x-data="{
            init() {

                new Swiper($refs.swiper, {
                    slidesPerView: 1,
                    spaceBetween: 15,

                     loop:true,
                    pagination:false,
                    navigation: {
                        nextEl: $refs.prevBtn,
                        prevEl: $refs.nextBtn
                    }
                })
            }
        }">
                <div class="p-swiper w-full relative flex items-center justify-between mt-4">

                    <div class="swiper  w-full swiperBanner" x-ref="swiper">
                        <div class="swiper-wrapper">
                            @foreach($block->data['banners'] as $banner)
                                <div class="swiper-slide">
                                    <a class="img w-full" href="{{ $banner['link'] }}">
                                        <img src="{{ asset($banner['image_url']) }}" alt="{{ $banner['alt'] }}">
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="flex  mr-3 gap-3 mb-3 btns-swiper-post">
                        <button class="next-button " x-ref="nextBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="38" height="38" viewBox="0 0 100 100">
                                <defs>
                                    <style>.a {
                                            clip-path: url(#d);
                                        }

                                        .b {
                                            fill: #fff;
                                        }

                                        .c {
                                            filter: url(#a);
                                        }</style>
                                    <filter id="a" x="-14" y="-15" width="128" height="130"
                                            filterUnits="userSpaceOnUse">
                                        <feOffset input="SourceAlpha"/>
                                        <feGaussianBlur stdDeviation="5" result="b"/>
                                        <feFlood flood-color="#313131" flood-opacity="0.098"/>
                                        <feComposite operator="in" in2="b"/>
                                        <feComposite in="SourceGraphic"/>
                                    </filter>
                                    <clipPath id="d">
                                        <rect width="100" height="100"/>
                                    </clipPath>
                                </defs>
                                <g id="c" class="a">
                                    <g class="c" transform="matrix(1, 0, 0, 1, 0, 0)">
                                        <rect class="b" width="98" height="100" rx="49" transform="translate(1 0)"/>
                                    </g>
                                    <g transform="translate(23.367 22.594)">
                                        <path
                                            d="M0,27.649A27.649,27.649,0,1,0,27.649,0,27.649,27.649,0,0,0,0,27.649Zm50.691,0A23.041,23.041,0,1,1,27.649,4.608,23.041,23.041,0,0,1,50.691,27.649Z"
                                            transform="translate(0 0)"/>
                                        <path
                                            d="M23.948,19.862a6.9,6.9,0,0,1-1.733,4.578c-.671.753-1.323,1.468-1.79,1.935L13.918,33a2.3,2.3,0,1,1-3.286-3.226l6.518-6.636c.431-.433,1.016-1.078,1.613-1.749a2.3,2.3,0,0,0,0-3.048c-.594-.668-1.18-1.313-1.6-1.733l-6.534-6.65a2.3,2.3,0,1,1,3.286-3.226l6.518,6.634c.461.461,1.106,1.168,1.772,1.919a6.889,6.889,0,0,1,1.74,4.581Z"
                                            transform="translate(12.918 7.787)"/>
                                    </g>
                                </g>
                            </svg>
                        </button>
                        <button class=" prev-button relative right-0" x-ref="prevBtn">
                            <svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="38" height="38" viewBox="0 0 100 100">
                                <defs>
                                    <style>.a {
                                            clip-path: url(#d);
                                        }

                                        .b {
                                            fill: #fff;
                                        }

                                        .c {
                                            filter: url(#a);
                                        }</style>
                                    <filter id="a" x="-14" y="-15" width="128" height="130"
                                            filterUnits="userSpaceOnUse">
                                        <feOffset input="SourceAlpha"/>
                                        <feGaussianBlur stdDeviation="5" result="b"/>
                                        <feFlood flood-color="#313131" flood-opacity="0.098"/>
                                        <feComposite operator="in" in2="b"/>
                                        <feComposite in="SourceGraphic"/>
                                    </filter>
                                    <clipPath id="d">
                                        <rect width="100" height="100"/>
                                    </clipPath>
                                </defs>
                                <g id="c" class="a">
                                    <g class="c" transform="matrix(1, 0, 0, 1, 0, 0)">
                                        <rect class="b" width="98" height="100" rx="49" transform="translate(1 0)"/>
                                    </g>
                                    <g transform="translate(23.367 22.594)">
                                        <path
                                            d="M0,27.649A27.649,27.649,0,1,0,27.649,0,27.649,27.649,0,0,0,0,27.649Zm50.691,0A23.041,23.041,0,1,1,27.649,4.608,23.041,23.041,0,0,1,50.691,27.649Z"
                                            transform="translate(0 0)"/>
                                        <path
                                            d="M23.948,19.862a6.9,6.9,0,0,1-1.733,4.578c-.671.753-1.323,1.468-1.79,1.935L13.918,33a2.3,2.3,0,1,1-3.286-3.226l6.518-6.636c.431-.433,1.016-1.078,1.613-1.749a2.3,2.3,0,0,0,0-3.048c-.594-.668-1.18-1.313-1.6-1.733l-6.534-6.65a2.3,2.3,0,1,1,3.286-3.226l6.518,6.634c.461.461,1.106,1.168,1.772,1.919a6.889,6.889,0,0,1,1.74,4.581Z"
                                            transform="translate(12.918 7.787)"/>
                                    </g>
                                </g>
                            </svg>
                        </button>
                    </div>

                </div>
            </div>
            <div class="show-mobile w-full" x-data="{
            init() {

                new Swiper($refs.swiper, {
                    slidesPerView: 1,
                    spaceBetween: 15,

                     loop:true,
                    pagination:false,
                    navigation: {
                        nextEl: $refs.prevBtn,
                        prevEl: $refs.nextBtn
                    }
                })
            }
        }">
                <div class="p-swiper w-full relative flex items-center justify-between mt-4">

                    <div class="swiper  w-full swiperBanner" x-ref="swiper">
                        <div class="swiper-wrapper">
                            @foreach($block->data['banners'] as $banner)
                                <div class="swiper-slide">
                                    <a class="img w-full" href="{{ $banner['link'] }}">
                                        <img src="{{ asset($banner['image_url']) }}" alt="{{ $banner['alt'] }}">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <button class="next-button " x-ref="nextBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             width="38" height="38" viewBox="0 0 100 100">
                            <defs>
                                <style>.a {
                                        clip-path: url(#d);
                                    }

                                    .b {
                                        fill: #fff;
                                    }

                                    .c {
                                        filter: url(#a);
                                    }</style>
                                <filter id="a" x="-14" y="-15" width="128" height="130"
                                        filterUnits="userSpaceOnUse">
                                    <feOffset input="SourceAlpha"/>
                                    <feGaussianBlur stdDeviation="5" result="b"/>
                                    <feFlood flood-color="#313131" flood-opacity="0.098"/>
                                    <feComposite operator="in" in2="b"/>
                                    <feComposite in="SourceGraphic"/>
                                </filter>
                                <clipPath id="d">
                                    <rect width="100" height="100"/>
                                </clipPath>
                            </defs>
                            <g id="c" class="a">
                                <g class="c" transform="matrix(1, 0, 0, 1, 0, 0)">
                                    <rect class="b" width="98" height="100" rx="49" transform="translate(1 0)"/>
                                </g>
                                <g transform="translate(23.367 22.594)">
                                    <path
                                        d="M0,27.649A27.649,27.649,0,1,0,27.649,0,27.649,27.649,0,0,0,0,27.649Zm50.691,0A23.041,23.041,0,1,1,27.649,4.608,23.041,23.041,0,0,1,50.691,27.649Z"
                                        transform="translate(0 0)"/>
                                    <path
                                        d="M23.948,19.862a6.9,6.9,0,0,1-1.733,4.578c-.671.753-1.323,1.468-1.79,1.935L13.918,33a2.3,2.3,0,1,1-3.286-3.226l6.518-6.636c.431-.433,1.016-1.078,1.613-1.749a2.3,2.3,0,0,0,0-3.048c-.594-.668-1.18-1.313-1.6-1.733l-6.534-6.65a2.3,2.3,0,1,1,3.286-3.226l6.518,6.634c.461.461,1.106,1.168,1.772,1.919a6.889,6.889,0,0,1,1.74,4.581Z"
                                        transform="translate(12.918 7.787)"/>
                                </g>
                            </g>
                        </svg>
                    </button>
                    <button class=" prev-button right-0" x-ref="prevBtn">
                        <svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             width="38" height="38" viewBox="0 0 100 100">
                            <defs>
                                <style>.a {
                                        clip-path: url(#d);
                                    }

                                    .b {
                                        fill: #fff;
                                    }

                                    .c {
                                        filter: url(#a);
                                    }</style>
                                <filter id="a" x="-14" y="-15" width="128" height="130"
                                        filterUnits="userSpaceOnUse">
                                    <feOffset input="SourceAlpha"/>
                                    <feGaussianBlur stdDeviation="5" result="b"/>
                                    <feFlood flood-color="#313131" flood-opacity="0.098"/>
                                    <feComposite operator="in" in2="b"/>
                                    <feComposite in="SourceGraphic"/>
                                </filter>
                                <clipPath id="d">
                                    <rect width="100" height="100"/>
                                </clipPath>
                            </defs>
                            <g id="c" class="a">
                                <g class="c" transform="matrix(1, 0, 0, 1, 0, 0)">
                                    <rect class="b" width="98" height="100" rx="49" transform="translate(1 0)"/>
                                </g>
                                <g transform="translate(23.367 22.594)">
                                    <path
                                        d="M0,27.649A27.649,27.649,0,1,0,27.649,0,27.649,27.649,0,0,0,0,27.649Zm50.691,0A23.041,23.041,0,1,1,27.649,4.608,23.041,23.041,0,0,1,50.691,27.649Z"
                                        transform="translate(0 0)"/>
                                    <path
                                        d="M23.948,19.862a6.9,6.9,0,0,1-1.733,4.578c-.671.753-1.323,1.468-1.79,1.935L13.918,33a2.3,2.3,0,1,1-3.286-3.226l6.518-6.636c.431-.433,1.016-1.078,1.613-1.749a2.3,2.3,0,0,0,0-3.048c-.594-.668-1.18-1.313-1.6-1.733l-6.534-6.65a2.3,2.3,0,1,1,3.286-3.226l6.518,6.634c.461.461,1.106,1.168,1.772,1.919a6.889,6.889,0,0,1,1.74,4.581Z"
                                        transform="translate(12.918 7.787)"/>
                                </g>
                            </g>
                        </svg>
                    </button>

                </div>
            </div>
        </div>
    @else
        <x-bahooosh::banner.banner-edit-form :$blockForm/>
    @endif
</div>
