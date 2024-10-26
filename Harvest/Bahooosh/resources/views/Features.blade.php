<x-layouts.app>
    <div class="featuresPage">
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
                            همه چیز برای مغازه آنلاین شما
                        </h1>
                        <span class="text-gray-s text-small max-[600px]:w-full w-2/5 text-center medium">باهوش تمام ابزارهایی که برای ساخت یک مغازه آنلاین نیاز دارید را در اختیارتان می‌گذارد. سریع، ساده و حرفه‌ای فروشگاه خود را بسازید و فروش آنلاین را شروع کنید!</span>
                        <button
                            class="btn-base bg-black text-white hover:bg-white hover:text-black border-2 border-black max-[600px]:w-48 mt-2 w-64 gap-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 28.057 30.608">
                                <path id="fi-rr-mug-hot"
                                      d="M24.594,12.753h-.638V11.478A3.826,3.826,0,0,0,20.13,7.652H4.826A3.826,3.826,0,0,0,1,11.478V24.231a6.384,6.384,0,0,0,6.377,6.377h10.2a6.388,6.388,0,0,0,6.249-5.1,4.591,4.591,0,0,0,5.229-4.464V17.217A4.464,4.464,0,0,0,24.594,12.753Zm-7.014,15.3H7.377a3.826,3.826,0,0,1-3.826-3.826V11.478A1.275,1.275,0,0,1,4.826,10.2h15.3a1.275,1.275,0,0,1,1.275,1.275V24.231a3.826,3.826,0,0,1-3.826,3.826Zm8.927-7.014a2.067,2.067,0,0,1-2.551,1.913V15.3a2.067,2.067,0,0,1,2.551,1.913ZM11.2,3.826V1.275a1.275,1.275,0,1,1,2.551,0V3.826a1.275,1.275,0,1,1-2.551,0Zm5.1,0V1.275a1.275,1.275,0,1,1,2.551,0V3.826a1.275,1.275,0,1,1-2.551,0Zm-10.2,0V1.275a1.275,1.275,0,1,1,2.551,0V3.826a1.275,1.275,0,1,1-2.551,0Z"
                                      transform="translate(-1)" fill="#fff"/>
                            </svg>

                            ساخت فروشگاه رایگان
                        </button>
                    </div>
                    <div class="border-row-one relative flex justify-content-end mt-16 mb-12 border-t-2 border-black">
                        <img width="110" src="img/view/png/img-basket.png" alt="" class="img-left absolute">
                        <img width="40" src="img/view/png/img-arrow-right.png" alt=""
                             class="img-right top-0 right-2 absolute">
                    </div>
                </div>
                <div class="row-two w-full flex flex-col items-center">
                    <div class="title-website-s">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="26" viewBox="0 0 29.29 31.953">
                            <path id="fi-rr-brackets-curly"
                                  d="M30.29,15.977a1.375,1.375,0,0,1-.386.945l-2.436,2.436A3.958,3.958,0,0,0,26.3,22.181V25.3a6.659,6.659,0,0,1-6.657,6.657H18.308a1.331,1.331,0,1,1,0-2.663h1.331A4.006,4.006,0,0,0,23.633,25.3V22.181a6.648,6.648,0,0,1,1.944-4.713l1.491-1.491-1.491-1.491a6.625,6.625,0,0,1-1.944-4.713V6.657a4.006,4.006,0,0,0-3.994-3.994H18.308a1.331,1.331,0,1,1,0-2.663h1.331A6.659,6.659,0,0,1,26.3,6.657V9.772a3.935,3.935,0,0,0,1.172,2.823L29.9,15.031A1.318,1.318,0,0,1,30.29,15.977ZM7.657,9.772V6.657a4.006,4.006,0,0,1,3.994-3.994h1.331a1.331,1.331,0,1,0,0-2.663H11.651A6.659,6.659,0,0,0,4.994,6.657V9.772a3.935,3.935,0,0,1-1.172,2.823L1.386,15.031A1.318,1.318,0,0,0,1,15.977a1.375,1.375,0,0,0,.386.945l2.436,2.436a3.958,3.958,0,0,1,1.172,2.823V25.3a6.659,6.659,0,0,0,6.657,6.657h1.331a1.331,1.331,0,1,0,0-2.663H11.651A4.006,4.006,0,0,1,7.657,25.3V22.181a6.648,6.648,0,0,0-1.944-4.713L4.222,15.977l1.491-1.491A6.625,6.625,0,0,0,7.657,9.772Z"
                                  transform="translate(-1)"/>
                        </svg>
                        <h2 class="relative">راه‌اندازی سریع و آسان</h2>
                    </div>
                    <div class="show-desktop w-full">
                        <div class="list-building grid max-[600px]:grid-cols-1   gap-3 grid-cols-4 mb-5 px-4 mt-20">
                            <div class="box-building  bg-white  w-full">
                                <div class="floating-box flex flex-col items-center w-full ">
                                    <img class="img" width="80" src="img/view/png/host.png" alt="">
                                    <h3 class="text-base bolX">هاست ابری رایگان</h3>
                                    <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                    فضای هاست و ذخیره سازی اطلاعات شما بصورت رایگان توسط ما پشتیبانی و ارائه می شود تا دیگه نگران زیر ساخت نباشید.
                                </span>
                                </div>

                            </div>
                            <div class="box-building  bg-white  w-full">
                                <div class="floating-box flex flex-col items-center w-full ">
                                    <img class="img" width="80" src="img/view/png/domain.png" alt="">
                                    <h3 class="text-base  bolX">اتصال به دامنه اختصاصی</h3>
                                    <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                    بعد از ساخت فروشگاه در باهوش و تکمیل کردن اطلاعات وقشته که فروشگاهتون را روی دامنه خودتان داشته باشید.
                                </span>
                                </div>

                            </div>
                            <div class="box-building  bg-white  w-full">
                                <div class="floating-box flex flex-col items-center w-full ">
                                    <img class="img" width="80" src="img/view/png/ssl.png" alt="">
                                    <h3 class="text-base bolX">گواهی SSL رایگان</h3>
                                    <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                    امنیت سایت شما برای اثبات به گوگل و کاربرانتان نیازمند داشتن گواهی SSL هست که باهوش برای فروشگاه شما دریافت میکند.
                                </span>
                                </div>

                            </div>
                            <div class="box-building  bg-white  w-full">
                                <div class="floating-box flex flex-col items-center w-full ">
                                    <img class="img" width="80" src="img/view/png/code.png" alt="">
                                    <h3 class="text-base bolX">بدون نیاز به دانش فنی و کدنویسی</h3>
                                    <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                    دیگه نیازی نیست که برای راه اندازی فروشگاه اینترنتی حتما دانش فنی و کدنویسی داشته باشی، همه چیز تو باهوش کلیکی هست !
                                </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="show-mobile">
                        <div class="list-building grid max-[500px]:grid-cols-1 md:grid-cols-2   gap-3 lg:grid-cols-4 mb-5 px-4 mt-20">
                            <div class="box-building md:mt-[2rem]  bg-white  w-full">
                                <div class="floating-box flex flex-col gap-4 items-center w-full ">
                                    <img class="img" width="70" src="img/view/png/host.png" alt="">
                                    <div class="flex flex-col items-start w-4/5">
                                        <h3 class="text-base bolX">هاست ابری رایگان</h3>
                                        <span class="text-small text-gray w-10/12 mt-2 text-justify RaviBold">
                                    فضای هاست و ذخیره سازی اطلاعات شما بصورت رایگان توسط ما پشتیبانی و ارائه می شود تا دیگه نگران زیر ساخت نباشید.
                                </span>
                                    </div>

                                </div>
                            </div>
                            <div class="box-building md:mt-[2rem]  bg-white  w-full">
                                <div class="floating-box flex flex-col gap-4 items-center w-full ">
                                    <img class="img" width="70" src="img/view/png/host.png" alt="">
                                    <div class="flex flex-col items-start w-4/5">
                                        <h3 class="text-base bolX">هاست ابری رایگان</h3>
                                        <span class="text-small text-gray w-10/12 mt-2 text-justify RaviBold">
                                    فضای هاست و ذخیره سازی اطلاعات شما بصورت رایگان توسط ما پشتیبانی و ارائه می شود تا دیگه نگران زیر ساخت نباشید.
                                </span>
                                    </div>

                                </div>
                            </div>
                            <div class="box-building md:mt-[2rem]  bg-white  w-full">
                                <div class="floating-box flex flex-col gap-4 items-center w-full ">
                                    <img class="img" width="70" src="img/view/png/host.png" alt="">
                                    <div class="flex flex-col items-start w-4/5">
                                        <h3 class="text-base bolX">هاست ابری رایگان</h3>
                                        <span class="text-small text-gray w-10/12 mt-2 text-justify RaviBold">
                                    فضای هاست و ذخیره سازی اطلاعات شما بصورت رایگان توسط ما پشتیبانی و ارائه می شود تا دیگه نگران زیر ساخت نباشید.
                                </span>
                                    </div>

                                </div>
                            </div>
                            <div class="box-building md:mt-[2rem]  bg-white  w-full">
                                <div class="floating-box flex flex-col gap-4 items-center w-full ">
                                    <img class="img" width="70" src="img/view/png/host.png" alt="">
                                    <div class="flex flex-col items-start w-4/5">
                                        <h3 class="text-base bolX">هاست ابری رایگان</h3>
                                        <span class="text-small text-gray w-10/12 mt-2 text-justify RaviBold">
                                    فضای هاست و ذخیره سازی اطلاعات شما بصورت رایگان توسط ما پشتیبانی و ارائه می شود تا دیگه نگران زیر ساخت نباشید.
                                </span>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row-three w-full flex mt-8 flex-col items-center">
                    <div class="title-website-s">
                        <svg id="fi-rr-palette" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                             viewBox="0 0 29.839 29.838">
                            <path id="Path_2918" data-name="Path 2918"
                                  d="M17.386,8.062a1.865,1.865,0,1,0,2.281,1.324A1.865,1.865,0,0,0,17.386,8.062Z"
                                  transform="translate(3.789 1.946)"/>
                            <path id="Path_2919" data-name="Path 2919"
                                  d="M12.386,5.062a1.865,1.865,0,1,0,2.281,1.324,1.865,1.865,0,0,0-2.281-1.324Z"
                                  transform="translate(2.573 1.216)"/>
                            <path id="Path_2920" data-name="Path 2920"
                                  d="M7.386,8.062A1.865,1.865,0,1,0,9.668,9.386,1.865,1.865,0,0,0,7.386,8.062Z"
                                  transform="translate(1.356 1.946)"/>
                            <path id="Path_2921" data-name="Path 2921"
                                  d="M7.386,14.062a1.865,1.865,0,1,0,2.281,1.324,1.865,1.865,0,0,0-2.281-1.324Z"
                                  transform="translate(1.356 3.406)"/>
                            <path id="Path_2922" data-name="Path 2922"
                                  d="M15.52.009A14.919,14.919,0,1,0,15,29.838c.42,0,.833-.027,1.243-.062a1.243,1.243,0,0,0,1.139-1.243l-.04-4.461a4.435,4.435,0,0,1,7.571-3.185l.124.124a2.377,2.377,0,0,0,2.2.648A2.347,2.347,0,0,0,28.951,20.2a14.824,14.824,0,0,0,.966-5.649A15.112,15.112,0,0,0,15.52.009ZM26.687,19.155l-.017-.017a6.921,6.921,0,0,0-11.811,4.954l.03,3.26A12.433,12.433,0,1,1,15,2.487c.145,0,.292,0,.439.007A12.59,12.59,0,0,1,27.431,14.607a12.3,12.3,0,0,1-.74,4.539Z"
                                  transform="translate(-0.083 0)"/>
                        </svg>

                        <h2 class="relative">طراحی حرفه‌ای و شخصی‌سازی کامل</h2>
                    </div>
                    <div class="show-desktop w-full">
                        <div class="w-full gap-3 mt-24 mb-12 grid grid-cols-2">
                            <div class="right w-full grid gap-2 grid-cols-2">
                                <div class="box-building mt-5  bg-white  w-full">
                                    <div class="floating-box flex flex-col items-center w-full ">
                                        <img class="img" width="80" src="img/view/png/page-builder.png" alt="">
                                        <h3 class="text-base bolX">صفحه ساز حرفه ای</h3>
                                        <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                        شما در باهوش ابزاری به اسم قالب ندارید، بجاش صفحه ساز دارید که میتونید طرح انحصاری برند خودتان را بسازید !
                                </span>
                                    </div>

                                </div>
                                <div class="box-building mt-5  bg-white  w-full">
                                    <div class="floating-box flex flex-col items-center w-full ">
                                        <img class="img" width="80" src="img/view/png/element.png" alt="">
                                        <h3 class="text-base bolX">المان های گرافیکی</h3>
                                        <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                    فضای هاست و ذخیره سازی اطلاعات شما بصورت رایگان توسط ما پشتیبانی و ارائه می شود تا دیگه نگران زیر ساخت نباشید.
                                </span>
                                    </div>

                                </div>
                                <div class="box-building mt-11  bg-white  w-full">
                                    <div class="floating-box flex flex-col items-center w-full ">
                                        <img class="img" width="80" src="img/view/png/drag.png" alt="">
                                        <h3 class="text-base bolX">بکشید و رها کنید</h3>
                                        <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
