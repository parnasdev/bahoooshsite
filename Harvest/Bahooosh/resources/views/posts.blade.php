<x-layouts.app>
    <div x-data class="postsPage">
        {{--header--}}
        <header x-data x-show="window.innerWidth> 900" class="prs-container header">
            <div
                class="box-header w-full my-3 bg-white h-20 rounded-xl flex align-center px-5 items-center justify-center">
                <a href="" class="logo-website w-1/5 flex align-center">
                    <img class="object-contain" width="170" src="img/view/png/New%20Logo%20-%20Font.png" alt="">
                </a>
                <ul class="menu-header h-full p-0 flex gap-16 w-2/5">
                    <li class="h-full p-link flex items-center justify-center"><a class="text-normal RaviBold link"
                                                                                  href="">صفحه اصلی</a></li>
                    <li class="h-full p-link flex items-center justify-center"><a class="text-normal RaviBold link"
                                                                                  href="">قیمت‌ها</a></li>
                    <li class="h-full p-link flex items-center justify-center"><a class="text-normal RaviBold link"
                                                                                  href="">ویژگی‌ها</a></li>
                    <li class="h-full p-link flex items-center justify-center"><a class="text-normal RaviBold link"
                                                                                  href="">مشتریان</a></li>
                </ul>
                <div class="option-header flex justify-end  gap-2 w-2/5">
                    <div class="contact flex gap-2">
                        <div class="p-text flex gap-1 flex-col justify-center items-center">
                            <small class="text-gray-s text-small RaviBold">پشتیبانی و فروش</small>
                            <a href="" class="text-normal  RaviBold">021-71057559</a>
                        </div>
                        <svg id="Component_2_1" data-name="Component 2 – 1" xmlns="http://www.w3.org/2000/svg"
                             width="40" height="40" viewBox="0 0 70 70">
                            <g id="Component_1_2" data-name="Component 1 – 2">
                                <g id="Rectangle_1889" data-name="Rectangle 1889" fill="#fff" stroke="#000"
                                   stroke-width="3">
                                    <rect width="70" height="70" rx="20" stroke="none"/>
                                    <rect x="1.5" y="1.5" width="67" height="67" rx="18.5" fill="none"/>
                                </g>
                            </g>
                            <path id="fi-rr-phone-call"
                                  d="M16.153,1.244A1.243,1.243,0,0,1,17.4,0,12.446,12.446,0,0,1,29.828,12.433a1.243,1.243,0,0,1-2.487,0A9.957,9.957,0,0,0,17.4,2.487a1.243,1.243,0,0,1-1.243-1.243ZM17.4,7.46a4.973,4.973,0,0,1,4.973,4.973,1.243,1.243,0,0,0,2.486,0A7.467,7.467,0,0,0,17.4,4.973a1.243,1.243,0,1,0,0,2.486ZM28.7,20.811a3.854,3.854,0,0,1,0,5.443l-1.131,1.3C17.387,37.307-7.391,12.535,2.207,2.32l1.43-1.243a3.83,3.83,0,0,1,5.38.05c.039.039,2.342,3.031,2.342,3.031a3.854,3.854,0,0,1-.009,5.324l-1.44,1.81a15.89,15.89,0,0,0,8.617,8.634l1.821-1.448a3.854,3.854,0,0,1,5.322-.007S28.662,20.773,28.7,20.811ZM26.99,22.619s-2.975-2.289-3.014-2.327a1.368,1.368,0,0,0-1.926,0c-.034.035-2.541,2.033-2.541,2.033a1.243,1.243,0,0,1-1.217.189A18.66,18.66,0,0,1,7.326,11.563a1.243,1.243,0,0,1,.18-1.243s2-2.509,2.031-2.541a1.368,1.368,0,0,0,0-1.926C9.5,5.815,7.21,2.837,7.21,2.837a1.368,1.368,0,0,0-1.877.048L3.9,4.129C-3.111,12.563,18.361,32.845,25.752,25.86l1.133-1.305a1.394,1.394,0,0,0,.106-1.936Z"
                                  transform="translate(20.066 20.107)"/>
                        </svg>

                    </div>
                    <a href="" class="btn-auth flex items-center RaviBold gap-3 justify-center text-normal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="20" viewBox="0 0 19.294 28.889">
                            <path id="fi-rr-bolt"
                                  d="M12.721,28.889a2.723,2.723,0,0,1-1.141-.255,2.624,2.624,0,0,1-1.444-3.156l1.879-6.218H7.587A3.611,3.611,0,0,1,4.126,14.6L7.766,2.565A3.591,3.591,0,0,1,11.228,0h4.445A3.13,3.13,0,0,1,18.6,4.226l-2.026,5.4h3.078a3.611,3.611,0,0,1,2.989,5.638l-7.7,12.4a2.648,2.648,0,0,1-2.218,1.223ZM11.228,2.407a1.2,1.2,0,0,0-1.153.855L6.435,15.3a1.2,1.2,0,0,0,1.152,1.553h6.049A1.2,1.2,0,0,1,14.788,18.4l-2.344,7.754a.22.22,0,0,0,.146.29.226.226,0,0,0,.324-.088l7.7-12.4a1.2,1.2,0,0,0,.094-1.28,1.178,1.178,0,0,0-1.057-.646H14.839a1.2,1.2,0,0,1-1.128-1.626l2.636-7.03a.722.722,0,0,0-.674-.974Z"
                                  transform="translate(-3.971 0)" fill="#007eff"/>
                        </svg>

                        ورود و ثبت نام
                    </a>
                </div>
            </div>
        </header>
        <div class="w-full show-mobile mt-3 px-4">
            <header class="header flex justify-center">
                <div class="p-header-mobi w-full px-4 flex justify-between items-center">
                    <div class="start flex gap-3 items-center">
                        <button class="open-menu">
                            <svg id="Component_1_3" data-name="Component 1 – 3" xmlns="http://www.w3.org/2000/svg"
                                 width="30" height="30" viewBox="0 0 30 30">
                                <rect id="Rectangle_1918" data-name="Rectangle 1918" width="30" height="30" rx="15"/>
                                <g id="fi-rr-menu-burger" transform="translate(8.282 10.468)">
                                    <rect id="Rectangle_1158" data-name="Rectangle 1158" width="14.196" height="1.374"
                                          rx="0.687" transform="translate(-0.38 3.846)" fill="#fff"/>
                                    <rect id="Rectangle_1159" data-name="Rectangle 1159" width="14.196" height="1.374"
                                          rx="0.687" transform="translate(-0.38 -0.275)" fill="#fff"/>
                                    <rect id="Rectangle_1160" data-name="Rectangle 1160" width="14.196" height="1.374"
                                          rx="0.687" transform="translate(-0.38 7.968)" fill="#fff"/>
                                </g>
                            </svg>

                        </button>
                        <a href="" class="logo-website  flex align-center">
                            <img class="object-contain" width="100" src="img/view/png/New%20Logo%20-%20Font.png" alt="">
                        </a>
                    </div>
                    <div class="end gap-2 flex items-center">
                        <div class="contact flex gap-2">
                            <svg id="Component_2_1" data-name="Component 2 – 1" xmlns="http://www.w3.org/2000/svg"
                                 width="30" height="30" viewBox="0 0 70 70">
                                <g id="Component_1_2" data-name="Component 1 – 2">
                                    <g id="Rectangle_1889" data-name="Rectangle 1889" fill="#fff" stroke="#000"
                                       stroke-width="3">
                                        <rect width="70" height="70" rx="20" stroke="none"/>
                                        <rect x="1.5" y="1.5" width="67" height="67" rx="18.5" fill="none"/>
                                    </g>
                                </g>
                                <path id="fi-rr-phone-call"
                                      d="M16.153,1.244A1.243,1.243,0,0,1,17.4,0,12.446,12.446,0,0,1,29.828,12.433a1.243,1.243,0,0,1-2.487,0A9.957,9.957,0,0,0,17.4,2.487a1.243,1.243,0,0,1-1.243-1.243ZM17.4,7.46a4.973,4.973,0,0,1,4.973,4.973,1.243,1.243,0,0,0,2.486,0A7.467,7.467,0,0,0,17.4,4.973a1.243,1.243,0,1,0,0,2.486ZM28.7,20.811a3.854,3.854,0,0,1,0,5.443l-1.131,1.3C17.387,37.307-7.391,12.535,2.207,2.32l1.43-1.243a3.83,3.83,0,0,1,5.38.05c.039.039,2.342,3.031,2.342,3.031a3.854,3.854,0,0,1-.009,5.324l-1.44,1.81a15.89,15.89,0,0,0,8.617,8.634l1.821-1.448a3.854,3.854,0,0,1,5.322-.007S28.662,20.773,28.7,20.811ZM26.99,22.619s-2.975-2.289-3.014-2.327a1.368,1.368,0,0,0-1.926,0c-.034.035-2.541,2.033-2.541,2.033a1.243,1.243,0,0,1-1.217.189A18.66,18.66,0,0,1,7.326,11.563a1.243,1.243,0,0,1,.18-1.243s2-2.509,2.031-2.541a1.368,1.368,0,0,0,0-1.926C9.5,5.815,7.21,2.837,7.21,2.837a1.368,1.368,0,0,0-1.877.048L3.9,4.129C-3.111,12.563,18.361,32.845,25.752,25.86l1.133-1.305a1.394,1.394,0,0,0,.106-1.936Z"
                                      transform="translate(20.066 20.107)"/>
                            </svg>

                        </div>
                        <a href="" class="btn-auth flex items-center RaviBold gap-3 justify-center text-normal">

                            ورود و ثبت نام
                        </a>
                    </div>
                </div>
            </header>
        </div>
        {{--header--}}

        <div class="prs-container">
            <div class="w-full items-center justify-start pt-3  flex-col">
                <div class="row-one mt-10">
                    <div class="text-main max-[600px]:w-full flex gap-3 sm:w-full flex-col items-center w-1/2">
                        <h1 class="text sm:text-xl   md:text-xl lg:text-2xl xl:text-2xl extraBold">
                            مقالات آموزشی و اخبار
                        </h1>
                        <span class="text-gray-s text-small max-[600px]:w-full w-2/5 text-center medium">
                            کسب‌وکارهای بسیاری با باهوش فروشگاه‌های خود را به‌سادگی راه‌اندازی کرده‌اند و به نتایج عالی دست یافته‌اند. برخی از نمونه‌های موفق را ببینید و الهام بگیرید تا شما هم به جمع مشتریان موفق ما بپیوندید!
                        </span>
                    </div>
                    <div class="border-row-one relative flex justify-content-end mt-16 border-t-2 border-black">
                        <img width="90" src="img/view/png/posts.png" alt="" class="img-left absolute">
                    </div>
                </div>

                <div
                    x-data="{
            init() {

                new Swiper($refs.swiper, {
                    slidesPerView: 1,
                    spaceBetween: 15,
                     centeredSlides: false,
                     loop:false,
                    pagination:false,
                    navigation: {
                        nextEl: $refs.prevBtn,
                        prevEl: $refs.nextBtn
                    }
                })
            }
        }"

                    class="row-two w-full flex max-[600px]:mt-0  flex-col items-center">
                    <div class="show-desktop w-full">
                        <div class="p-swiper w-full relative flex items-center justify-between mt-4">

                            <div class="swiper  w-full swiperBanner" x-ref="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="img w-full">
                                            <img src="img/view/png/banner.png" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img w-full">
                                            <img src="img/view/png/banner.png" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img w-full">
                                            <img src="img/view/png/banner.png" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img w-full">
                                            <img src="img/view/png/banner.png" alt="">
                                        </div>
                                    </div>
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
                    <div class="show-mobile w-full">
                        <div class="p-swiper w-full relative flex items-center justify-between mt-4">

                            <div class="swiper  w-full swiperBanner" x-ref="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="img w-full">
                                            <img src="img/view/png/banner.png" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img w-full">
                                            <img src="img/view/png/banner.png" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img w-full">
                                            <img src="img/view/png/banner.png" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img w-full">
                                            <img src="img/view/png/banner.png" alt="">
                                        </div>
                                    </div>
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
                <div class="show-desktop w-full">
                    <div class="row-filter mt-6 w-full flex justify-between items-center">
                        <div class="start grid grid-cols-4 gap-2">
                            <button class="btn-filter bg-white w-full text-gray  text-small bolX">
                                اخبار باهوش
                            </button>
                            <button class="btn-filter bg-white w-full text-gray  text-small bolX">
                                آموزشی
                            </button>
                            <button class="btn-filter bg-white w-full text-gray  text-small bolX">
                                داستان کسب و کار ها
                            </button>
                            <button class="btn-filter bg-white w-full text-gray  text-small bolX">
                                راهکار های فروش
                            </button>
                        </div>
                        <div class="end flex justify-end">
                            <div class="box-search bg-white flex justify-between items-center px-3">
                                <input class="text-gray-s text-normal" type="text" placeholder="جست‌و‌جو نتایج">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.908" height="16.908"
                                         viewBox="0 0 16.908 16.908">
                                        <path id="fi-rr-search"
                                              d="M16.67,15.675l-4.2-4.2a7.047,7.047,0,1,0-.995.995l4.2,4.2a.7.7,0,1,0,.995-.995Zm-9.644-3.02a5.629,5.629,0,1,1,5.629-5.629,5.629,5.629,0,0,1-5.629,5.629Z"
                                              transform="translate(0.032 0.032)" fill="#4b4b4b"/>
                                    </svg>

                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="show-mobile w-full">
                    <div class="row-filter mt-6 w-full flex justify-between items-center">
                        <div class="end flex w-100 justify-end">
                            <div class="box-search w-100 bg-white flex justify-between items-center px-3">
                                <input class="text-gray-s text-normal" type="text" placeholder="جست‌و‌جو نتایج">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.908" height="16.908"
                                         viewBox="0 0 16.908 16.908">
                                        <path id="fi-rr-search"
                                              d="M16.67,15.675l-4.2-4.2a7.047,7.047,0,1,0-.995.995l4.2,4.2a.7.7,0,1,0,.995-.995Zm-9.644-3.02a5.629,5.629,0,1,1,5.629-5.629,5.629,5.629,0,0,1-5.629,5.629Z"
                                              transform="translate(0.032 0.032)" fill="#4b4b4b"/>
                                    </svg>

                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-blogs my-5 w-full max-[600px]:px-3 grid grid-cols-3 gap-2 max-[600px]:grid-cols-1">
                    <template x-for="item in 15">
                        <div class="thumbnail-blog mt-2 flex justify-between items-center bg-white w-full">
                            <div class="img-blog">
                                <img src="img/view/png/kids-clothes-online-store-0.png" alt="">
                            </div>
                            <div class="detail-blog flex flex-col items-start">
                                <div class="date w-full gap-2 flex justify-start items-center">
                                    <svg id="Calendar_2" data-name="Calendar 2" xmlns="http://www.w3.org/2000/svg"
                                         width="18" height="20" viewBox="0 0 23.63 25.599">
                                        <path id="Path_839" data-name="Path 839" d="M6,16H9.376"
                                              transform="translate(-0.213 -0.247)" fill="none" stroke="#d4d4d4"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                        <path id="Path_840" data-name="Path 840" d="M6,20H9.376"
                                              transform="translate(-0.213 -0.308)" fill="none" stroke="#d4d4d4"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                        <path id="Path_841" data-name="Path 841"
                                              d="M7.877,0a.985.985,0,0,1,.985.985V2.053c.9-.058,1.878-.084,2.954-.084s2.058.025,2.954.084V.985a.985.985,0,1,1,1.969,0V2.258c4.5.678,6.23,2.7,6.727,7.588q.048.474.081.985.031.475.05.983.035.929.034,1.97T23.6,15.754q-.019.509-.05.984-.033.509-.081.981c-.532,5.235-2.481,7.184-7.715,7.715q-.473.048-.981.081-.476.031-.984.05-.928.035-1.969.034C2.085,25.6,0,23.514,0,13.784q0-1.043.034-1.97.019-.508.05-.983.033-.511.081-.985C.662,4.957,2.4,2.935,6.892,2.258V.985A.985.985,0,0,1,7.877,0ZM6.892,4.252A6.614,6.614,0,0,0,4.045,5.284c-.93.682-1.6,1.879-1.9,4.562H21.484c-.3-2.683-.969-3.88-1.9-4.562a6.614,6.614,0,0,0-2.847-1.032v.671a.985.985,0,1,1-1.969,0V4.028c-.855-.06-1.833-.09-2.954-.09s-2.1.03-2.954.09v.895a.985.985,0,1,1-1.969,0Zm14.3,13.523q.147-.019.288-.034c-.258,2.3-.79,3.492-1.5,4.206s-1.911,1.245-4.206,1.5q.015-.141.034-.288a6.5,6.5,0,0,1,1.628-3.76A6.5,6.5,0,0,1,21.194,17.776Zm-7.34,5.13c-.032.24-.055.471-.072.69-.609.024-1.264.035-1.967.035A26.489,26.489,0,0,1,6.291,23.2a5.138,5.138,0,0,1-2.64-1.251A5.138,5.138,0,0,1,2.4,19.308a26.491,26.491,0,0,1-.431-5.524c0-.7.011-1.359.035-1.969H21.626c.024.61.035,1.265.035,1.969s-.011,1.358-.035,1.967c-.219.017-.45.04-.69.072a8.437,8.437,0,0,0-4.894,2.187A8.437,8.437,0,0,0,13.854,22.905Z"
                                              transform="translate(0)" fill="#d4d4d4" fill-rule="evenodd"/>
                                    </svg>
                                    <span class="text-small text-light bolX">۲ اردیبهشت 1403</span>
                                </div>
                                <h3 class="title-blog mt-3">
                                    <a class="bolX text-normal" href="">راه اندازی کسب و کار فروش لباس بچه گانه</a>
                                </h3>
                                <div class="row-link w-full mt-5 flex justify-end">
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="8"
                                             viewBox="0 0 28.889 12.382">
                                            <path id="fi-rr-arrow-alt-left"
                                                  d="M27.686,11.844H7.222V7.8A.954.954,0,0,0,5.6,7.134L.279,12.383a.931.931,0,0,0,0,1.329L5.6,18.962A.954.954,0,0,0,7.222,18.3V14.252H27.686a1.2,1.2,0,1,0,0-2.407Z"
                                                  transform="translate(0 -6.857)" fill="#808285"/>
                                        </svg>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
                <div class="row-pagination gap-4 w-full mt-16 flex justify-center items-center">
                    <button class="prev-page">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 45 45"><rect width="45" height="45" rx="15"/><path d="M0,4.418,4.418,0m0,0V14.138M4.418,0,8.836,4.418" transform="translate(29.78 18.557) rotate(90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                    </button>
                    <div class="pages gap-4 w-full flex justify-center items-center">
                        <button class="page active-page bolX">1</button>
                        <button class="page bolX">2</button>
                        <button class="page bolX">3</button>
                        <button class="page bolX">...</button>
                        <button class="page bolX">10</button>
                    </div>
                    <button class="next-page">
                        <svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 45 45"><rect width="45" height="45" rx="15"/><path d="M0,4.418,4.418,0m0,0V14.138M4.418,0,8.836,4.418" transform="translate(29.78 18.557) rotate(90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                    </button>
                </div>

                <div class="row-end my-20 flex justify-center w-full">
                    <div class="text-end flex gap-3 sm:w-full flex-col items-center max-[600px]:w-full w-1/2">
                        <h1 class="text sm:text-xl   md:text-xl lg:text-2xl xl:text-2xl extraBold">
                            فروشگاه ساز باهوش ؛ کلیکی بسازش !
                        </h1>
                        <span class="text-gray-s text-small max-[600px]:w-full w-2/5 text-center medium">ساده و سریع: فروشگاه آنلاین خود را در کمترین زمان راه‌اندازی کنید.</span>
                        <button
                            class="btn-base bg-black text-white hover:bg-white hover:text-black border-2 border-black mt-2 w-64 gap-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 28.057 30.608">
                                <path id="fi-rr-mug-hot"
                                      d="M24.594,12.753h-.638V11.478A3.826,3.826,0,0,0,20.13,7.652H4.826A3.826,3.826,0,0,0,1,11.478V24.231a6.384,6.384,0,0,0,6.377,6.377h10.2a6.388,6.388,0,0,0,6.249-5.1,4.591,4.591,0,0,0,5.229-4.464V17.217A4.464,4.464,0,0,0,24.594,12.753Zm-7.014,15.3H7.377a3.826,3.826,0,0,1-3.826-3.826V11.478A1.275,1.275,0,0,1,4.826,10.2h15.3a1.275,1.275,0,0,1,1.275,1.275V24.231a3.826,3.826,0,0,1-3.826,3.826Zm8.927-7.014a2.067,2.067,0,0,1-2.551,1.913V15.3a2.067,2.067,0,0,1,2.551,1.913ZM11.2,3.826V1.275a1.275,1.275,0,1,1,2.551,0V3.826a1.275,1.275,0,1,1-2.551,0Zm5.1,0V1.275a1.275,1.275,0,1,1,2.551,0V3.826a1.275,1.275,0,1,1-2.551,0Zm-10.2,0V1.275a1.275,1.275,0,1,1,2.551,0V3.826a1.275,1.275,0,1,1-2.551,0Z"
                                      transform="translate(-1)" fill="#fff"/>
                            </svg>

                            ساخت فروشگاه رایگان
                        </button>
                    </div>

                </div>


            </div>
        </div>
    </div>

</x-layouts.app>
