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
                            راه اندازی کسب و کار فروش لباس بچه گانه
                        </h1>
                        <div class="flex justify-center max-[600px]:w-full mt-2 items-center gap-2">
                            <div
                                class="label-date gap-3 relative text-white bolX text-small  flex items-center justify-center">
                                <svg class="right left-2" id="Calendar_2" data-name="Calendar 2"
                                     xmlns="http://www.w3.org/2000/svg" width="15" height="17"
                                     viewBox="0 0 20.998 22.748">
                                    <path id="Path_839" data-name="Path 839" d="M6,16H9.713"
                                          transform="translate(-1.061 -2.001)" fill="none" stroke="#fff"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    <path id="Path_840" data-name="Path 840" d="M6,20H9.713"
                                          transform="translate(-1.061 -2.502)" fill="none" stroke="#fff"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    <path id="Path_841" data-name="Path 841"
                                          d="M7,0a.875.875,0,0,1,.875.875v.95c.8-.052,1.669-.075,2.625-.075s1.828.023,2.625.075V.875a.875.875,0,1,1,1.75,0V2.006c3.994.6,5.536,2.4,5.978,6.743q.043.421.072.875.028.422.044.874.031.825.03,1.751T20.968,14q-.017.452-.044.875-.029.452-.072.872C20.379,20.4,18.647,22.129,14,22.6q-.42.043-.872.072-.423.028-.875.044-.825.031-1.75.03c-8.646,0-10.5-1.853-10.5-10.5q0-.927.03-1.751.017-.451.044-.874Q.1,9.17.147,8.749C.589,4.4,2.13,2.608,6.124,2.006V.875A.875.875,0,0,1,7,0ZM6.124,3.778a5.877,5.877,0,0,0-2.53.917c-.826.606-1.422,1.67-1.688,4.054H19.092C18.826,6.365,18.23,5.3,17.4,4.7a5.877,5.877,0,0,0-2.53-.917v.6a.875.875,0,1,1-1.75,0v-.8c-.76-.053-1.628-.08-2.625-.08s-1.865.027-2.625.08v.8a.875.875,0,1,1-1.75,0ZM18.834,15.8q.13-.017.256-.03c-.229,2.04-.7,3.1-1.336,3.738s-1.7,1.107-3.738,1.336q.013-.125.03-.256a5.772,5.772,0,0,1,1.447-3.341A5.772,5.772,0,0,1,18.834,15.8Zm-6.522,4.558c-.028.213-.049.418-.064.613-.541.021-1.123.031-1.748.031a23.538,23.538,0,0,1-4.908-.383A4.566,4.566,0,0,1,3.245,19.5a4.565,4.565,0,0,1-1.112-2.346,23.541,23.541,0,0,1-.383-4.908c0-.626.01-1.208.031-1.75H19.217c.021.542.031,1.124.031,1.75s-.01,1.207-.031,1.748c-.195.015-.4.036-.613.064A7.5,7.5,0,0,0,14.255,16,7.5,7.5,0,0,0,12.311,20.354Z"
                                          transform="translate(0 0)" fill="#fff" fill-rule="evenodd"/>
                                </svg>
                                تاریخ انتشار : ۲۳ تیر ۱۴۰۱
                            </div>
                            <div
                                class="label-view gap-3 relative text-black bolX text-small  flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="10"
                                     viewBox="0 0 22.652 13.5">
                                    <g id="Show" transform="translate(-0.674 -0.25)">
                                        <path id="Path_1139" data-name="Path 1139"
                                              d="M1.652,6.555a.656.656,0,0,0,0,.89C3.37,9.392,7.229,13,12,13s8.63-3.608,10.348-5.555a.656.656,0,0,0,0-.89C20.63,4.608,16.771,1,12,1S3.37,4.608,1.652,6.555Z"
                                              fill="none" stroke="#181818" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1.5"/>
                                        <circle id="Ellipse_58" data-name="Ellipse 58" cx="2" cy="2" r="2"
                                                transform="translate(14 9) rotate(180)" fill="none" stroke="#181818"
                                                stroke-width="1.5"/>
                                    </g>
                                </svg>

                                تعداد بازدید مقاله : ۴
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-detail-blog gap-10 w-full my-12 max-[700px]:flex-col flex justify-between items-start relative">
                    <div class="sticky-row max-[700px]:w-full max-[700px]:relative w-3/12 sticky top-2">
                        <img class="img-blog-info w-full h-72 rounded-3xl " src="/img/view/png/kids-info-blog.png"
                             alt="">
                        <div class="w-full flex items-center gap-3 justify-start mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 19.609 19.609">
                                <g id="Menu" transform="translate(0.6 0.6)">
                                    <path id="Path_1022" data-name="Path 1022"
                                          d="M1,4.766A10.255,10.255,0,0,0,1.166,6.9a1.934,1.934,0,0,0,.469.994,1.934,1.934,0,0,0,.994.469,10.254,10.254,0,0,0,2.137.166A10.254,10.254,0,0,0,6.9,8.365,1.934,1.934,0,0,0,7.9,7.9,1.934,1.934,0,0,0,8.365,6.9a10.254,10.254,0,0,0,.166-2.137,10.254,10.254,0,0,0-.166-2.137A1.934,1.934,0,0,0,7.9,1.635,1.934,1.934,0,0,0,6.9,1.166,10.255,10.255,0,0,0,4.766,1a10.255,10.255,0,0,0-2.137.166,1.934,1.934,0,0,0-.994.469,1.934,1.934,0,0,0-.469.994A10.255,10.255,0,0,0,1,4.766Z"
                                          transform="translate(-1 -1)" fill="none" stroke="#808285"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"/>
                                    <path id="Path_1023" data-name="Path 1023"
                                          d="M1,17.766A10.255,10.255,0,0,0,1.166,19.9a1.935,1.935,0,0,0,.469.994,1.934,1.934,0,0,0,.994.469,10.259,10.259,0,0,0,2.137.166A10.259,10.259,0,0,0,6.9,21.365,1.934,1.934,0,0,0,7.9,20.9a1.935,1.935,0,0,0,.469-.994,10.254,10.254,0,0,0,.166-2.137,10.254,10.254,0,0,0-.166-2.137,1.935,1.935,0,0,0-.469-.994,1.934,1.934,0,0,0-.994-.469A10.259,10.259,0,0,0,4.766,14a10.259,10.259,0,0,0-2.137.166,1.934,1.934,0,0,0-.994.469,1.935,1.935,0,0,0-.469.994A10.255,10.255,0,0,0,1,17.766Z"
                                          transform="translate(-1 -3.122)" fill="none" stroke="#808285"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"/>
                                    <path id="Path_1024" data-name="Path 1024"
                                          d="M14,4.766A10.259,10.259,0,0,0,14.166,6.9a1.934,1.934,0,0,0,.469.994,1.935,1.935,0,0,0,.994.469,10.254,10.254,0,0,0,2.137.166A10.254,10.254,0,0,0,19.9,8.365,1.935,1.935,0,0,0,20.9,7.9a1.934,1.934,0,0,0,.469-.994,10.259,10.259,0,0,0,.166-2.137,10.259,10.259,0,0,0-.166-2.137,1.934,1.934,0,0,0-.469-.994,1.935,1.935,0,0,0-.994-.469A10.255,10.255,0,0,0,17.766,1a10.255,10.255,0,0,0-2.137.166,1.935,1.935,0,0,0-.994.469,1.934,1.934,0,0,0-.469.994A10.259,10.259,0,0,0,14,4.766Z"
                                          transform="translate(-3.122 -1)" fill="none" stroke="#808285"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"/>
                                    <path id="Path_1025" data-name="Path 1025"
                                          d="M14,17.766a10.259,10.259,0,0,0,.166,2.137,1.625,1.625,0,0,0,1.463,1.463,10.259,10.259,0,0,0,2.137.166,10.259,10.259,0,0,0,2.137-.166A1.625,1.625,0,0,0,21.365,19.9a10.259,10.259,0,0,0,.166-2.137,10.259,10.259,0,0,0-.166-2.137A1.625,1.625,0,0,0,19.9,14.166,10.259,10.259,0,0,0,17.766,14a10.259,10.259,0,0,0-2.137.166,1.625,1.625,0,0,0-1.463,1.463A10.259,10.259,0,0,0,14,17.766Z"
                                          transform="translate(-3.122 -3.122)" fill="none" stroke="#808285"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"/>
                                </g>
                            </svg>
                            <span class="text-small bolX text-gray-s">آموزشی ، خبری</span>
                        </div>
                        <div class="show-desktop w-full">
                            <img class="img-blog-info w-full" src="/img/view/png/banner-info-blog.png" alt="">
                        </div>
                    </div>
                    <div class="box max-[700px]:w-full w-9/12 flex items-start flex-col">
                        <div
                            class="box-editor flex flex-col items-center justify-start relative p-7 bg-white   rounded-3xl w-full">
                            <p>فرانسه یکی از کشورهای پرتقاضا در میان دانشجویان بین المللی است. این کشور فرصت های عالی
                                آموزش
                                عالی را با کالج ها و دانشگاه های درجه یک خود ارائه می دهد. فرهنگ و سبک زندگی فرانسه نیز
                                مورد
                                علاقه ی دانشجویان بین المللی است. تعداد زیادی از دانشجویان بین المللی فرانسه را برای
                                تحصیلات
                                عالی انتخاب می کنند. دانشجویان بین المللی با انبوهی از اطلاعات و تجربیات وارد فرانسه می
                                شوند، اما بسیاری از آنها در انتخاب بهترین دوره با چالش هایی مواجه می شوند. این وبلاگ
                                برای
                                دانشجویانی است که با این چالش‌ها روبرو هستند و می‌خواهند در مورد نحوه انتخاب پذیرش مناسب
                                خودشان در فرانسه اطلاعات کسب کنند.</p>

                            <h3>پذیرش در فرانسه</h3>
                            <span>پذیرش ها به این معنی هستند که ترم کلاس ها در آن زمان خاص از سال در دانشگاه ها شروع می شود. به طور عمده، پذیرش ژانویه و سپتامبر دانشگاه های فرانسه برای دانشجویانی هستند که از کشورهای دیگر می آیند. هر دو ورودی برای دانشجویان و دانشگاه های فرانسه به یک اندازه مهم هستند.</span>
                            <p>فرانسه یکی از کشورهای پرتقاضا در میان دانشجویان بین المللی است. این کشور فرصت های عالی
                                آموزش
                                عالی را با کالج ها و دانشگاه های درجه یک خود ارائه می دهد. فرهنگ و سبک زندگی فرانسه نیز
                                مورد
                                علاقه ی دانشجویان بین المللی است. تعداد زیادی از دانشجویان بین المللی فرانسه را برای
                                تحصیلات
                                عالی انتخاب می کنند. دانشجویان بین المللی با انبوهی از اطلاعات و تجربیات وارد فرانسه می
                                شوند، اما بسیاری از آنها در انتخاب بهترین دوره با چالش هایی مواجه می شوند. این وبلاگ
                                برای
                                دانشجویانی است که با این چالش‌ها روبرو هستند و می‌خواهند در مورد نحوه انتخاب پذیرش مناسب
                                خودشان در فرانسه اطلاعات کسب کنند.</p>
                            <blockquote>
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است.
                                تست متن BLOCKQUOTE
                            </blockquote>
                        </div>
                        <div class="row-labels w-full flex items-center gap-2 justify-start my-4">
                            <div class="title gap-2 flex items-center justify-start">
                                <svg id="Hashtag" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 24 24">
                                    <path id="Path_975" data-name="Path 975"
                                          d="M1,12a27.833,27.833,0,0,0,.462,5.827A6.193,6.193,0,0,0,3,21a6.193,6.193,0,0,0,3.172,1.54A27.838,27.838,0,0,0,12,23a27.838,27.838,0,0,0,5.827-.462A6.193,6.193,0,0,0,21,21a6.193,6.193,0,0,0,1.54-3.172A27.838,27.838,0,0,0,23,12a27.838,27.838,0,0,0-.462-5.827A6.193,6.193,0,0,0,21,3a6.193,6.193,0,0,0-3.172-1.54A27.833,27.833,0,0,0,12,1a27.833,27.833,0,0,0-5.827.462A6.193,6.193,0,0,0,3,3a6.193,6.193,0,0,0-1.54,3.172A27.833,27.833,0,0,0,1,12Z"
                                          fill="none" stroke="#d4d4d4" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2"/>
                                    <path id="Path_976" data-name="Path 976"
                                          d="M10,7v3m0,7V10m0,0h4m3,0H14m0,0v4m0,3V14m0,0H7" fill="none"
                                          stroke="#d4d4d4" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2"/>
                                </svg>
                                <span class="text-light bolX text-small">برچسب :</span>
                            </div>
                            <div class="labels gap-1 flex items-center justify-start">
                                <a class="text-light bolX text-small item" href="">برچسب 1 ،</a>
                                <a class="text-light bolX text-small item" href="">برچسب 2 ،</a>
                                <a class="text-light bolX text-small item" href="">برچسب 3 ،</a>
                                <a class="text-light bolX text-small item" href="">برچسب 4 ،</a>
                            </div>
                        </div>
                        <div class="row-users mt-4 relative max-[700px]:items-start w-full flex justify-between items-center">
                            <div class="start flex flex-col max-[700px]:w-full items-start w-2/3">
                                <h4 class="bolX text-base text-md">نظرات کاربران</h4>
                                <span class="text-gray-s text-small medium mt-4">دقت کنید</span>
                                <div class="p-tip mt-4 flex flex-col items-start gap-3">
                                    <div class="tip flex gap-3 justify-start items-center">
                                        <div class="circle"></div>
                                        <span class="text-small">ابتدا در سایت ثبت نام یا ورود کنید.</span>
                                    </div>
                                    <div class="tip flex gap-3 justify-start items-center">
                                        <div class="circle"></div>
                                        <span class="text-small">اگر در مورد نحوه مشاوره و مسائل مربوطه سوال دارید تماس بگیرید.</span>
                                    </div>
                                    <div class="tip flex gap-3 justify-start items-center">
                                        <div class="circle"></div>
                                        <span class="text-small">جهت حفظ امنیت در این قسمت صبور باشید !</span>
                                    </div>
                                </div>

                            </div>
                            <div class="end flex max-[600px]:absolute max-[600px]:left-0 max-[600px]:bottom-20 flex-col items-end">
                                <div class="box-rate max-[600px]:bg-transparent  rounded-md flex mt-4 flex-col items-center justify-center">
                                    <strong class="text-3xl bolX">4.5</strong>
                                    <div class="p-star mt-4 flex justify-center w-full gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                             viewBox="0 0 21.262 21.259">
                                            <path id="Star"
                                                  d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                                                  transform="translate(-1 -1)" fill="#E5E5E5"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                             viewBox="0 0 21.262 21.259">
                                            <path id="Star"
                                                  d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                                                  transform="translate(-1 -1)" fill="#ffcd00"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                             viewBox="0 0 21.262 21.259">
                                            <path id="Star"
                                                  d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                                                  transform="translate(-1 -1)" fill="#ffcd00"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                             viewBox="0 0 21.262 21.259">
                                            <path id="Star"
                                                  d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                                                  transform="translate(-1 -1)" fill="#ffcd00"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                             viewBox="0 0 21.262 21.259">
                                            <path id="Star"
                                                  d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                                                  transform="translate(-1 -1)" fill="#ffcd00"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-users mt-4 w-full flex justify-between items-center">
                            <span class="medium  text-gray text-normal">نظر خود را به اشتراک بگذارید :</span>
                            <button
                                class="btn-base  bg-black text-white hover:bg-white hover:text-black border-2 border-black  w-56 max-[600px]:w-32 gap-5">
                                شما هم نظری بنویسید !
                            </button>
                        </div>
                        <div class="row-question w-full flex mt-12">
                            <div class="box p-6 bg-white w-full flex flex-col items-start">
                                <div class="top flex gap-4 items-center">
                                    <img width="60" src="/img/view/png/avatar.png" alt="">
                                    <div class="detail-user flex flex-col items-start">
                                        <div class="flex gap-2 items-center">
                                            <h4 class="bolX mt-1 name-user text-normal">لیلا</h4>
                                            <div class="p-star flex justify-center w-full gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                     viewBox="0 0 21.262 21.259">
                                                    <path id="Star"
                                                          d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                                                          transform="translate(-1 -1)" fill="#E5E5E5"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                     viewBox="0 0 21.262 21.259">
                                                    <path id="Star"
                                                          d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                                                          transform="translate(-1 -1)" fill="#ffcd00"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                     viewBox="0 0 21.262 21.259">
                                                    <path id="Star"
                                                          d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                                                          transform="translate(-1 -1)" fill="#ffcd00"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                     viewBox="0 0 21.262 21.259">
                                                    <path id="Star"
                                                          d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                                                          transform="translate(-1 -1)" fill="#ffcd00"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                     viewBox="0 0 21.262 21.259">
                                                    <path id="Star"
                                                          d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                                                          transform="translate(-1 -1)" fill="#ffcd00"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <span class="date mt-1 text-base bolX">5 ماه پیش</span>
                                    </div>
                                </div>
                                <div class="bottom w-full mt-5">
                                    <p class="text-small text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده ازلورم
                                        ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده ازلورم ایپسوم
                                        متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده ازلورم ایپسوم متن
                                        ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از</p>
                                </div>
                            </div>
                        </div>
                        <div class="row-answer w-full flex justify-end mt-3">
                            <div class="box p-6 w-full flex flex-col items-start">
                                <div class="top w-full flex gap-4 items-center">
                                    <img width="60" src="/img/view/png/avatar.png" alt="">
                                    <div class="detail-user flex flex-col items-start">
                                        <div class="flex gap-2 items-center">
                                            <h4 class="bolX mt-1 name-user text-normal">علیرضا مردانی</h4>
                                            <div class="p-star flex justify-center w-full gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                     viewBox="0 0 21.262 21.259">
                                                    <path id="Star"
                                                          d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                                                          transform="translate(-1 -1)" fill="#E5E5E5"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                     viewBox="0 0 21.262 21.259">
                                                    <path id="Star"
                                                          d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                                                          transform="translate(-1 -1)" fill="#ffcd00"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                     viewBox="0 0 21.262 21.259">
                                                    <path id="Star"
                                                          d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                                                          transform="translate(-1 -1)" fill="#ffcd00"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                     viewBox="0 0 21.262 21.259">
                                                    <path id="Star"
                                                          d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                                                          transform="translate(-1 -1)" fill="#ffcd00"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                     viewBox="0 0 21.262 21.259">
                                                    <path id="Star"
                                                          d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                                                          transform="translate(-1 -1)" fill="#ffcd00"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <span class="date mt-1 text-base bolX">5 ماه پیش</span>
                                    </div>
                                </div>
                                <div class="bottom w-full mt-3">
                                    <p class="text-small text">
                                        بشدت مهربون و صبور با قلبی مهربون❤️
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row-answer w-full flex justify-end mt-3">
                            <div class="box p-6 w-full flex flex-col items-start">
                                <div class="top w-full flex gap-4 items-center">
                                    <img width="60" src="/img/view/png/avatar.png" alt="">
                                    <div class="detail-user flex flex-col items-start">
                                        <div class="flex gap-2 items-center">
                                            <h4 class="bolX mt-1 name-user text-normal">علیرضا مردانی</h4>
                                            <div class="p-star flex justify-center w-full gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                     viewBox="0 0 21.262 21.259">
                                                    <path id="Star"
                                                          d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                                                          transform="translate(-1 -1)" fill="#E5E5E5"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                     viewBox="0 0 21.262 21.259">
                                                    <path id="Star"
                                                          d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                                                          transform="translate(-1 -1)" fill="#ffcd00"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                     viewBox="0 0 21.262 21.259">
                                                    <path id="Star"
                                                          d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                                                          transform="translate(-1 -1)" fill="#ffcd00"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                     viewBox="0 0 21.262 21.259">
                                                    <path id="Star"
                                                          d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                                                          transform="translate(-1 -1)" fill="#ffcd00"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                     viewBox="0 0 21.262 21.259">
                                                    <path id="Star"
                                                          d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                                                          transform="translate(-1 -1)" fill="#ffcd00"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <span class="date mt-1 text-base bolX">5 ماه پیش</span>
                                    </div>
                                </div>
                                <div class="bottom w-full mt-3">
                                    <p class="text-small text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده ازلورم
                                        ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده ازلورم ایپسوم
                                        متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده ازلورم ایپسوم متن
                                        ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-layouts.app>
