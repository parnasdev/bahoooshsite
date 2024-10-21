<x-layouts.app>
    <div class="aboutPage">
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
                            نمونه صفحه خام یا ایجاد شده با ادیتور
                        </h1>
                        <span class="text-gray-s text-small max-[600px]:w-full w-2/5 text-center medium">
                      کسب‌وکارهای بسیاری با باهوش فروشگاه‌های خود را به‌سادگی راه‌اندازی کرده‌اند و به نتایج عالی دست یافته‌اند. برخی از نمونه‌های موفق را ببینید و الهام بگیرید تا شما هم به جمع مشتریان موفق ما بپیوندید!
                        </span>
                        <button
                            class="btn-base bg-white text-black hover:bg-black hover:text-white border-2 border-black mt-2 w-56 max-[600px]:w-48 gap-5">
                            تست دکمه
                        </button>
                    </div>
                    <div class="border-row-one relative flex justify-content-end mt-20 mb-12 border-t-2 border-black">
                        <img width="85" src="/img/view/png/folder.png" alt="" class="img-left absolute">
                        <img width="40" src="img/view/png/img-arrow-right.png" alt=""
                             class="img-right top-0 right-2 absolute">
                    </div>
                </div>
                <div class="row-two flex justify-center mt-[7rem] max-[600px]:mt-[1rem] mb-[1rem] w-full">
                    <div class="box-editor w-[87%] max-[600px]:w-full">
                        <p>فرانسه یکی از کشورهای پرتقاضا در میان دانشجویان بین المللی است. این کشور فرصت های عالی آموزش
                            عالی را با کالج ها و دانشگاه های درجه یک خود ارائه می دهد. فرهنگ و سبک زندگی فرانسه نیز مورد
                            علاقه ی دانشجویان بین المللی است. تعداد زیادی از دانشجویان بین المللی فرانسه را برای تحصیلات
                            عالی انتخاب می کنند. دانشجویان بین المللی با انبوهی از اطلاعات و تجربیات وارد فرانسه می
                            شوند، اما بسیاری از آنها در انتخاب بهترین دوره با چالش هایی مواجه می شوند. این وبلاگ برای
                            دانشجویانی است که با این چالش‌ها روبرو هستند و می‌خواهند در مورد نحوه انتخاب پذیرش مناسب
                            خودشان در فرانسه اطلاعات کسب کنند.</p>
                        <h3>پذیرش در فرانسه</h3>
                        <p>پذیرش ها به این معنی هستند که ترم کلاس ها در آن زمان خاص از سال در دانشگاه ها شروع می شود. به
                            طور عمده، پذیرش ژانویه و سپتامبر دانشگاه های فرانسه برای دانشجویانی هستند که از کشورهای دیگر
                            می آیند. هر دو ورودی برای دانشجویان و دانشگاه های فرانسه به یک اندازه مهم هستند.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.app>
