<x-layouts.app>
    <div class="pricePage">
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
            <div class="w-full items-center pt-14  flex-col">
                <div class="row-one">
                    <div class="text-main max-[600px]:w-full flex gap-3 sm:w-full flex-col items-center w-1/2">
                        <h1 class="text sm:text-xl   md:text-xl lg:text-2xl xl:text-2xl extraBold">
                            قیمت‌های مناسب برای مغازه آنلاین شما
                        </h1>
                        <span class="text-gray-s text-small max-[600px]:w-full w-2/5 text-center medium">
                            در باهوش، مغازه آنلاین خود را با پلن‌های متنوع و هزینه‌های مناسب راه‌اندازی کنید. هر چیزی که برای شروع فروش آنلاین نیاز دارید، در اختیارتان است!
                        </span>
                        <button
                            class="btn-base bg-white text-black hover:bg-black hover:text-white border-2 border-black mt-2 w-64 gap-5">
                            مشاهده پکیج‌ها
                        </button>
                    </div>
                    <div class="border-row-one relative flex justify-content-end mt-20 mb-12 border-t-2 border-black">
                        <img width="85" src="img/view/png/img-left-price.png" alt="" class="img-left absolute">
                        <img width="40" src="img/view/png/img-arrow-right.png" alt=""
                             class="img-right top-0 right-2 absolute">
                    </div>
                </div>
                <div class="row-two w-full flex flex-col items-center">
                    <div class="title-website-s">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 31.835 24">
                            <g id="fi-rr-list" transform="translate(-0.118 0.321)">
                                <path id="Path_2897" data-name="Path 2897"
                                      d="M7.331,6.663h21.3a1.331,1.331,0,1,0,0-2.663H7.331a1.331,1.331,0,1,0,0,2.663Z"
                                      transform="translate(1.988 -2.669)"/>
                                <path id="Path_2898" data-name="Path 2898"
                                      d="M28.633,11H7.331a1.331,1.331,0,1,0,0,2.663h21.3a1.331,1.331,0,1,0,0-2.663Z"
                                      transform="translate(1.988 -0.349)"/>
                                <path id="Path_2899" data-name="Path 2899"
                                      d="M28.633,18H7.331a1.331,1.331,0,1,0,0,2.663h21.3a1.331,1.331,0,1,0,0-2.663Z"
                                      transform="translate(1.988 1.971)"/>
                                <ellipse id="Ellipse_453" data-name="Ellipse 453" cx="2.5" cy="3" rx="2.5" ry="3"
                                         transform="translate(0.118 -0.321)"/>
                                <circle id="Ellipse_454" data-name="Ellipse 454" cx="2.5" cy="2.5" r="2.5"
                                        transform="translate(0.118 9.679)"/>
                                <circle id="Ellipse_455" data-name="Ellipse 455" cx="2.5" cy="2.5" r="2.5"
                                        transform="translate(0.118 18.679)"/>
                            </g>
                        </svg>
                        <h2 class="relative">قیمت و تفاوت بین پکیج ها</h2>
                    </div>
                    <div class="show-desktop mt-4">
                        <div class="list-plans mx-auto mt-14 mb-6 w-full grid grid-cols-3 gap-3">
                            <div class="thumbnail-plan bg-white flex flex-col items-center justify-start relative">
                                <div class="polygon-circle flex items-center absolute z-10 bg-white  justify-center">
                                    <img class="relative bottom-1" width="40" src="img/view/png/Polygon-1.png" alt="">
                                </div>
                                <div class="detail-top mt-12 px-4 flex justify-between items-center w-full">
                                    <div class="text flex flex-col">
                                        <h3 class="text-md RaviBold text-gray-s">اشتراک ۳ مـــاهه</h3>
                                        <span
                                            class="text-small text-base RaviBold">آزمایش ماهانه با امکانات کامل.</span>
                                    </div>
                                    <div class="price flex flex-col items-center">
                                        <del class="text-normal text-light price-before">۱/۱۸۵/۰۰۰</del>
                                        <strong class="price-after bolX text-lg">۸۸۵/۰۰۰ تومان</strong>
                                    </div>
                                </div>
                                <div class="features-list px-6 flex w-full flex-col items-start  mt-8 gap-3">
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">هاست ابری نامحدود رایگان</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span
                                            class="text-small mt-1 text-gray RaviBold">حسابداری، انبارداری آنلاین</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">دسترسی به تمامی ابزار های هوش مصنوعی</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">اتصال به دامنه شخصی</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">اتصال به کانال های فروش (ترب، ایمالز، ذره‌بین)</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">7 روز تست رایگان</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">7پشتیبانی رایگان (از ساعت ۹ صبح الی ۱۸ عصر)</span>
                                    </div>
                                    <div class="no-feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/cancel.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">طراحی گرافیکی اولیه سایت و چیدمان فنی</span>
                                    </div>
                                    <div class="no-feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/cancel.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">مشاوره دریافت اینماد و درگاه پرداخت مناسب</span>
                                    </div>
                                    <div class="no-feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/cancel.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">بارگذاری محصولات اولیه سایت تا ۳۰ محصول</span>
                                    </div>
                                    <div class="no-feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/cancel.png" alt="">
                                        <span
                                            class="text-small mt-1 text-gray RaviBold">پرداخت اشتراک بصورت اقساطی (۳ قسط)</span>
                                    </div>
                                    <div class="no-feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/cancel.png" alt="">
                                        <span
                                            class="text-small mt-1 text-gray RaviBold">مشاوره رایگان سئو و افزایش فروش</span>
                                    </div>
                                </div>
                                <button
                                    class="btn-base-two bg-white text-black border-2 border-black hover:bg-black hover:text-white text-small relative rounded-md mt-7 w-2/3">
                                    ساخت فروشگاه رایگان

                                    <svg class="absolute left-2" id="fi-rr-angle-circle-left"
                                         xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                         viewBox="0 0 28.889 28.889">
                                        <path id="Path_2849" data-name="Path 2849"
                                              d="M28.889,14.445A14.445,14.445,0,1,0,14.445,28.889,14.445,14.445,0,0,0,28.889,14.445Zm-26.482,0A12.037,12.037,0,1,1,14.445,26.482,12.037,12.037,0,0,1,2.407,14.445Z"/>
                                        <path id="Path_2850" data-name="Path 2850"
                                              d="M8,13.216a3.6,3.6,0,0,1,.905-2.392c.35-.394.691-.767.935-1.011l3.4-3.458A1.2,1.2,0,0,1,14.956,8.04l-3.405,3.467c-.225.226-.531.563-.843.914a1.2,1.2,0,0,0,0,1.593c.311.349.616.686.834.905l3.414,3.474a1.2,1.2,0,0,1-1.717,1.685L9.834,16.613c-.241-.241-.578-.61-.926-1A3.6,3.6,0,0,1,8,13.216Z"
                                              transform="translate(1.63 1.228)"/>
                                    </svg>

                                </button>
                            </div>
                            <div class="thumbnail-plan thumbnail-plan-special bg-white flex flex-col items-center justify-start relative">
                                <div class="polygon-circle flex items-center absolute z-10 bg-white  justify-center">
                                    <img class="relative" width="40" src="img/view/png/Polygon-2.png" alt="">
                                </div>
                                <div class="detail-top mt-12 px-4 flex justify-between items-center w-full">
                                    <div class="text flex flex-col">
                                        <span class="text-s text-small RaviBold">انتخاب هوشمندانه</span>
                                        <h3 class="text-md RaviBold text-gray-s">اشتراک یکــساله</h3>
                                        <span class="text-small text-base RaviBold">دو ماه بیشتر ! یک سال پیشرفت.</span>
                                    </div>
                                    <div class="price flex flex-col items-center">
                                        <del class="text-normal text-light price-before">۳/۹۵۰/۰۰۰</del>
                                        <strong class="price-after bolX text-lg">۲/۹۹۰/۰۰۰ تومان</strong>
                                    </div>
                                </div>
                                <div class="features-list px-6 flex w-full flex-col items-start  mt-8 gap-3">
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">هاست ابری نامحدود رایگان</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span
                                            class="text-small mt-1 text-gray RaviBold">حسابداری، انبارداری آنلاین</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">دسترسی به تمامی ابزار های هوش مصنوعی</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">اتصال به دامنه شخصی</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">اتصال به کانال های فروش (ترب، ایمالز، ذره‌بین)</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">7 روز تست رایگان</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">7پشتیبانی رایگان (از ساعت ۹ صبح الی ۱۸ عصر)</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">طراحی گرافیکی اولیه سایت و چیدمان فنی</span>
                                    </div>
                                    <div class="no-feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/cancel.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">مشاوره دریافت اینماد و درگاه پرداخت مناسب</span>
                                    </div>
                                    <div class="no-feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/cancel.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">بارگذاری محصولات اولیه سایت تا ۳۰ محصول</span>
                                    </div>
                                    <div class="no-feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/cancel.png" alt="">
                                        <span
                                            class="text-small mt-1 text-gray RaviBold">پرداخت اشتراک بصورت اقساطی (۳ قسط)</span>
                                    </div>
                                    <div class="no-feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/cancel.png" alt="">
                                        <span
                                            class="text-small mt-1 text-gray RaviBold">مشاوره رایگان سئو و افزایش فروش</span>
                                    </div>
                                </div>
                                <button
                                    class="btn-base-two bg-white text-black border-2 border-black hover:bg-black hover:text-white text-small relative rounded-md mt-7 w-2/3">
                                    ساخت فروشگاه رایگان

                                    <svg class="absolute left-2" id="fi-rr-angle-circle-left"
                                         xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                         viewBox="0 0 28.889 28.889">
                                        <path id="Path_2849" data-name="Path 2849"
                                              d="M28.889,14.445A14.445,14.445,0,1,0,14.445,28.889,14.445,14.445,0,0,0,28.889,14.445Zm-26.482,0A12.037,12.037,0,1,1,14.445,26.482,12.037,12.037,0,0,1,2.407,14.445Z"/>
                                        <path id="Path_2850" data-name="Path 2850"
                                              d="M8,13.216a3.6,3.6,0,0,1,.905-2.392c.35-.394.691-.767.935-1.011l3.4-3.458A1.2,1.2,0,0,1,14.956,8.04l-3.405,3.467c-.225.226-.531.563-.843.914a1.2,1.2,0,0,0,0,1.593c.311.349.616.686.834.905l3.414,3.474a1.2,1.2,0,0,1-1.717,1.685L9.834,16.613c-.241-.241-.578-.61-.926-1A3.6,3.6,0,0,1,8,13.216Z"
                                              transform="translate(1.63 1.228)"/>
                                    </svg>

                                </button>
                            </div>
                            <div class="thumbnail-plan bg-white flex flex-col items-center justify-start relative">
                                <div class="polygon-circle flex items-center absolute z-10 bg-white  justify-center">
                                    <img class="relative" width="40" src="img/view/png/Polygon-3.png" alt="">
                                </div>
                                <div class="detail-top mt-12 px-4 flex justify-between items-center w-full">
                                    <div class="text flex flex-col">
                                        <h3 class="text-md RaviBold text-gray-s">مالکیت دائـــــــمی</h3>
                                        <span class="text-small text-base RaviBold">یک بار پرداخت، همیشه فعال</span>
                                    </div>
                                    <div class="price flex flex-col items-center">
                                        <del class="text-normal text-light price-before">۳۹/۵۰۰/۰۰۰</del>
                                        <strong class="price-after bolX text-lg">29/900/000 تومان</strong>
                                    </div>
                                </div>
                                <div class="features-list px-6 flex w-full flex-col items-start  mt-8 gap-3">
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">هاست ابری نامحدود رایگان</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span
                                            class="text-small mt-1 text-gray RaviBold">حسابداری، انبارداری آنلاین</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">دسترسی به تمامی ابزار های هوش مصنوعی</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">اتصال به دامنه شخصی</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">اتصال به کانال های فروش (ترب، ایمالز، ذره‌بین)</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">7 روز تست رایگان</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">7پشتیبانی رایگان (از ساعت ۹ صبح الی ۱۸ عصر)</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">طراحی گرافیکی اولیه سایت و چیدمان فنی</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">مشاوره دریافت اینماد و درگاه پرداخت مناسب</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">بارگذاری محصولات اولیه سایت تا ۳۰ محصول</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span
                                            class="text-small mt-1 text-gray RaviBold">پرداخت اشتراک بصورت اقساطی (۳ قسط)</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span
                                            class="text-small mt-1 text-gray RaviBold">مشاوره رایگان سئو و افزایش فروش</span>
                                    </div>
                                </div>
                                <button
                                    class="btn-base-two bg-white text-black border-2 border-black hover:bg-black hover:text-white text-small relative rounded-md mt-7 w-2/3">
                                    ساخت فروشگاه رایگان

                                    <svg class="absolute left-2" id="fi-rr-angle-circle-left"
                                         xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                         viewBox="0 0 28.889 28.889">
                                        <path id="Path_2849" data-name="Path 2849"
                                              d="M28.889,14.445A14.445,14.445,0,1,0,14.445,28.889,14.445,14.445,0,0,0,28.889,14.445Zm-26.482,0A12.037,12.037,0,1,1,14.445,26.482,12.037,12.037,0,0,1,2.407,14.445Z"/>
                                        <path id="Path_2850" data-name="Path 2850"
                                              d="M8,13.216a3.6,3.6,0,0,1,.905-2.392c.35-.394.691-.767.935-1.011l3.4-3.458A1.2,1.2,0,0,1,14.956,8.04l-3.405,3.467c-.225.226-.531.563-.843.914a1.2,1.2,0,0,0,0,1.593c.311.349.616.686.834.905l3.414,3.474a1.2,1.2,0,0,1-1.717,1.685L9.834,16.613c-.241-.241-.578-.61-.926-1A3.6,3.6,0,0,1,8,13.216Z"
                                              transform="translate(1.63 1.228)"/>
                                    </svg>

                                </button>
                            </div>

                        </div>
                    </div>
                    <div class="show-mobile w-full">
                        <div class="list-plans mx-auto overflow-x-scroll mt-14 mb-6 w-11/12 flex justify-start gap-3">
                            <div x-data="{showMore:false}"
                                 class="thumbnail-plan bg-white flex flex-col items-center justify-start relative">
                                <div class="polygon-circle flex items-center absolute z-10 bg-white  justify-center">
                                    <img class="relative bottom-1" width="40" src="img/view/png/Polygon-1.png" alt="">
                                </div>
                                <div
                                    class="detail-top mt-14 px-4 flex flex-col items-center justify-content-center w-full">
                                    <div class="text flex flex-col items-center">
                                        <h3 class="text-md RaviBold text-gray-s">اشتراک ۳ مـــاهه</h3>
                                        <span
                                            class="text-small text-base RaviBold">آزمایش ماهانه با امکانات کامل.</span>
                                    </div>
                                    <div class="price flex flex-col items-center">
                                        <del class="text-normal text-light price-before">۱/۱۸۵/۰۰۰</del>
                                        <strong class="price-after bolX text-lg">۸۸۵/۰۰۰ تومان</strong>
                                    </div>
                                </div>
                                <button
                                    class="btn-base-two bg-white text-black border-2 border-black hover:bg-black hover:text-white text-small relative btn-store-free  rounded-md mt-7">
                                    ساخت فروشگاه رایگان

                                    <svg class="absolute left-2" id="fi-rr-angle-circle-left"
                                         xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                         viewBox="0 0 28.889 28.889">
                                        <path id="Path_2849" data-name="Path 2849"
                                              d="M28.889,14.445A14.445,14.445,0,1,0,14.445,28.889,14.445,14.445,0,0,0,28.889,14.445Zm-26.482,0A12.037,12.037,0,1,1,14.445,26.482,12.037,12.037,0,0,1,2.407,14.445Z"/>
                                        <path id="Path_2850" data-name="Path 2850"
                                              d="M8,13.216a3.6,3.6,0,0,1,.905-2.392c.35-.394.691-.767.935-1.011l3.4-3.458A1.2,1.2,0,0,1,14.956,8.04l-3.405,3.467c-.225.226-.531.563-.843.914a1.2,1.2,0,0,0,0,1.593c.311.349.616.686.834.905l3.414,3.474a1.2,1.2,0,0,1-1.717,1.685L9.834,16.613c-.241-.241-.578-.61-.926-1A3.6,3.6,0,0,1,8,13.216Z"
                                              transform="translate(1.63 1.228)"/>
                                    </svg>

                                </button>
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
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">هاست ابری نامحدود رایگان</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span
                                            class="text-small mt-1 text-gray RaviBold">حسابداری، انبارداری آنلاین</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">دسترسی به تمامی ابزار های هوش مصنوعی</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">اتصال به دامنه شخصی</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">اتصال به کانال های فروش (ترب، ایمالز، ذره‌بین)</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">7 روز تست رایگان</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">7پشتیبانی رایگان (از ساعت ۹ صبح الی ۱۸ عصر)</span>
                                    </div>
                                    <div class="no-feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/cancel.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">طراحی گرافیکی اولیه سایت و چیدمان فنی</span>
                                    </div>
                                    <div class="no-feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/cancel.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">مشاوره دریافت اینماد و درگاه پرداخت مناسب</span>
                                    </div>
                                    <div class="no-feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/cancel.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">بارگذاری محصولات اولیه سایت تا ۳۰ محصول</span>
                                    </div>
                                    <div class="no-feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/cancel.png" alt="">
                                        <span
                                            class="text-small mt-1 text-gray RaviBold">پرداخت اشتراک بصورت اقساطی (۳ قسط)</span>
                                    </div>
                                    <div class="no-feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/cancel.png" alt="">
                                        <span
                                            class="text-small mt-1 text-gray RaviBold">مشاوره رایگان سئو و افزایش فروش</span>
                                    </div>
                                </div>
                            </div>


                            <div x-data="{showMore:false}"
                                 class="thumbnail-plan bg-white flex flex-col items-center justify-start relative">
                                <div class="polygon-circle flex items-center absolute z-10 bg-white  justify-center">
                                    <img class="relative" width="40" src="img/view/png/Polygon-2.png" alt="">
                                </div>
                                <div class="detail-top mt-12 px-4 flex justify-center flex-col items-center w-full">
                                    <div class="text flex flex-col items-center">
                                        <span class="text-s text-small RaviBold">انتخاب هوشمندانه</span>
                                        <h3 class="text-md RaviBold text-gray-s">اشتراک یکــساله</h3>
                                        <span class="text-small text-base RaviBold">دو ماه بیشتر ! یک سال پیشرفت.</span>
                                    </div>
                                    <div class="price flex flex-col items-center">
                                        <del class="text-normal text-light price-before">۳/۹۵۰/۰۰۰</del>
                                        <strong class="price-after bolX text-lg">۲/۹۹۰/۰۰۰ تومان</strong>
                                    </div>
                                </div>
                                <button
                                    class="btn-base-two bg-white text-black border-2 border-black hover:bg-black hover:text-white btn-store-free text-small relative rounded-md mt-7 ">
                                    ساخت فروشگاه رایگان

                                    <svg class="absolute left-2" id="fi-rr-angle-circle-left"
                                         xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                         viewBox="0 0 28.889 28.889">
                                        <path id="Path_2849" data-name="Path 2849"
                                              d="M28.889,14.445A14.445,14.445,0,1,0,14.445,28.889,14.445,14.445,0,0,0,28.889,14.445Zm-26.482,0A12.037,12.037,0,1,1,14.445,26.482,12.037,12.037,0,0,1,2.407,14.445Z"/>
                                        <path id="Path_2850" data-name="Path 2850"
                                              d="M8,13.216a3.6,3.6,0,0,1,.905-2.392c.35-.394.691-.767.935-1.011l3.4-3.458A1.2,1.2,0,0,1,14.956,8.04l-3.405,3.467c-.225.226-.531.563-.843.914a1.2,1.2,0,0,0,0,1.593c.311.349.616.686.834.905l3.414,3.474a1.2,1.2,0,0,1-1.717,1.685L9.834,16.613c-.241-.241-.578-.61-.926-1A3.6,3.6,0,0,1,8,13.216Z"
                                              transform="translate(1.63 1.228)"/>
                                    </svg>

                                </button>
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
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">هاست ابری نامحدود رایگان</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span
                                            class="text-small mt-1 text-gray RaviBold">حسابداری، انبارداری آنلاین</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">دسترسی به تمامی ابزار های هوش مصنوعی</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">اتصال به دامنه شخصی</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">اتصال به کانال های فروش (ترب، ایمالز، ذره‌بین)</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">7 روز تست رایگان</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">7پشتیبانی رایگان (از ساعت ۹ صبح الی ۱۸ عصر)</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">طراحی گرافیکی اولیه سایت و چیدمان فنی</span>
                                    </div>
                                    <div class="no-feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/cancel.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">مشاوره دریافت اینماد و درگاه پرداخت مناسب</span>
                                    </div>
                                    <div class="no-feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/cancel.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">بارگذاری محصولات اولیه سایت تا ۳۰ محصول</span>
                                    </div>
                                    <div class="no-feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/cancel.png" alt="">
                                        <span
                                            class="text-small mt-1 text-gray RaviBold">پرداخت اشتراک بصورت اقساطی (۳ قسط)</span>
                                    </div>
                                    <div class="no-feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/cancel.png" alt="">
                                        <span
                                            class="text-small mt-1 text-gray RaviBold">مشاوره رایگان سئو و افزایش فروش</span>
                                    </div>
                                </div>
                            </div>
                            <div x-data="{showMore:false}"
                                 class="thumbnail-plan bg-white flex flex-col items-center justify-start relative">
                                <div class="polygon-circle flex items-center absolute z-10 bg-white  justify-center">
                                    <img class="relative" width="40" src="img/view/png/Polygon-3.png" alt="">
                                </div>
                                <div class="detail-top mt-12 px-4 flex flex-col justify-center items-center w-full">
                                    <div class="text flex flex-col items-center">
                                        <h3 class="text-md RaviBold text-gray-s">مالکیت دائـــــــمی</h3>
                                        <span class="text-small text-base RaviBold">یک بار پرداخت، همیشه فعال</span>
                                    </div>
                                    <div class="price flex flex-col items-center">
                                        <del class="text-normal text-light price-before">۳۹/۵۰۰/۰۰۰</del>
                                        <strong class="price-after bolX text-lg">29/900/000 تومان</strong>
                                    </div>
                                </div>
                                <button
                                    class="btn-base-two bg-white text-black border-2 border-black hover:bg-black hover:text-white btn-store-free text-small relative rounded-md mt-7 ">
                                    ساخت فروشگاه رایگان

                                    <svg class="absolute left-2" id="fi-rr-angle-circle-left"
                                         xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                         viewBox="0 0 28.889 28.889">
                                        <path id="Path_2849" data-name="Path 2849"
                                              d="M28.889,14.445A14.445,14.445,0,1,0,14.445,28.889,14.445,14.445,0,0,0,28.889,14.445Zm-26.482,0A12.037,12.037,0,1,1,14.445,26.482,12.037,12.037,0,0,1,2.407,14.445Z"/>
                                        <path id="Path_2850" data-name="Path 2850"
                                              d="M8,13.216a3.6,3.6,0,0,1,.905-2.392c.35-.394.691-.767.935-1.011l3.4-3.458A1.2,1.2,0,0,1,14.956,8.04l-3.405,3.467c-.225.226-.531.563-.843.914a1.2,1.2,0,0,0,0,1.593c.311.349.616.686.834.905l3.414,3.474a1.2,1.2,0,0,1-1.717,1.685L9.834,16.613c-.241-.241-.578-.61-.926-1A3.6,3.6,0,0,1,8,13.216Z"
                                              transform="translate(1.63 1.228)"/>
                                    </svg>

                                </button>
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
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">هاست ابری نامحدود رایگان</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span
                                            class="text-small mt-1 text-gray RaviBold">حسابداری، انبارداری آنلاین</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">دسترسی به تمامی ابزار های هوش مصنوعی</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">اتصال به دامنه شخصی</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">اتصال به کانال های فروش (ترب، ایمالز، ذره‌بین)</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">7 روز تست رایگان</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">7پشتیبانی رایگان (از ساعت ۹ صبح الی ۱۸ عصر)</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">طراحی گرافیکی اولیه سایت و چیدمان فنی</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">مشاوره دریافت اینماد و درگاه پرداخت مناسب</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span class="text-small mt-1 text-gray RaviBold">بارگذاری محصولات اولیه سایت تا ۳۰ محصول</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span
                                            class="text-small mt-1 text-gray RaviBold">پرداخت اشتراک بصورت اقساطی (۳ قسط)</span>
                                    </div>
                                    <div class="feature flex justify-start gap-2 w-full">
                                        <img class="object-contain" width="18" src="img/view/png/tick.png" alt="">
                                        <span
                                            class="text-small mt-1 text-gray RaviBold">مشاوره رایگان سئو و افزایش فروش</span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="w-full flex justify-center mt-8">
                        <p class="w-1/2 max-[600px]:w-full  text-sm leading-6 medium text-center text-gray">اشتراک های باهوش از نظر امکانات
                            و ویژگی های فنی باهم تفاوتی ندارند ! این مورد برای انتخاب
                            راحت کسب و کار می باشد. پس راحت انتخاب کنید و خیالتان برای ارتقا راحت باشد هر موقع که دوست
                            دارید می توانید اشتراک خود را ارتقا دهید :)
                            <br>
                            در ادامه تمامی ویژگی ها و امکانات باهوش را در یک نگاه مشاهده کنید :</p>
                    </div>
                </div>
                <div class="row-three mt-12 w-full flex flex-col items-center">
                    <div class="title-website-s">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 31.835 24">
                            <g id="fi-rr-list" transform="translate(-0.118 0.321)">
                                <path id="Path_2897" data-name="Path 2897"
                                      d="M7.331,6.663h21.3a1.331,1.331,0,1,0,0-2.663H7.331a1.331,1.331,0,1,0,0,2.663Z"
                                      transform="translate(1.988 -2.669)"/>
                                <path id="Path_2898" data-name="Path 2898"
                                      d="M28.633,11H7.331a1.331,1.331,0,1,0,0,2.663h21.3a1.331,1.331,0,1,0,0-2.663Z"
                                      transform="translate(1.988 -0.349)"/>
                                <path id="Path_2899" data-name="Path 2899"
                                      d="M28.633,18H7.331a1.331,1.331,0,1,0,0,2.663h21.3a1.331,1.331,0,1,0,0-2.663Z"
                                      transform="translate(1.988 1.971)"/>
                                <ellipse id="Ellipse_453" data-name="Ellipse 453" cx="2.5" cy="3" rx="2.5" ry="3"
                                         transform="translate(0.118 -0.321)"/>
                                <circle id="Ellipse_454" data-name="Ellipse 454" cx="2.5" cy="2.5" r="2.5"
                                        transform="translate(0.118 9.679)"/>
                                <circle id="Ellipse_455" data-name="Ellipse 455" cx="2.5" cy="2.5" r="2.5"
                                        transform="translate(0.118 18.679)"/>
                            </g>
                        </svg>
                        <h2 class="relative">امکانات پکیج ها در یک نگاه</h2>
                    </div>
                    <div x-data="{option : 1}"
                         class="list-faq gap-3 mt-5  w-full flex flex-col items-center justify-start">
                        <div class="option-thumbnail bg-white rounded-2xl flex flex-col w-full">
                            <div @click="option = 1"
                                 class="question-faq rounded-2xl head-option cursor-pointer  w-full flex justify-between items-center">
                                <div class="start w-4/5 flex gap-3 items-center justify-start">

                                    <h4 class="text-normal relative top-1 bolX">
                                        امکانات کامل و حرفه‌ای فروشگاهی
                                    </h4>
                                </div>
                                <div class="end">
                                    <svg class="arrow" :class="option===1? 'arrow-active':''"
                                         xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                         viewBox="0 0 28.889 28.89">
                                        <path id="fi-rr-arrow-alt-square-left"
                                              d="M22.871,0H6.019A6.025,6.025,0,0,0,0,6.019V22.871a6.025,6.025,0,0,0,6.019,6.019H22.871a6.025,6.025,0,0,0,6.019-6.019V6.019A6.025,6.025,0,0,0,22.871,0Zm3.611,22.871a3.616,3.616,0,0,1-3.611,3.611H6.019a3.616,3.616,0,0,1-3.611-3.611V6.019A3.616,3.616,0,0,1,6.019,2.407H22.871a3.616,3.616,0,0,1,3.611,3.611Zm-4.815-8.426a1.2,1.2,0,0,1-1.2,1.2H14.445v4.046a.954.954,0,0,1-1.625.664L7.5,15.109a.931.931,0,0,1,0-1.329L12.82,8.531a.954.954,0,0,1,1.625.664v4.046h6.019A1.2,1.2,0,0,1,21.667,14.445Z"
                                              transform="translate(0 28.89) rotate(-90)"/>
                                    </svg>
                                </div>
                            </div>
                            <div style="display: none" x-show="option===1" x-collapse.duration.1000ms class="w-full">
                                <div x-data class="options-collapse p-4  flex flex-wrap items-center justify-start gap-4  mt-5 w-full">
                                    <template x-for="item in 20">
                                        <div class="item-option flex items-center justify-start gap-2">
                                            <div class="circle"></div>
                                            <span class="text-small medium text-gray">عدم دریافت کارمزد از فروشگاه </span>
                                        </div>
                                    </template>

                                </div>

                            </div>
                        </div>
                        <div class="option-thumbnail bg-white rounded-2xl flex flex-col w-full">
                            <div @click="option = 2"
                                 class="question-faq rounded-2xl head-option cursor-pointer  w-full flex justify-between items-center">
                                <div class="start w-4/5 flex gap-3 items-center justify-start">

                                    <h4 class="text-normal relative top-1 bolX">
                                        طراحی حرفه‌ای و شخصی‌سازی کامل
                                    </h4>
                                </div>
                                <div class="end">
                                    <svg class="arrow" :class="option===2? 'arrow-active':''"
                                         xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                         viewBox="0 0 28.889 28.89">
                                        <path id="fi-rr-arrow-alt-square-left"
                                              d="M22.871,0H6.019A6.025,6.025,0,0,0,0,6.019V22.871a6.025,6.025,0,0,0,6.019,6.019H22.871a6.025,6.025,0,0,0,6.019-6.019V6.019A6.025,6.025,0,0,0,22.871,0Zm3.611,22.871a3.616,3.616,0,0,1-3.611,3.611H6.019a3.616,3.616,0,0,1-3.611-3.611V6.019A3.616,3.616,0,0,1,6.019,2.407H22.871a3.616,3.616,0,0,1,3.611,3.611Zm-4.815-8.426a1.2,1.2,0,0,1-1.2,1.2H14.445v4.046a.954.954,0,0,1-1.625.664L7.5,15.109a.931.931,0,0,1,0-1.329L12.82,8.531a.954.954,0,0,1,1.625.664v4.046h6.019A1.2,1.2,0,0,1,21.667,14.445Z"
                                              transform="translate(0 28.89) rotate(-90)"/>
                                    </svg>
                                </div>
                            </div>
                            <div style="display: none" x-show="option===2" x-collapse.duration.1000ms class="w-full">
                                <div x-data class="options-collapse p-4  flex flex-wrap items-center justify-start gap-4  mt-5 w-full">
                                    <template x-for="item in 20">
                                        <div class="item-option flex items-center justify-start gap-2">
                                            <div class="circle"></div>
                                            <span class="text-small medium text-gray">عدم دریافت کارمزد از فروشگاه </span>
                                        </div>
                                    </template>

                                </div>

                            </div>
                        </div>
                        <div class="option-thumbnail bg-white rounded-2xl flex flex-col w-full">
                            <div @click="option = 3"
                                 class="question-faq rounded-2xl head-option cursor-pointer  w-full flex justify-between items-center">
                                <div class="start w-4/5 flex gap-3 items-center justify-start">
                                    <h4 class="text-normal relative top-1 bolX">
                                        ابزارهای مدیریت محصول و سفارشات
                                    </h4>
                                </div>
                                <div class="end">
                                    <svg class="arrow" :class="option===3? 'arrow-active':''"
                                         xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                         viewBox="0 0 28.889 28.89">
                                        <path id="fi-rr-arrow-alt-square-left"
                                              d="M22.871,0H6.019A6.025,6.025,0,0,0,0,6.019V22.871a6.025,6.025,0,0,0,6.019,6.019H22.871a6.025,6.025,0,0,0,6.019-6.019V6.019A6.025,6.025,0,0,0,22.871,0Zm3.611,22.871a3.616,3.616,0,0,1-3.611,3.611H6.019a3.616,3.616,0,0,1-3.611-3.611V6.019A3.616,3.616,0,0,1,6.019,2.407H22.871a3.616,3.616,0,0,1,3.611,3.611Zm-4.815-8.426a1.2,1.2,0,0,1-1.2,1.2H14.445v4.046a.954.954,0,0,1-1.625.664L7.5,15.109a.931.931,0,0,1,0-1.329L12.82,8.531a.954.954,0,0,1,1.625.664v4.046h6.019A1.2,1.2,0,0,1,21.667,14.445Z"
                                              transform="translate(0 28.89) rotate(-90)"/>
                                    </svg>
                                </div>
                            </div>
                            <div style="display: none" x-show="option===3" x-collapse.duration.1000ms class="w-full">
                                <div x-data class="options-collapse p-4  flex flex-wrap items-center justify-start gap-4  mt-5 w-full">
                                    <template x-for="item in 20">
                                        <div class="item-option flex items-center justify-start gap-2">
                                            <div class="circle"></div>
                                            <span class="text-small medium text-gray">عدم دریافت کارمزد از فروشگاه </span>
                                        </div>
                                    </template>

                                </div>

                            </div>
                        </div>

                    </div>
                    <button class="btn-base bg-black text-white hover:bg-white hover:text-black border-2 border-black my-7 w-64 gap-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 28.057 30.608">
                            <path id="fi-rr-mug-hot"
                                  d="M24.594,12.753h-.638V11.478A3.826,3.826,0,0,0,20.13,7.652H4.826A3.826,3.826,0,0,0,1,11.478V24.231a6.384,6.384,0,0,0,6.377,6.377h10.2a6.388,6.388,0,0,0,6.249-5.1,4.591,4.591,0,0,0,5.229-4.464V17.217A4.464,4.464,0,0,0,24.594,12.753Zm-7.014,15.3H7.377a3.826,3.826,0,0,1-3.826-3.826V11.478A1.275,1.275,0,0,1,4.826,10.2h15.3a1.275,1.275,0,0,1,1.275,1.275V24.231a3.826,3.826,0,0,1-3.826,3.826Zm8.927-7.014a2.067,2.067,0,0,1-2.551,1.913V15.3a2.067,2.067,0,0,1,2.551,1.913ZM11.2,3.826V1.275a1.275,1.275,0,1,1,2.551,0V3.826a1.275,1.275,0,1,1-2.551,0Zm5.1,0V1.275a1.275,1.275,0,1,1,2.551,0V3.826a1.275,1.275,0,1,1-2.551,0Zm-10.2,0V1.275a1.275,1.275,0,1,1,2.551,0V3.826a1.275,1.275,0,1,1-2.551,0Z"
                                  transform="translate(-1)" fill="#fff"/>
                        </svg>

                        ساخت فروشگاه رایگان
                    </button>

                </div>

                <div
                    x-data="{
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
        }"

                    class="row-three w-full flex mt-6 flex-col items-center">
                    <div class="title-website-s">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 30.405 30.404">
                            <path id="fi-rr-comment-quote" d="M13.936,12.035V16.47a5.073,5.073,0,0,1-5.068,5.068,1.267,1.267,0,1,1,0-2.534A2.536,2.536,0,0,0,11.4,16.47H9.5a1.9,1.9,0,0,1-1.9-1.9v-1.9a2.533,2.533,0,0,1,2.534-2.534h1.9A1.9,1.9,0,0,1,13.936,12.035Zm6.968-1.9H19a2.533,2.533,0,0,0-2.534,2.534v1.9a1.9,1.9,0,0,0,1.9,1.9h1.9A2.536,2.536,0,0,1,17.737,19a1.267,1.267,0,1,0,0,2.534A5.073,5.073,0,0,0,22.8,16.47V12.035A1.9,1.9,0,0,0,20.9,10.135Zm9.5,5.5v8.438a6.342,6.342,0,0,1-6.335,6.335h-7.5C7.705,30.406.6,24.335.038,16.285A15.207,15.207,0,0,1,16.262.035,15.469,15.469,0,0,1,30.406,15.634Zm-2.534,0A12.925,12.925,0,0,0,16.091,2.565c-.29-.02-.58-.029-.868-.029A12.671,12.671,0,0,0,2.565,16.111c.473,6.816,6.364,11.762,14.01,11.762h7.5a3.805,3.805,0,0,0,3.8-3.8V15.635Z" transform="translate(-0.001 -0.001)"/>
                        </svg>
                        <h2 class="relative">داستان‌های موفقیت کسب‌وکارها با ما</h2>
                    </div>
                    <div class="p-swiper w-full relative flex items-center justify-between mt-4">
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
                                <div class="swiper-slide">
                                    <div class="box-store flex flex-col items-center w-full">
                                        <div class="logo-store flex items-center justify-content-center p-2">
                                            <div class="img p-2 bg-white flex items-center justify-content-center">
                                                <img src="img/view/png/rahino.png" alt="">
                                            </div>
                                        </div>
                                        <div class="row-title relative bottom-6 w-full flex justify-between px-5">
                                            <h3 class="text-sm text-gray RaviBold">فروشگاه آنلاین پوشاک راینو</h3>
                                            <a href=""
                                               class="link-store RaviBold text-base text-normal">www.rhino-brand.com</a>
                                        </div>
                                        <div class="row-description pb-3 px-5">
                                            <p class="text-small text-center text-gray RaviBold relative bottom-3">
                                                فروشگاه ساز باهوش با استفاده از سیستم مدیریت اختصاصی که داشت و قسمت انبارداری آنلاین به ما کمک کرد که موجودی تمامی فروشگاه هایی که در سطح شهر داریم رو در سایت نمایش بدیم جهت فروش و با استفاده از ابزار سئو خیلی فروش خوبی رو تجربه کردیم :)
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="box-store flex flex-col items-center w-full">
                                        <div class="logo-store flex items-center justify-content-center p-2">
                                            <div class="img p-2 bg-white flex items-center justify-content-center">
                                                <img src="img/view/png/rahino.png" alt="">
                                            </div>
                                        </div>
                                        <div class="row-title relative bottom-6 w-full flex justify-between px-5">
                                            <h3 class="text-sm text-gray RaviBold">فروشگاه آنلاین پوشاک راینو</h3>
                                            <a href=""
                                               class="link-store RaviBold text-base text-normal">www.rhino-brand.com</a>
                                        </div>
                                        <div class="row-description pb-3 px-5">
                                            <p class="text-small text-center text-gray RaviBold relative bottom-3">
                                                فروشگاه ساز باهوش با استفاده از سیستم مدیریت اختصاصی که داشت و قسمت انبارداری آنلاین به ما کمک کرد که موجودی تمامی فروشگاه هایی که در سطح شهر داریم رو در سایت نمایش بدیم جهت فروش و با استفاده از ابزار سئو خیلی فروش خوبی رو تجربه کردیم :)
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="box-store flex flex-col items-center w-full">
                                        <div class="logo-store flex items-center justify-content-center p-2">
                                            <div class="img p-2 bg-white flex items-center justify-content-center">
                                                <img src="img/view/png/rahino.png" alt="">
                                            </div>
                                        </div>
                                        <div class="row-title relative bottom-6 w-full flex justify-between px-5">
                                            <h3 class="text-sm text-gray RaviBold">فروشگاه آنلاین پوشاک راینو</h3>
                                            <a href=""
                                               class="link-store RaviBold text-base text-normal">www.rhino-brand.com</a>
                                        </div>
                                        <div class="row-description pb-3 px-5">
                                            <p class="text-small text-center text-gray RaviBold relative bottom-3">
                                                فروشگاه ساز باهوش با استفاده از سیستم مدیریت اختصاصی که داشت و قسمت انبارداری آنلاین به ما کمک کرد که موجودی تمامی فروشگاه هایی که در سطح شهر داریم رو در سایت نمایش بدیم جهت فروش و با استفاده از ابزار سئو خیلی فروش خوبی رو تجربه کردیم :)
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="box-store flex flex-col items-center w-full">
                                        <div class="logo-store flex items-center justify-content-center p-2">
                                            <div class="img p-2 bg-white flex items-center justify-content-center">
                                                <img src="img/view/png/rahino.png" alt="">
                                            </div>
                                        </div>
                                        <div class="row-title relative bottom-6 w-full flex justify-between px-5">
                                            <h3 class="text-sm text-gray RaviBold">فروشگاه آنلاین پوشاک راینو</h3>
                                            <a href=""
                                               class="link-store RaviBold text-base text-normal">www.rhino-brand.com</a>
                                        </div>
                                        <div class="row-description pb-3 px-5">
                                            <p class="text-small text-center text-gray RaviBold relative bottom-3">
                                                فروشگاه ساز باهوش با استفاده از سیستم مدیریت اختصاصی که داشت و قسمت انبارداری آنلاین به ما کمک کرد که موجودی تمامی فروشگاه هایی که در سطح شهر داریم رو در سایت نمایش بدیم جهت فروش و با استفاده از ابزار سئو خیلی فروش خوبی رو تجربه کردیم :)
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="box-store flex flex-col items-center w-full">
                                        <div class="logo-store flex items-center justify-content-center p-2">
                                            <div class="img p-2 bg-white flex items-center justify-content-center">
                                                <img src="img/view/png/rahino.png" alt="">
                                            </div>
                                        </div>
                                        <div class="row-title relative bottom-6 w-full flex justify-between px-5">
                                            <h3 class="text-sm text-gray RaviBold">فروشگاه آنلاین پوشاک راینو</h3>
                                            <a href=""
                                               class="link-store RaviBold text-base text-normal">www.rhino-brand.com</a>
                                        </div>
                                        <div class="row-description pb-3 px-5">
                                            <p class="text-small text-center text-gray RaviBold relative bottom-3">
                                                فروشگاه ساز باهوش با استفاده از سیستم مدیریت اختصاصی که داشت و قسمت انبارداری آنلاین به ما کمک کرد که موجودی تمامی فروشگاه هایی که در سطح شهر داریم رو در سایت نمایش بدیم جهت فروش و با استفاده از ابزار سئو خیلی فروش خوبی رو تجربه کردیم :)
                                            </p>
                                        </div>
                                    </div>
                                </div>
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
                <div class="row-four w-full flex mt-7 mb-16 flex-col items-center">
                    <div class="title-website-s">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 30.405 30.404">
                            <path id="fi-rr-comment-quote" d="M13.936,12.035V16.47a5.073,5.073,0,0,1-5.068,5.068,1.267,1.267,0,1,1,0-2.534A2.536,2.536,0,0,0,11.4,16.47H9.5a1.9,1.9,0,0,1-1.9-1.9v-1.9a2.533,2.533,0,0,1,2.534-2.534h1.9A1.9,1.9,0,0,1,13.936,12.035Zm6.968-1.9H19a2.533,2.533,0,0,0-2.534,2.534v1.9a1.9,1.9,0,0,0,1.9,1.9h1.9A2.536,2.536,0,0,1,17.737,19a1.267,1.267,0,1,0,0,2.534A5.073,5.073,0,0,0,22.8,16.47V12.035A1.9,1.9,0,0,0,20.9,10.135Zm9.5,5.5v8.438a6.342,6.342,0,0,1-6.335,6.335h-7.5C7.705,30.406.6,24.335.038,16.285A15.207,15.207,0,0,1,16.262.035,15.469,15.469,0,0,1,30.406,15.634Zm-2.534,0A12.925,12.925,0,0,0,16.091,2.565c-.29-.02-.58-.029-.868-.029A12.671,12.671,0,0,0,2.565,16.111c.473,6.816,6.364,11.762,14.01,11.762h7.5a3.805,3.805,0,0,0,3.8-3.8V15.635Z" transform="translate(-0.001 -0.001)"/>
                        </svg>
                        <h2 class="relative">سوالات متداول</h2>
                    </div>
                    <div x-data="{faq : 1}"
                         class="list-faq gap-3 mt-5 w-full flex flex-col items-center justify-start">
                        <div class="faq-thumbnail bg-white rounded-2xl flex flex-col w-full">
                            <div @click="faq = 1"
                                 class="question-faq cursor-pointer  w-full flex justify-between items-center">
                                <div class="start w-4/5 flex gap-3 items-center justify-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="25"
                                         viewBox="0 0 19.889 29.835">
                                        <path id="fi-rr-question"
                                              d="M13.946,24.865A1.243,1.243,0,0,1,12.7,23.621c0-2.882,1.718-5.417,4.837-7.137A7.461,7.461,0,1,0,6.485,9.946,1.243,1.243,0,0,1,4,9.946a9.949,9.949,0,1,1,14.742,8.716c-1.62.893-3.552,2.478-3.552,4.959a1.243,1.243,0,0,1-1.243,1.243Zm-1.865,3.108a1.865,1.865,0,1,0,1.865-1.865A1.866,1.866,0,0,0,12.081,27.973Z"
                                              transform="translate(-3.999 -0.002)"/>
                                    </svg>
                                    <h4 class="text-normal bolX">برای راه اندازی فروشگاه نیاز به دانش فنی یا فرد
                                        برنامه نویس است ؟</h4>
                                </div>
                                <div class="end">
                                    <svg class="arrow" :class="faq===1? 'arrow-active':''"
                                         xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                         viewBox="0 0 28.889 28.89">
                                        <path id="fi-rr-arrow-alt-square-left"
                                              d="M22.871,0H6.019A6.025,6.025,0,0,0,0,6.019V22.871a6.025,6.025,0,0,0,6.019,6.019H22.871a6.025,6.025,0,0,0,6.019-6.019V6.019A6.025,6.025,0,0,0,22.871,0Zm3.611,22.871a3.616,3.616,0,0,1-3.611,3.611H6.019a3.616,3.616,0,0,1-3.611-3.611V6.019A3.616,3.616,0,0,1,6.019,2.407H22.871a3.616,3.616,0,0,1,3.611,3.611Zm-4.815-8.426a1.2,1.2,0,0,1-1.2,1.2H14.445v4.046a.954.954,0,0,1-1.625.664L7.5,15.109a.931.931,0,0,1,0-1.329L12.82,8.531a.954.954,0,0,1,1.625.664v4.046h6.019A1.2,1.2,0,0,1,21.667,14.445Z"
                                              transform="translate(0 28.89) rotate(-90)"/>
                                    </svg>
                                </div>
                            </div>
                            <div style="display: none" x-show="faq===1" x-collapse.duration.1000ms class="w-full">
                                <div class="answer-faq  mt-5 w-full">
                                    <p class="text mt-3 text-gray text-small text-justify">
                                        خیر، سرور های داخلی باهوش توسط بهترین شرکت های هاستینگ و سرور ایران مدیریت
                                        می
                                        شود و دارای امنیت بالا و CDN اختصاصی برای هر دامنه می باشد. پس نیازی نیست
                                        هزینه
                                        های میلیون تومانی برای تهیه هاست و سرور بکنید و بصورت رایگان و فضای نامحدود
                                        از
                                        داشتن سایت لذت ببرید.
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="faq-thumbnail bg-white rounded-2xl flex flex-col w-full">
                            <div @click="faq = 2"
                                 class="question-faq cursor-pointer  w-full flex justify-between items-center">
                                <div class="start w-4/5 flex gap-3 items-center justify-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="25"
                                         viewBox="0 0 19.889 29.835">
                                        <path id="fi-rr-question"
                                              d="M13.946,24.865A1.243,1.243,0,0,1,12.7,23.621c0-2.882,1.718-5.417,4.837-7.137A7.461,7.461,0,1,0,6.485,9.946,1.243,1.243,0,0,1,4,9.946a9.949,9.949,0,1,1,14.742,8.716c-1.62.893-3.552,2.478-3.552,4.959a1.243,1.243,0,0,1-1.243,1.243Zm-1.865,3.108a1.865,1.865,0,1,0,1.865-1.865A1.866,1.866,0,0,0,12.081,27.973Z"
                                              transform="translate(-3.999 -0.002)"/>
                                    </svg>
                                    <h4 class="text-normal bolX">برای داشتن فروشگاه اینترنتی نیاز به سرور یا هاست
                                        است ؟
                                    </h4>
                                </div>
                                <div class="end">
                                    <svg class="arrow" :class="faq===2? 'arrow-active':''"
                                         xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                         viewBox="0 0 28.889 28.89">
                                        <path id="fi-rr-arrow-alt-square-left"
                                              d="M22.871,0H6.019A6.025,6.025,0,0,0,0,6.019V22.871a6.025,6.025,0,0,0,6.019,6.019H22.871a6.025,6.025,0,0,0,6.019-6.019V6.019A6.025,6.025,0,0,0,22.871,0Zm3.611,22.871a3.616,3.616,0,0,1-3.611,3.611H6.019a3.616,3.616,0,0,1-3.611-3.611V6.019A3.616,3.616,0,0,1,6.019,2.407H22.871a3.616,3.616,0,0,1,3.611,3.611Zm-4.815-8.426a1.2,1.2,0,0,1-1.2,1.2H14.445v4.046a.954.954,0,0,1-1.625.664L7.5,15.109a.931.931,0,0,1,0-1.329L12.82,8.531a.954.954,0,0,1,1.625.664v4.046h6.019A1.2,1.2,0,0,1,21.667,14.445Z"
                                              transform="translate(0 28.89) rotate(-90)"/>
                                    </svg>
                                </div>
                            </div>
                            <div style="display: none" x-collapse.duration.1000ms x-show="faq===2" class="w-full">
                                <div class="answer-faq  mt-5 w-full">
                                    <p class="text mt-3 text-gray text-small text-justify">
                                        خیر، سرور های داخلی باهوش توسط بهترین شرکت های هاستینگ و سرور ایران مدیریت
                                        می
                                        شود و دارای امنیت بالا و CDN اختصاصی برای هر دامنه می باشد. پس نیازی نیست
                                        هزینه
                                        های میلیون تومانی برای تهیه هاست و سرور بکنید و بصورت رایگان و فضای نامحدود
                                        از
                                        داشتن سایت لذت ببرید.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="faq-thumbnail bg-white rounded-2xl flex flex-col w-full">
                            <div @click="faq = 3"
                                 class="question-faq cursor-pointer  w-full flex justify-between items-center">
                                <div class="start w-4/5 flex gap-3 items-center justify-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="25"
                                         viewBox="0 0 19.889 29.835">
                                        <path id="fi-rr-question"
                                              d="M13.946,24.865A1.243,1.243,0,0,1,12.7,23.621c0-2.882,1.718-5.417,4.837-7.137A7.461,7.461,0,1,0,6.485,9.946,1.243,1.243,0,0,1,4,9.946a9.949,9.949,0,1,1,14.742,8.716c-1.62.893-3.552,2.478-3.552,4.959a1.243,1.243,0,0,1-1.243,1.243Zm-1.865,3.108a1.865,1.865,0,1,0,1.865-1.865A1.866,1.866,0,0,0,12.081,27.973Z"
                                              transform="translate(-3.999 -0.002)"/>
                                    </svg>
                                    <h4 class="text-normal bolX">
                                        قبل از خرید اشتراک میتوانیم دمو از ادمین داشته باشیم ؟
                                    </h4>
                                </div>
                                <div class="end">
                                    <svg class="arrow" :class="faq===3? 'arrow-active':''"
                                         xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                         viewBox="0 0 28.889 28.89">
                                        <path id="fi-rr-arrow-alt-square-left"
                                              d="M22.871,0H6.019A6.025,6.025,0,0,0,0,6.019V22.871a6.025,6.025,0,0,0,6.019,6.019H22.871a6.025,6.025,0,0,0,6.019-6.019V6.019A6.025,6.025,0,0,0,22.871,0Zm3.611,22.871a3.616,3.616,0,0,1-3.611,3.611H6.019a3.616,3.616,0,0,1-3.611-3.611V6.019A3.616,3.616,0,0,1,6.019,2.407H22.871a3.616,3.616,0,0,1,3.611,3.611Zm-4.815-8.426a1.2,1.2,0,0,1-1.2,1.2H14.445v4.046a.954.954,0,0,1-1.625.664L7.5,15.109a.931.931,0,0,1,0-1.329L12.82,8.531a.954.954,0,0,1,1.625.664v4.046h6.019A1.2,1.2,0,0,1,21.667,14.445Z"
                                              transform="translate(0 28.89) rotate(-90)"/>
                                    </svg>
                                </div>
                            </div>
                            <div style="display: none" x-show="faq===3" x-collapse.duration.1000ms class="w-full">
                                <div class="answer-faq  mt-5 w-full">
                                    <p class="text mt-3 text-gray text-small text-justify">
                                        خیر، سرور های داخلی باهوش توسط بهترین شرکت های هاستینگ و سرور ایران مدیریت
                                        می
                                        شود و دارای امنیت بالا و CDN اختصاصی برای هر دامنه می باشد. پس نیازی نیست
                                        هزینه
                                        های میلیون تومانی برای تهیه هاست و سرور بکنید و بصورت رایگان و فضای نامحدود
                                        از
                                        داشتن سایت لذت ببرید.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="row-five w-full flex mt-7 mb-16 flex-col items-center">
                    <div class="col-support flex flex-col items-center w-full">
                        <div class="title-website-col w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 31.953 31.955">
                                <path id="fi-rr-head-side-headphones"
                                      d="M26.363,5.884A14.531,14.531,0,0,0,12.585.142,14.64,14.64,0,0,0,3.01,23.53a5.17,5.17,0,0,1,.984,3.135v1.293a4,4,0,0,0,3.994,3.994h9.32A4,4,0,0,0,21.3,27.958h.658a6.677,6.677,0,0,0,6.6-5.785l.292-2.2h.439a2.608,2.608,0,0,0,2.663-2.663c0-1.891-3.9-9.338-5.59-11.425Zm-11.717,6.1a2.663,2.663,0,1,1-2.663,2.663A2.665,2.665,0,0,1,14.645,11.983Zm13.04,5.326a1.33,1.33,0,0,0-1.319,1.157l-.445,3.359A4.008,4.008,0,0,1,21.96,25.3H19.971a1.33,1.33,0,0,0-1.331,1.331v1.331a1.332,1.332,0,0,1-1.331,1.331H7.988a1.332,1.332,0,0,1-1.331-1.331V26.666a7.844,7.844,0,0,0-1.532-4.754A11.977,11.977,0,0,1,12.948,2.779c.122-.017.245-.032.366-.045V9.487a5.326,5.326,0,1,0,2.663,0V2.735A11.914,11.914,0,0,1,24.262,7.52c1.74,2.152,4.86,8.591,5.026,9.79h-1.6Z"
                                      transform="translate(0 0.002)"/>
                            </svg>
                            <h2>پشتیبانی و مشاوره رایگان</h2>
                        </div>
                        <p class="description max-[600px]:w-full w-1/3 mt-9 medium text-normal text-center text-gray">
                            جهت دریافت اطلاعات بیشتر و مشاوره رایگان قبل از ساخت فروشگاه،
                            می توانید با شماره زیر تماس بگیرید.
                        </p>
                        <h5 class="bolX text-sm mt-4">از شنبه تا چهارشنبه - ساعت : ۱۰ صبح الی ۱۸</h5>
                        <div class="w-2/3 mt-5 max-[600px]:flex-col  boxes flex  items-center justify-center gap-3">
                            <a href="" class="box-telegram max-[600px]:w-full flex justify-center bolX text-lg items-center relative">
                                @BahoooshSupport
                                <svg class="absolute left-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                     viewBox="0 0 29.834 29.837">
                                    <path id="fi-rr-paper-plane"
                                          d="M28.742,1.1A3.687,3.687,0,0,0,25.261.1L5.369,4.292A6.21,6.21,0,0,0,1.822,14.836L3.958,16.97a1.243,1.243,0,0,1,.364.88v3.939a3.686,3.686,0,0,0,.373,1.6l-.01.009.032.032a3.73,3.73,0,0,0,1.693,1.686l.032.032.009-.01a3.686,3.686,0,0,0,1.6.373h3.939a1.243,1.243,0,0,1,.879.363L15,28.007a6.17,6.17,0,0,0,4.376,1.831,6.277,6.277,0,0,0,2-.328,6.133,6.133,0,0,0,4.157-4.956l4.2-19.935A3.7,3.7,0,0,0,28.742,1.1ZM5.718,15.215,3.581,13.08a3.655,3.655,0,0,1-.9-3.822A3.7,3.7,0,0,1,5.792,6.74L25.486,2.593,6.806,21.276V17.85A3.7,3.7,0,0,0,5.718,15.215Zm17.369,8.914a3.73,3.73,0,0,1-6.327,2.128l-2.138-2.138a3.7,3.7,0,0,0-2.634-1.092H8.563L27.245,4.351Z"
                                          transform="translate(-0.003 0)" fill="#fff"/>
                                </svg>

                            </a>
                            <a href="" class="box-tel flex max-[600px]:w-full justify-center bolX text-lg items-center relative">
                                ۰۲۱-۷۱۰۵۷۵۵۹
                                <svg class="absolute left-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                     viewBox="0 0 30.398 30.442">
                                    <path id="fi-rr-call-history"
                                          d="M22.494,30.413c-10.3.348-28.859-18.06-20.243-28.041L3.708,1.1a3.9,3.9,0,0,1,5.481.056,1.267,1.267,0,0,1,.109.127l2.28,2.963a3.938,3.938,0,0,1-.013,5.422L10.1,11.518a16.2,16.2,0,0,0,8.781,8.8l1.855-1.476a4.016,4.016,0,0,1,5.425-.008l2.965,2.28a1.427,1.427,0,0,1,.127.108,3.94,3.94,0,0,1,0,5.547L28.1,28.1A7.8,7.8,0,0,1,22.494,30.413ZM6.416,2.54a1.386,1.386,0,0,0-.981.405L3.977,4.213c-7.153,8.6,14.736,29.27,22.265,22.156L27.4,25.037a1.394,1.394,0,0,0,.108-1.975L24.557,20.8a1.027,1.027,0,0,1-.127-.11,1.422,1.422,0,0,0-1.961,0,1.279,1.279,0,0,1-.106.1l-2.481,1.976a1.267,1.267,0,0,1-1.24.193A19.018,19.018,0,0,1,7.466,11.789a1.267,1.267,0,0,1,.185-1.267L9.62,8.044a1.075,1.075,0,0,1,.1-.106,1.394,1.394,0,0,0,0-1.962,1.1,1.1,0,0,1-.109-.127L7.347,2.9a1.385,1.385,0,0,0-.931-.357ZM21.575,19.793Zm7-3.854C34.9,6.634,23.764-4.491,14.468,1.83a1.267,1.267,0,1,0,1.45,2.078C22.853-.855,31.26,7.561,26.5,14.491a1.267,1.267,0,1,0,2.078,1.448ZM23.69,13.577a1.267,1.267,0,0,0,0-1.791L21.529,9.622V6.341a1.267,1.267,0,0,0-2.534,0v3.8a1.267,1.267,0,0,0,.371.9L21.9,13.571a1.267,1.267,0,0,0,1.791,0Z"
                                          transform="translate(-0.033 0.024)"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-layouts.app>