با استفاده از قابلیت درگ اند دراپ، المان هارو انتخاب کنید و در بین صفحه ساز جابجا کنید و صفحه خود را انتشار دهید. به همین راحتی !                                </span>
                                    </div>

                                </div>
                                <div class="box-building mt-11  bg-white  w-full">
                                    <div class="floating-box flex flex-col items-center w-full ">
                                        <img class="img" width="80" src="img/view/png/change-logo.png" alt="">
                                        <h3 class="text-base bolX">تغییر لوگو و رنگ سایت</h3>
                                        <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
قابلیت تغییر لوگو و آیکون سایت با یک کلیک به همراه تنظیمات پیشرفته تغییر سایز لوگو و تصاویر پیشفرض فروشگاه.                                </span>
                                    </div>

                                </div>
                                <div class="box-building mt-11  bg-white  w-full">
                                    <div class="floating-box flex flex-col items-center w-full ">
                                        <img class="img" width="80" src="img/view/png/ux-free.png" alt="">
                                        <h3 class="text-base bolX">طراحی گرافیکی رایگان</h3>
                                        <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                        اگر انتخاب شما اشتراک سالانه و دائمی ما باشه این یک هدیه ویژه برای شما هست که کارای گرافیکی سایت شما توسط ما انجام میشود.
                                </span>
                                    </div>

                                </div>
                                <div class="box-building mt-11  bg-white  w-full">
                                    <div class="floating-box flex flex-col items-center w-full ">
                                        <img class="img" width="80" src="img/view/png/headphone.png" alt="">
                                        <h3 class="text-base bolX">ما برایتان انجام می دهیم !</h3>
                                        <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                        ما در تلگرام یک کانال آموزشی داریم که تمامی قسمت های کار با ادمین برایتان ضبط شده است، اگر متوجه نشدین ما برایتان انجام می دهیم :)
                                </span>
                                    </div>

                                </div>
                            </div>
                            <div class="box-img flex justify-center  items-center  bg-white">
                                {{--                            <img class="w-full h-full object-cover" src="" alt="">--}}
                                <h1 class="text-lg extraBold">...Cover image </h1>
                            </div>
                        </div>
                    </div>
                    <div class="show-mobile w-full">
                        <div class="w-full gap-3 mt-10 mb-12 grid grid-cols-1">
                            <div class="box-img flex justify-center md:h-[300px]  items-center  bg-white">
                                {{--                            <img class="w-full h-full object-cover" src="" alt="">--}}
                                <h1 class="text-lg extraBold">...Cover image </h1>
                            </div>
                            <div class="right w-full grid gap-2 md:grid-cols-2  grid-cols-1">
                                <div class="box-building md:mt-[2rem]  bg-white  w-full">
                                    <div class="floating-box flex flex-col gap-4 items-center w-full ">
                                        <img class="img" width="70" src="img/view/png/host.png" alt="">
                                        <div class="flex flex-col items-start w-4/5">
                                            <h3 class="text-base bolX">هاست ابری رایگان</h3>
                                            <span class="text-small text-gray w-10/12 mt-2 text-justify RaviBold">
                                    فضای هاست و ذخیره سازی اطلاعات شما بصورت رایگان توسط ما پشتیبانی و ارائه می شود تا دیگه نگران زیر ساخت نباشید.
                                </span>
                                        </div>

                                    </div>
                                </div>
                                <div class="box-building md:mt-[2rem]  bg-white  w-full">
                                    <div class="floating-box flex flex-col gap-4 items-center w-full ">
                                        <img class="img" width="70" src="img/view/png/host.png" alt="">
                                        <div class="flex flex-col items-start w-4/5">
                                            <h3 class="text-base bolX">هاست ابری رایگان</h3>
                                            <span class="text-small text-gray w-10/12 mt-2 text-justify RaviBold">
                                    فضای هاست و ذخیره سازی اطلاعات شما بصورت رایگان توسط ما پشتیبانی و ارائه می شود تا دیگه نگران زیر ساخت نباشید.
                                </span>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="show-desktop flex-col w-full">
                    <div class="row-four w-full flex mt-8 flex-col items-center">
                        <div class="title-website-s">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 29.834 29.771">
                                <path id="fi-rr-picnic"
                                      d="M28.942,11.219a3.74,3.74,0,0,0-2.925-1.286c-1.778-13.178-20.437-13.167-22.2,0a3.752,3.752,0,0,0-3.76,4.258l1.317,9.23a7.489,7.489,0,0,0,7.375,6.4H21.123a7.491,7.491,0,0,0,7.375-6.4l1.317-9.23A3.73,3.73,0,0,0,28.942,11.219ZM14.915,2.474a8.7,8.7,0,0,1,8.592,7.459H6.322a8.7,8.7,0,0,1,8.592-7.459Zm7.708,9.946-4.787,4.8a.622.622,0,0,1-.878,0l-4.789-4.8Zm3.414,10.648a5,5,0,0,1-4.913,4.271H8.744a5,5,0,0,1-4.917-4.271L2.511,13.839a1.243,1.243,0,0,1,1.23-1.42H8.657L15.2,18.973a3.1,3.1,0,0,0,4.39,0l6.543-6.553a1.243,1.243,0,0,1,1.221,1.417Z"
                                      transform="translate(-0.018 -0.053)"/>
                            </svg>


                            <h2 class="relative">ابزارهای مدیریت محصول و سفارشات</h2>
                        </div>
                        <div class="list-tools mt-8 w-full grid grid-cols-4 gap-2">
                            <div class="box-building mt-12  bg-white  w-full">
                                <div class="floating-box flex flex-col items-center w-full ">
                                    <img class="img" width="80" src="img/view/png/digikala.png" alt="">
                                    <h3 class="text-base bolX">اضافه کردن محصول از دیجی کالا</h3>
                                    <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                    فضای هاست و ذخیره سازی اطلاعات شما بصورت رایگان توسط ما پشتیبانی و ارائه می شود تا دیگه نگران زیر ساخت نباشید.
                                </span>
                                </div>

                            </div>
                            <div class="box-building mt-12  bg-white  w-full">
                                <div class="floating-box flex flex-col items-center w-full ">
                                    <img style="scale: 0.8" class="img" width="80" src="img/view/png/amazon.png" alt="">
                                    <h3 class="text-base bolX">اضافه کردن محصول از آمازون</h3>
                                    <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                    بعد از ساخت فروشگاه در باهوش و تکمیل کردن اطلاعات وقشته که فروشگاهتون را روی دامنه خودتان داشته باشید.
                                </span>
                                </div>

                            </div>
                            <div class="box-building mt-12  bg-white  w-full">
                                <div class="floating-box flex flex-col items-center w-full ">
                                    <img class="img" width="80" src="img/view/png/instagram.png" alt="">
                                    <h3 class="text-base bolX">اضافه کردن محصول از اینستاگرام</h3>
                                    <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                    امنیت سایت شما برای اثبات به گوگل و کاربرانتان نیازمند داشتن گواهی SSL هست که باهوش برای فروشگاه شما دریافت میکند.
                                </span>
                                </div>

                            </div>
                            <div class="box-building mt-12  bg-white  w-full">
                                <div class="floating-box flex flex-col items-center w-full ">
                                    <img class="img" width="80" src="img/view/png/excel.png" alt="">
                                    <h3 class="text-base bolX">اضافه کردن محصول از اکسل</h3>
                                    <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                    دیگه نیازی نیست که برای راه اندازی فروشگاه اینترنتی حتما دانش فنی و کدنویسی داشته باشی، همه چیز تو باهوش کلیکی هست !
                                </span>
                                </div>

                            </div>
                            <div class="box-building mt-12  bg-white  w-full">
                                <div class="floating-box flex flex-col items-center w-full ">
                                    <img class="img" width="80" src="img/view/png/add-product.png" alt="">
                                    <h3 class="text-base bolX">اضافه کردن محصول بصورت دستی</h3>
                                    <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                    فضای هاست و ذخیره سازی اطلاعات شما بصورت رایگان توسط ما پشتیبانی و ارائه می شود تا دیگه نگران زیر ساخت نباشید.
                                </span>
                                </div>

                            </div>
                            <div class="box-building mt-12  bg-white  w-full">
                                <div class="floating-box flex flex-col items-center w-full ">
                                    <img class="img" width="80" src="img/view/png/multi-price.png" alt="">
                                    <h3 class="text-base bolX">قیمت گذاری تک و چند قیمتی</h3>
                                    <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                   بعد از ساخت فروشگاه در باهوش و تکمیل کردن اطلاعات وقشته که فروشگاهتون را روی دامنه خودتان داشته باشید.
                                </span>
                                </div>

                            </div>
                            <div class="box-building mt-12  bg-white  w-full">
                                <div class="floating-box flex flex-col items-center w-full ">
                                    <img class="img" width="80" src="img/view/png/report.png" alt="">
                                    <h3 class="text-base bolX">ارائه گزارشات فروش حرفه‌ای</h3>
                                    <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
