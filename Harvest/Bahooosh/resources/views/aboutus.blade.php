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
                            درباره باهوش
                        </h1>
                        <span class="text-gray-s text-small max-[600px]:w-full w-2/5 text-center medium">
                        باهوش، سیستمی سریع و کاملا راحت و حرفه ای برای ساخت یک فروشگاه اینترنتی ایده آل مخصوص کسانی که می خواهند تجربه داشتن یک فروشگاه اینترنتی برای شروع فروش آنلاین خود را داشته باشند
                        </span>
                        <button
                            class="btn-base bg-white text-black hover:bg-black hover:text-white border-2 border-black mt-2 w-64 gap-5">
                            تماس با ما
                        </button>
                    </div>
                    <div class="border-row-one relative flex justify-content-end mt-20 mb-12 border-t-2 border-black">
                        <img width="85" src="/img/view/png/aboutus.png" alt="" class="img-left absolute">
                        <img width="40" src="img/view/png/img-arrow-right.png" alt=""
                             class="img-right top-0 right-2 absolute">
                    </div>
                </div>
                <div
                    class="row-two sm:mt-28 max-[700px]:gap-4 flex max-[700px]:flex-col md:flex-col lg:flex-row justify-between lg:items-start md:items-center">
                    <div
                        class="box-img md:ml-0 lg:ml-6 md:w-full lg:w-1/2 max-[700px]:w-full bg-white flex justify-center items-center relative overflow-hidden">
                        <h1>Cover image ...</h1>
                        {{--                        <img class="w-full h-full object-cover" src="" alt="">--}}
                    </div>
                    <div
                        class="box-end lg:w-1/2 md:w-full md:mt-[2rem] lg:mt-0 max-[700px]:w-full flex flex-col items-start">
                        <div class="title-website-s relative">
                            <h2>راه‌اندازی سریع و آسان</h2>
                        </div>
                        <p class="text-small leading-5 text-gray text-justify mt-7">فرانسه یکی از کشورهای پرتقاضا در
                            میان دانشجویان بین المللی است. این کشور فرصت های عالی آموزش
                            عالی را با کالج ها و دانشگاه های درجه یک خود ارائه می دهد. فرهنگ و سبک زندگی فرانسه نیز مورد
                            علاقه ی دانشجویان بین المللی است. تعداد زیادی از دانشجویان بین المللی فرانسه را برای تحصیلات
                            عالی انتخاب می کنند. دانشجویان بین المللی با انبوهی از اطلاعات و تجربیات وارد فرانسه می
                            شوند، اما بسیاری از آنها در انتخاب بهترین دوره با چالش هایی مواجه می شوند. این وبلاگ برای
                            دانشجویانی است که با این چالش‌ها روبرو هستند و می‌خواهند در مورد نحوه انتخاب پذیرش مناسب
                            خودشان در فرانسه اطلاعات کسب کنند.فرانسه یکی از کشورهای پرتقاضا در میان دانشجویان بین المللی
                            است. این کشور فرصت های عالی آموزش عالی را با کالج ها و دانشگاه های درجه یک خود ارائه می دهد.
                            فرهنگ و سبک زندگی فرانسه نیز مورد علاقه ی دانشجویان بین المللی است. تعداد زیادی از دانشجویان
                            بین المللی فرانسه را برای تحصیلات عالی انتخاب می کنند. دانشجویان بین المللی با انبوهی از
                            اطلاعات و تجربیات وارد فرانسه می شوند، اما بسیاری از آنها در انتخاب بهترین دوره با چالش هایی
                            مواجه می شوند. </p>
                        <div class="show-desktop w-full">
                            <div class="w-full mt-12 grid md:grid-cols-2 max-[700px]:grid-cols-1 gap-2">
                                <div class="box-building  mt-8  bg-white  w-full">
                                    <div class="floating-box flex flex-col items-center w-full ">
                                        <img style="scale: 0.9" class="img" width="80" src="/img/view/png/3deg.png"
                                             alt="">
                                        <h3 class="text-base bolX">پشتیبانی ۳ جانبه باهوش</h3>
                                        <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                        فضای هاست و ذخیره سازی اطلاعات شما بصورت رایگان توسط ما پشتیبانی و ارائه می شود تا دیگه نگران زیر ساخت نباشید.
                                </span>
                                    </div>

                                </div>
                                <div class="box-building  mt-8  bg-white  w-full">
                                    <div class="floating-box flex flex-col items-center w-full ">
                                        <img style="scale: 0.9" class="img" width="80" src="/img/view/png/my-site.png"
                                             alt="">
                                        <h3 class="text-base bolX">مالک سایت شما هستین !</h3>
                                        <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                        بعد از ساخت فروشگاه در باهوش و تکمیل کردن اطلاعات وقشته که فروشگاهتون را روی دامنه خودتان داشته باشید.
                                </span>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="show-mobile w-full">
                            <div class="w-full gap-3 mt-10 mb-12 grid grid-cols-1">
                                <div class="box-img flex justify-center  items-center  bg-white">
                                    {{--                            <img class="w-full h-full object-cover" src="" alt="">--}}
                                    <h1 class="text-lg extraBold">...Cover image </h1>
                                </div>
                                <div class="right w-full grid gap-2 md:grid-cols-2 md:mt-[4rem] grid-cols-1">
                                    <div class="box-building  bg-white  w-full">
                                        <div class="floating-box px-3 flex flex-col gap-4 items-center w-full ">
                                            <img class="img" width="70" src="/img/view/png/3deg.png" alt="">
                                            <div class="flex flex-col items-start w-4/5">
                                                <h3 class="text-base bolX">پشتیبانی ۳ جانبه باهوش</h3>
                                                <span class="text-small text-gray w-10/12 mt-2 text-justify RaviBold">
                                                    فضای هاست و ذخیره سازی اطلاعات شما بصورت رایگان توسط ما پشتیبانی و ارائه می شود تا دیگه نگران زیر ساخت نباشید.
                                </span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="box-building  bg-white  w-full">
                                        <div class="floating-box px-3 flex flex-col gap-4 items-center w-full ">
                                            <img class="img" width="70" src="img/view/png/my-site.png" alt="">
                                            <div class="flex flex-col items-start w-4/5">
                                                <h3 class="text-base bolX">مالک سایت شما هستین !</h3>
                                                <span class="text-small text-gray w-10/12 mt-2 text-justify RaviBold">
                                                 بعد از ساخت فروشگاه در باهوش و تکمیل کردن اطلاعات وقشته که فروشگاهتون را روی دامنه خودتان داشته باشید.
                                                </span>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-three w-full mt-7">
                    <div class="box-single bg-white flex justify-center items-center">
                        {{--                        <img class="w-full h-full object-cover" src="" alt="">--}}
                        <h1>Single Image</h1>
                    </div>
                </div>
                <div class="row-four w-full flex my-16 flex-col items-center">
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
                            <a href=""
                               class="box-telegram max-[600px]:w-full flex justify-center bolX text-lg items-center relative">
                                @BahoooshSupport
                                <svg class="absolute left-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                     viewBox="0 0 29.834 29.837">
                                    <path id="fi-rr-paper-plane"
                                          d="M28.742,1.1A3.687,3.687,0,0,0,25.261.1L5.369,4.292A6.21,6.21,0,0,0,1.822,14.836L3.958,16.97a1.243,1.243,0,0,1,.364.88v3.939a3.686,3.686,0,0,0,.373,1.6l-.01.009.032.032a3.73,3.73,0,0,0,1.693,1.686l.032.032.009-.01a3.686,3.686,0,0,0,1.6.373h3.939a1.243,1.243,0,0,1,.879.363L15,28.007a6.17,6.17,0,0,0,4.376,1.831,6.277,6.277,0,0,0,2-.328,6.133,6.133,0,0,0,4.157-4.956l4.2-19.935A3.7,3.7,0,0,0,28.742,1.1ZM5.718,15.215,3.581,13.08a3.655,3.655,0,0,1-.9-3.822A3.7,3.7,0,0,1,5.792,6.74L25.486,2.593,6.806,21.276V17.85A3.7,3.7,0,0,0,5.718,15.215Zm17.369,8.914a3.73,3.73,0,0,1-6.327,2.128l-2.138-2.138a3.7,3.7,0,0,0-2.634-1.092H8.563L27.245,4.351Z"
                                          transform="translate(-0.003 0)" fill="#fff"/>
                                </svg>

                            </a>
                            <a href=""
                               class="box-tel flex max-[600px]:w-full justify-center bolX text-lg items-center relative">
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