امنیت سایت شما برای اثبات به گوگل و کاربرانتان نیازمند داشتن گواهی SSL هست که باهوش برای فروشگاه شما دریافت میکند.                                </span>
                                </div>

                            </div>
                            <div class="box-building mt-12  bg-white  w-full">
                                <div class="floating-box flex flex-col items-center w-full ">
                                    <img class="img" width="80" src="img/view/png/advanced-code.png" alt="">
                                    <h3 class="text-base bolX">ارائه کد تخفیف پیشرفته</h3>
                                    <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                    دیگه نیازی نیست که برای راه اندازی فروشگاه اینترنتی حتما دانش فنی و کدنویسی داشته باشی، همه چیز تو باهوش کلیکی هست !
                      </span>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="row-three w-full flex mt-12 flex-col items-center">
                        <div class="title-website-s">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 28.888 28.885">
                                <path id="fi-rr-box-open"
                                      d="M28.431,8.228,26.8,4.827a3.631,3.631,0,0,0-2.116-1.868L17.108.432a8.479,8.479,0,0,0-5.33,0L4.2,2.958A3.629,3.629,0,0,0,2.082,4.829L.534,8.087a3.643,3.643,0,0,0,1.872,5.3L2.4,20.99a6.01,6.01,0,0,0,4.114,5.715l5.254,1.751a8.479,8.479,0,0,0,5.33,0L22.357,26.7A6.012,6.012,0,0,0,26.473,21l.006-7.608a3.588,3.588,0,0,0,2.19-2.155,3.515,3.515,0,0,0-.238-3.008ZM12.54,2.716a6.053,6.053,0,0,1,3.806,0l5.113,1.7L14.451,6.768,7.429,4.421l5.111-1.7ZM2.651,9.227l1.6-3.349c.058.03,8.495,2.856,8.495,2.856l-1.951,3.922a1.211,1.211,0,0,1-1.412.522L3.264,11.141a1.234,1.234,0,0,1-.769-.745A1.32,1.32,0,0,1,2.65,9.229ZM7.275,24.422a3.605,3.605,0,0,1-2.469-3.428l.006-6.8,3.806,1.269a3.611,3.611,0,0,0,4.284-1.65l.335-.67-.006,13.218a5.811,5.811,0,0,1-.7-.187L7.276,24.423Zm14.321,0-5.26,1.754a6.044,6.044,0,0,1-.7.187l.006-13.235.384.77a3.585,3.585,0,0,0,3.083,1.756,3.641,3.641,0,0,0,1.156-.189l3.8-1.268L24.063,21a3.607,3.607,0,0,1-2.47,3.423ZM26.41,10.4a1.193,1.193,0,0,1-.745.722L19.5,13.18a1.2,1.2,0,0,1-1.367-.439l-1.992-4s8.433-2.83,8.491-2.861l1.677,3.492a1.2,1.2,0,0,1,.1,1.034Z"
                                      transform="translate(-0.009 -0.002)"/>
                            </svg>

                            <h2 class="relative">پرداخت و حمل و نقل آسان سفارشات</h2>
                        </div>
                        <div class="w-full gap-3 mt-16 mb-12 grid grid-cols-2">
                            <div class="box-img flex justify-center  items-center  bg-white">
                                {{--                            <img class="w-full h-full object-cover" src="" alt="">--}}
                                <h1 class="text-lg extraBold">...Cover image </h1>
                            </div>
                            <div class="left w-full grid gap-2 grid-cols-2">
                                <div class="box-building mt-5  bg-white  w-full">
                                    <div class="floating-box flex flex-col items-center w-full ">
                                        <img class="img" width="80" src="img/view/png/tipbox.png" alt="">
                                        <h3 class="text-base bolX">ارسال با تیپاکس</h3>
                                        <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
شما در باهوش ابزاری به اسم قالب ندارید، بجاش صفحه ساز دارید که میتونید طرح انحصاری برند خودتان را بسازید !                                </span>
                                    </div>

                                </div>
                                <div class="box-building mt-5  bg-white  w-full">
                                    <div class="floating-box flex flex-col items-center w-full ">
                                        <img style="scale: 0.8" class="img" width="80" src="img/view/png/post.png" alt="">
                                        <h3 class="text-base bolX">ارسال با پست ملی ایران</h3>
                                        <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
با استفاده از المان های مختلف گرافیکی قالب شخصی خودتان را تولید کنید و فروشگاه انحصاری خودتان را داشته یاشید.                                </span>
                                    </div>

                                </div>
                                <div class="box-building mt-11  bg-white  w-full">
                                    <div class="floating-box flex flex-col items-center w-full ">
                                        <img class="img" width="80" src="img/view/png/pay-online.png" alt="">
                                        <h3 class="text-base bolX">۴۰ درگاه پرداخت آنلاین</h3>
                                        <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                        با استفاده از قابلیت درگ اند دراپ، المان هارو انتخاب کنید و در بین صفحه ساز جابجا کنید و صفحه خود را انتشار دهید. به همین راحتی !
                                        </span>
                                    </div>

                                </div>
                                <div class="box-building mt-11  bg-white  w-full">
                                    <div class="floating-box flex flex-col items-center w-full ">
                                        <img style="scale: 0.8" class="img" width="80" src="img/view/png/snapp-pay.png"
                                             alt="">
                                        <h3 class="text-base bolX">درگاه پرداخت اقساطی</h3>
                                        <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                        قابلیت تغییر لوگو و آیکون سایت با یک کلیک به همراه تنظیمات پیشرفته تغییر سایز لوگو و تصاویر پیشفرض فروشگاه.
                                  </span>
                                    </div>

                                </div>
                                <div class="box-building mt-11  bg-white  w-full">
                                    <div class="floating-box flex flex-col items-center w-full ">
                                        <img class="img" width="80" src="img/view/png/manage-city.png" alt="">
                                        <h3 class="text-base bolX">مدیریت شهر و استان های فروش</h3>
                                        <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                        اگر انتخاب شما اشتراک سالانه و دائمی ما باشه این یک هدیه ویژه برای شما هست که کارای گرافیکی سایت شما توسط ما انجام میشود.
                                </span>
                                    </div>

                                </div>
                                <div class="box-building mt-11  bg-white  w-full">
                                    <div class="floating-box flex flex-col items-center w-full ">
                                        <img class="img" width="80" src="img/view/png/anbardari.png" alt="">
                                        <h3 class="text-base bolX">انبارداری چندگانه</h3>
                                        <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                  ما در تلگرام یک کانال آموزشی داریم که تمامی قسمت های کار با ادمین برایتان ضبط شده است، اگر متوجه نشدین ما برایتان انجام می دهیم :)
                                </span>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row-five w-full flex mt-12 flex-col items-center">
                        <div class="title-website-s">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 30.398 30.442">
                                <path id="fi-rr-call-history"
                                      d="M22.494,30.413c-10.3.348-28.859-18.06-20.243-28.041L3.708,1.1a3.9,3.9,0,0,1,5.481.056,1.267,1.267,0,0,1,.109.127l2.28,2.963a3.938,3.938,0,0,1-.013,5.422L10.1,11.518a16.2,16.2,0,0,0,8.781,8.8l1.855-1.476a4.016,4.016,0,0,1,5.425-.008l2.965,2.28a1.427,1.427,0,0,1,.127.108,3.94,3.94,0,0,1,0,5.547L28.1,28.1A7.8,7.8,0,0,1,22.494,30.413ZM6.416,2.54a1.386,1.386,0,0,0-.981.405L3.977,4.213c-7.153,8.6,14.736,29.27,22.265,22.156L27.4,25.037a1.394,1.394,0,0,0,.108-1.975L24.557,20.8a1.027,1.027,0,0,1-.127-.11,1.422,1.422,0,0,0-1.961,0,1.279,1.279,0,0,1-.106.1l-2.481,1.976a1.267,1.267,0,0,1-1.24.193A19.018,19.018,0,0,1,7.466,11.789a1.267,1.267,0,0,1,.185-1.267L9.62,8.044a1.075,1.075,0,0,1,.1-.106,1.394,1.394,0,0,0,0-1.962,1.1,1.1,0,0,1-.109-.127L7.347,2.9a1.385,1.385,0,0,0-.931-.357ZM21.575,19.793Zm7-3.854C34.9,6.634,23.764-4.491,14.468,1.83a1.267,1.267,0,1,0,1.45,2.078C22.853-.855,31.26,7.561,26.5,14.491a1.267,1.267,0,1,0,2.078,1.448ZM23.69,13.577a1.267,1.267,0,0,0,0-1.791L21.529,9.622V6.341a1.267,1.267,0,0,0-2.534,0v3.8a1.267,1.267,0,0,0,.371.9L21.9,13.571a1.267,1.267,0,0,0,1.791,0Z"
                                      transform="translate(-0.033 0.024)"/>
                            </svg>

                            <h2 class="relative">پشتیبانی و مالکیت محتوا</h2>
                        </div>
                        <div class="list grid grid-cols-4 pt-3 mb-16 w-full gap-2">
                            <div></div>
                            <div class="box-building  mt-16  bg-white  w-full">
                                <div class="floating-box flex flex-col items-center w-full ">
                                    <img style="scale: 0.8" class="img" width="80" src="img/view/png/support-3.png" alt="">
                                    <h3 class="text-base bolX">پشتیبانی ۳ جانبه باهوش</h3>
                                    <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                    فضای هاست و ذخیره سازی اطلاعات شما بصورت رایگان توسط ما پشتیبانی و ارائه می شود تا دیگه نگران زیر ساخت نباشید.
                                </span>
                                </div>

                            </div>
                            <div class="box-building mt-16  bg-white  w-full">
                                <div class="floating-box flex flex-col items-center w-full ">
                                    <img style="scale: 0.8" class="img" width="80" src="img/view/png/your-site.png" alt="">
                                    <h3 class="text-base bolX">مالک سایت شما هستین !</h3>
                                    <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                    بعد از ساخت فروشگاه در باهوش و تکمیل کردن اطلاعات وقشته که فروشگاهتون را روی دامنه خودتان داشته باشید.
                                </span>
                                </div>

                            </div>
                            <div></div>
                        </div>
                    </div>
                    <div class="row-six w-full flex mt-12 flex-col items-center">
                        <div class="title-website-s">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 31.971 31.97">
                                <path id="fi-rr-bullseye-pointer"
                                      d="M12.833,15.768.872,20.1a1.33,1.33,0,0,0-.487,2.193L4.1,26.01l-3.7,3.7A1.331,1.331,0,1,0,2.284,31.6l3.7-3.7L9.7,31.612a1.332,1.332,0,0,0,2.194-.489L16.23,19.163l.008-.023a2.663,2.663,0,0,0-3.4-3.374ZM10.106,28.249l-6.36-6.36,9.973-3.619-3.613,9.979Zm21.859-14.9A13.329,13.329,0,0,1,18.651,26.66a1.331,1.331,0,1,1,0-2.663A10.651,10.651,0,1,0,8,13.346a1.331,1.331,0,0,1-2.663,0,13.314,13.314,0,0,1,26.628,0Zm-7.988,0a5.326,5.326,0,0,0-10.246-2.04,1.332,1.332,0,0,1-2.46-1.021A7.99,7.99,0,1,1,21.706,20.728a1.331,1.331,0,1,1-1.02-2.459,5.313,5.313,0,0,0,3.29-4.922Z"
                                      transform="translate(0.007 -0.032)"/>
                            </svg>


                            <h2 class="relative">بازاریابی و رشد فروش</h2>
                        </div>
                        <div class="list grid grid-cols-4 pt-3 mb-16 w-full gap-2">
                            <div class="box-building  mt-16  bg-white  w-full">
                                <div class="floating-box flex flex-col items-center w-full ">
                                    <img style="scale: 0.8" class="img" width="80" src="img/view/png/torob.png" alt="">
                                    <h3 class="text-base bolX">اتصال به ترب</h3>
                                    <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                   فضای هاست و ذخیره سازی اطلاعات شما بصورت رایگان توسط ما پشتیبانی و ارائه می شود تا دیگه نگران زیر ساخت نباشید.
                                </span>
                                </div>

                            </div>
                            <div class="box-building mt-16  bg-white  w-full">
                                <div class="floating-box flex flex-col items-center w-full ">
                                    <img style="scale: 0.8" class="img" width="80" src="img/view/png/emals.png" alt="">
                                    <h3 class="text-base bolX">اتصال به ایمالز و ذره‌بین</h3>
                                    <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                   بعد از ساخت فروشگاه در باهوش و تکمیل کردن اطلاعات وقشته که فروشگاهتون را روی دامنه خودتان داشته باشید.
                                </span>
                                </div>

                            </div>
                            <div class="box-building mt-16  bg-white  w-full">
                                <div class="floating-box flex flex-col items-center w-full ">
                                    <img style="scale: 0.8" class="img" width="80" src="img/view/png/shop-seo.png" alt="">
                                    <h3 class="text-base bolX">رشد فروشگاه با سئو </h3>
                                    <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                    امنیت سایت شما برای اثبات به گوگل و کاربرانتان نیازمند داشتن گواهی SSL هست که باهوش برای فروشگاه شما دریافت میکند.
                                </span>
                                </div>

                            </div>
                            <div class="box-building mt-16  bg-white  w-full">
                                <div class="floating-box flex flex-col items-center w-full ">
                                    <img style="scale: 0.8" class="img" width="80" src="img/view/png/shop-chanel.png"
                                         alt="">
                                    <h3 class="text-base bolX">اتصال به کانال فروش پونز (بزودی)</h3>
                                    <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                    دیگه نیازی نیست که برای راه اندازی فروشگاه اینترنتی حتما دانش فنی و کدنویسی داشته باشی، همه چیز تو باهوش کلیکی هست !
                                </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row-seven w-full flex mt-12 flex-col items-center">
                        <div class="title-website-s">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 29.838 29.838">
                                <path id="fi-rr-pattern"
                                      d="M23.622,0H6.216A6.219,6.219,0,0,0,0,6.216V23.622a6.219,6.219,0,0,0,6.216,6.216H23.622a6.219,6.219,0,0,0,6.216-6.216V6.216A6.219,6.219,0,0,0,23.622,0Zm3.73,23.622a3.741,3.741,0,0,1-3.73,3.73H6.216a3.741,3.741,0,0,1-3.73-3.73V6.216a3.741,3.741,0,0,1,3.73-3.73H23.622a3.741,3.741,0,0,1,3.73,3.73ZM6.216,9.324a3.108,3.108,0,1,1,3.108,3.108A3.109,3.109,0,0,1,6.216,9.324Zm11.189,1.865V7.459a1.247,1.247,0,0,1,1.243-1.243h3.73a1.247,1.247,0,0,1,1.243,1.243v3.73a1.247,1.247,0,0,1-1.243,1.243h-3.73A1.247,1.247,0,0,1,17.405,11.189Zm-4.762,7.882a1.238,1.238,0,0,1,0,1.753l-2.486,2.486a1.238,1.238,0,0,1-1.753,0L5.918,20.824a1.238,1.238,0,0,1,0-1.753L8.4,16.585a1.238,1.238,0,0,1,1.753,0Zm11.537,2.723a1.194,1.194,0,0,1-1.007,1.828H17.853a1.194,1.194,0,0,1-1.007-1.828l2.661-4.252a1.2,1.2,0,0,1,2.026,0l2.661,4.252Z"/>
                            </svg>


                            <h2 class="relative">افزودنی های جذاب و کمکی</h2>
                        </div>
                        <div x-data class="list-extensions mb-12 mt-10 w-full grid grid-cols-4 gap-2">
                            <template x-for="item in 8">
                                <div class="item bg-white rounded-3xl h-72 w-full flex flex-col items-center p-3">
                                    <div class="img w-full flex items-end mt-2 justify-center  h-20">
                                        <img width="70" src="img/view/png/pwa.png" alt="">
                                    </div>
                                    <h3 class="text-base text-sm  mt-3 bolX">افرونه گفتینو</h3>
                                    <div
                                        class="label w-3/5 flex justify-center text-gray text-small bolX items-center h-10 mt-4">
                                        ۱/۹۰۰/۰۰۰ تومان
                                    </div>
                                    <p class="text-center leading-5	text-gray mt-3 text-small medium">دیگه نیازی نیست که
                                        برای راه اندازی فروشگاه اینترنتی حتما دانش فنی و کدنویسی داشته باشی،
                                        همه چیز تو باهوش کلیکی هست !</p>
                                </div>
                            </template>

                        </div>
                    </div>
                </div>
                <div
                    x-data="{
            init() {

                new Swiper($refs.swiper, {
                    slidesPerView: $store.device.mobile ? 1 : ($store.device.tablet ? 2 : 3),
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

                    class="row-eight w-full flex max-[600px]:mt-0 mt-12 flex-col items-center">
                    <div class="title-website-s">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 30.405 30.404">
                            <path id="fi-rr-comment-quote"
                                  d="M13.936,12.035V16.47a5.073,5.073,0,0,1-5.068,5.068,1.267,1.267,0,1,1,0-2.534A2.536,2.536,0,0,0,11.4,16.47H9.5a1.9,1.9,0,0,1-1.9-1.9v-1.9a2.533,2.533,0,0,1,2.534-2.534h1.9A1.9,1.9,0,0,1,13.936,12.035Zm6.968-1.9H19a2.533,2.533,0,0,0-2.534,2.534v1.9a1.9,1.9,0,0,0,1.9,1.9h1.9A2.536,2.536,0,0,1,17.737,19a1.267,1.267,0,1,0,0,2.534A5.073,5.073,0,0,0,22.8,16.47V12.035A1.9,1.9,0,0,0,20.9,10.135Zm9.5,5.5v8.438a6.342,6.342,0,0,1-6.335,6.335h-7.5C7.705,30.406.6,24.335.038,16.285A15.207,15.207,0,0,1,16.262.035,15.469,15.469,0,0,1,30.406,15.634Zm-2.534,0A12.925,12.925,0,0,0,16.091,2.565c-.29-.02-.58-.029-.868-.029A12.671,12.671,0,0,0,2.565,16.111c.473,6.816,6.364,11.762,14.01,11.762h7.5a3.805,3.805,0,0,0,3.8-3.8V15.635Z"
                                  transform="translate(-0.001 -0.001)"/>
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
                                                فروشگاه ساز باهوش با استفاده از سیستم مدیریت اختصاصی که داشت و قسمت
                                                انبارداری آنلاین به ما کمک کرد که موجودی تمامی فروشگاه هایی که در سطح
                                                شهر داریم رو در سایت نمایش بدیم جهت فروش و با استفاده از ابزار سئو خیلی
                                                فروش خوبی رو تجربه کردیم :)
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
                                                فروشگاه ساز باهوش با استفاده از سیستم مدیریت اختصاصی که داشت و قسمت
                                                انبارداری آنلاین به ما کمک کرد که موجودی تمامی فروشگاه هایی که در سطح
                                                شهر داریم رو در سایت نمایش بدیم جهت فروش و با استفاده از ابزار سئو خیلی
                                                فروش خوبی رو تجربه کردیم :)
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
                                                فروشگاه ساز باهوش با استفاده از سیستم مدیریت اختصاصی که داشت و قسمت
                                                انبارداری آنلاین به ما کمک کرد که موجودی تمامی فروشگاه هایی که در سطح
                                                شهر داریم رو در سایت نمایش بدیم جهت فروش و با استفاده از ابزار سئو خیلی
                                                فروش خوبی رو تجربه کردیم :)
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
                                                فروشگاه ساز باهوش با استفاده از سیستم مدیریت اختصاصی که داشت و قسمت
                                                انبارداری آنلاین به ما کمک کرد که موجودی تمامی فروشگاه هایی که در سطح
                                                شهر داریم رو در سایت نمایش بدیم جهت فروش و با استفاده از ابزار سئو خیلی
                                                فروش خوبی رو تجربه کردیم :)
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
                                                فروشگاه ساز باهوش با استفاده از سیستم مدیریت اختصاصی که داشت و قسمت
                                                انبارداری آنلاین به ما کمک کرد که موجودی تمامی فروشگاه هایی که در سطح
                                                شهر داریم رو در سایت نمایش بدیم جهت فروش و با استفاده از ابزار سئو خیلی
                                                فروش خوبی رو تجربه کردیم :)
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
                <div class="row-nine max-[600px]:mt-0 w-full flex mt-12 mb-16 flex-col items-center">
                    <div class="title-website-s">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 30.405 30.404">
                            <path id="fi-rr-comment-quote"
                                  d="M13.936,12.035V16.47a5.073,5.073,0,0,1-5.068,5.068,1.267,1.267,0,1,1,0-2.534A2.536,2.536,0,0,0,11.4,16.47H9.5a1.9,1.9,0,0,1-1.9-1.9v-1.9a2.533,2.533,0,0,1,2.534-2.534h1.9A1.9,1.9,0,0,1,13.936,12.035Zm6.968-1.9H19a2.533,2.533,0,0,0-2.534,2.534v1.9a1.9,1.9,0,0,0,1.9,1.9h1.9A2.536,2.536,0,0,1,17.737,19a1.267,1.267,0,1,0,0,2.534A5.073,5.073,0,0,0,22.8,16.47V12.035A1.9,1.9,0,0,0,20.9,10.135Zm9.5,5.5v8.438a6.342,6.342,0,0,1-6.335,6.335h-7.5C7.705,30.406.6,24.335.038,16.285A15.207,15.207,0,0,1,16.262.035,15.469,15.469,0,0,1,30.406,15.634Zm-2.534,0A12.925,12.925,0,0,0,16.091,2.565c-.29-.02-.58-.029-.868-.029A12.671,12.671,0,0,0,2.565,16.111c.473,6.816,6.364,11.762,14.01,11.762h7.5a3.805,3.805,0,0,0,3.8-3.8V15.635Z"
                                  transform="translate(-0.001 -0.001)"/>
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
            </div>
        </div>
    </div>

</x-layouts.app>
