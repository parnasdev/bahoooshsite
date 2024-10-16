<x-layouts.app>
    <div class="index-page">
        {{--------header--------}}
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
                            <svg id="Component_1_3" data-name="Component 1 – 3" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                                <rect id="Rectangle_1918" data-name="Rectangle 1918" width="30" height="30" rx="15"/>
                                <g id="fi-rr-menu-burger" transform="translate(8.282 10.468)">
                                    <rect id="Rectangle_1158" data-name="Rectangle 1158" width="14.196" height="1.374" rx="0.687" transform="translate(-0.38 3.846)" fill="#fff"/>
                                    <rect id="Rectangle_1159" data-name="Rectangle 1159" width="14.196" height="1.374" rx="0.687" transform="translate(-0.38 -0.275)" fill="#fff"/>
                                    <rect id="Rectangle_1160" data-name="Rectangle 1160" width="14.196" height="1.374" rx="0.687" transform="translate(-0.38 7.968)" fill="#fff"/>
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


        {{--------header--------}}

        {{------s-main------}}
        <section class="s-main mt-8">
            <div class=" prs-container">
                <div
                    class="p-main flex justify-between lg:flex-row xl:flex-row  items-center gap-5 w-full md:flex-col flex-mobi-col sm:flex-col">
                    <div class="text-main flex gap-3 sm:w-full flex-col items-center w-1/2">
                        <h1 class="text sm:text-xl   md:text-xl lg:text-2xl xl:text-2xl extraBold">
                            فروشگاه ساز باهوش ؛ کلیکی بسازش !
                        </h1>
                        <span class="text-gray-s text-small">ساده و سریع: فروشگاه آنلاین خود را در کمترین زمان راه‌اندازی کنید.</span>
                        <button class="btn-base bg-black text-white hover:bg-white hover:text-black border-2 border-black mt-4 w-64 gap-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 28.057 30.608">
                                <path id="fi-rr-mug-hot"
                                      d="M24.594,12.753h-.638V11.478A3.826,3.826,0,0,0,20.13,7.652H4.826A3.826,3.826,0,0,0,1,11.478V24.231a6.384,6.384,0,0,0,6.377,6.377h10.2a6.388,6.388,0,0,0,6.249-5.1,4.591,4.591,0,0,0,5.229-4.464V17.217A4.464,4.464,0,0,0,24.594,12.753Zm-7.014,15.3H7.377a3.826,3.826,0,0,1-3.826-3.826V11.478A1.275,1.275,0,0,1,4.826,10.2h15.3a1.275,1.275,0,0,1,1.275,1.275V24.231a3.826,3.826,0,0,1-3.826,3.826Zm8.927-7.014a2.067,2.067,0,0,1-2.551,1.913V15.3a2.067,2.067,0,0,1,2.551,1.913ZM11.2,3.826V1.275a1.275,1.275,0,1,1,2.551,0V3.826a1.275,1.275,0,1,1-2.551,0Zm5.1,0V1.275a1.275,1.275,0,1,1,2.551,0V3.826a1.275,1.275,0,1,1-2.551,0Zm-10.2,0V1.275a1.275,1.275,0,1,1,2.551,0V3.826a1.275,1.275,0,1,1-2.551,0Z"
                                      transform="translate(-1)" fill="#fff"/>
                            </svg>

                            ساخت فروشگاه رایگان
                        </button>
                        <ul class="row-option flex justify-center flex-wrap pt-3 gap-3  mt-5">
                            <li class="option flex gap-2 items-center justify-start mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 28.889 28.889">
                                    <path id="fi-rr-badge-check"
                                          d="M14.445,28.889a6.608,6.608,0,0,1-5.065-2.358,6.334,6.334,0,0,1-5.148-1.872,6.614,6.614,0,0,1-1.914-5.251A6.344,6.344,0,0,1,0,14.445,6.6,6.6,0,0,1,2.359,9.379,6.342,6.342,0,0,1,4.231,4.231,6.589,6.589,0,0,1,9.481,2.317,6.348,6.348,0,0,1,14.445,0,6.608,6.608,0,0,1,19.51,2.358,6.343,6.343,0,0,1,24.658,4.23a6.614,6.614,0,0,1,1.914,5.251,6.344,6.344,0,0,1,2.317,4.964A6.6,6.6,0,0,1,26.53,19.51a6.342,6.342,0,0,1-1.872,5.148,6.625,6.625,0,0,1-5.249,1.914A6.348,6.348,0,0,1,14.445,28.889ZM9.477,24.166a2.259,2.259,0,0,1,1.743.814,4.212,4.212,0,0,0,6.45,0,2.265,2.265,0,0,1,1.945-.806,4.213,4.213,0,0,0,4.56-4.56,2.259,2.259,0,0,1,.806-1.946,4.212,4.212,0,0,0,0-6.447,2.261,2.261,0,0,1-.806-1.946,4.212,4.212,0,0,0-4.559-4.56,2.254,2.254,0,0,1-1.946-.805,4.212,4.212,0,0,0-6.45,0,2.277,2.277,0,0,1-1.945.806,4.213,4.213,0,0,0-4.56,4.56,2.259,2.259,0,0,1-.806,1.946,4.212,4.212,0,0,0,0,6.447,2.261,2.261,0,0,1,.806,1.946,4.212,4.212,0,0,0,4.559,4.56c.069-.006.136-.008.2-.008Zm5.932-5.948,5.7-5.5a1.2,1.2,0,0,0-1.672-1.733L13.721,16.5a1.214,1.214,0,0,1-1.733-.03L9.246,13.922a1.2,1.2,0,0,0-1.638,1.763L10.318,18.2a3.61,3.61,0,0,0,2.559,1.058A3.57,3.57,0,0,0,15.41,18.22Z"
                                          fill="#2cbe00"/>
                                </svg>
                                <span class="text-small">سازگاری با موبایل</span>
                            </li>
                            <li class="option flex gap-2 items-center justify-start mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 28.889 28.889">
                                    <path id="fi-rr-badge-check"
                                          d="M14.445,28.889a6.608,6.608,0,0,1-5.065-2.358,6.334,6.334,0,0,1-5.148-1.872,6.614,6.614,0,0,1-1.914-5.251A6.344,6.344,0,0,1,0,14.445,6.6,6.6,0,0,1,2.359,9.379,6.342,6.342,0,0,1,4.231,4.231,6.589,6.589,0,0,1,9.481,2.317,6.348,6.348,0,0,1,14.445,0,6.608,6.608,0,0,1,19.51,2.358,6.343,6.343,0,0,1,24.658,4.23a6.614,6.614,0,0,1,1.914,5.251,6.344,6.344,0,0,1,2.317,4.964A6.6,6.6,0,0,1,26.53,19.51a6.342,6.342,0,0,1-1.872,5.148,6.625,6.625,0,0,1-5.249,1.914A6.348,6.348,0,0,1,14.445,28.889ZM9.477,24.166a2.259,2.259,0,0,1,1.743.814,4.212,4.212,0,0,0,6.45,0,2.265,2.265,0,0,1,1.945-.806,4.213,4.213,0,0,0,4.56-4.56,2.259,2.259,0,0,1,.806-1.946,4.212,4.212,0,0,0,0-6.447,2.261,2.261,0,0,1-.806-1.946,4.212,4.212,0,0,0-4.559-4.56,2.254,2.254,0,0,1-1.946-.805,4.212,4.212,0,0,0-6.45,0,2.277,2.277,0,0,1-1.945.806,4.213,4.213,0,0,0-4.56,4.56,2.259,2.259,0,0,1-.806,1.946,4.212,4.212,0,0,0,0,6.447,2.261,2.261,0,0,1,.806,1.946,4.212,4.212,0,0,0,4.559,4.56c.069-.006.136-.008.2-.008Zm5.932-5.948,5.7-5.5a1.2,1.2,0,0,0-1.672-1.733L13.721,16.5a1.214,1.214,0,0,1-1.733-.03L9.246,13.922a1.2,1.2,0,0,0-1.638,1.763L10.318,18.2a3.61,3.61,0,0,0,2.559,1.058A3.57,3.57,0,0,0,15.41,18.22Z"
                                          fill="#2cbe00"/>
                                </svg>
                                <span class="text-small">با کمک هوش مصنوعی ؛ بساز ، موجود کن ، بفروش !</span>
                            </li>
                            <li class="option flex gap-2 items-center justify-start mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 28.889 28.889">
                                    <path id="fi-rr-badge-check"
                                          d="M14.445,28.889a6.608,6.608,0,0,1-5.065-2.358,6.334,6.334,0,0,1-5.148-1.872,6.614,6.614,0,0,1-1.914-5.251A6.344,6.344,0,0,1,0,14.445,6.6,6.6,0,0,1,2.359,9.379,6.342,6.342,0,0,1,4.231,4.231,6.589,6.589,0,0,1,9.481,2.317,6.348,6.348,0,0,1,14.445,0,6.608,6.608,0,0,1,19.51,2.358,6.343,6.343,0,0,1,24.658,4.23a6.614,6.614,0,0,1,1.914,5.251,6.344,6.344,0,0,1,2.317,4.964A6.6,6.6,0,0,1,26.53,19.51a6.342,6.342,0,0,1-1.872,5.148,6.625,6.625,0,0,1-5.249,1.914A6.348,6.348,0,0,1,14.445,28.889ZM9.477,24.166a2.259,2.259,0,0,1,1.743.814,4.212,4.212,0,0,0,6.45,0,2.265,2.265,0,0,1,1.945-.806,4.213,4.213,0,0,0,4.56-4.56,2.259,2.259,0,0,1,.806-1.946,4.212,4.212,0,0,0,0-6.447,2.261,2.261,0,0,1-.806-1.946,4.212,4.212,0,0,0-4.559-4.56,2.254,2.254,0,0,1-1.946-.805,4.212,4.212,0,0,0-6.45,0,2.277,2.277,0,0,1-1.945.806,4.213,4.213,0,0,0-4.56,4.56,2.259,2.259,0,0,1-.806,1.946,4.212,4.212,0,0,0,0,6.447,2.261,2.261,0,0,1,.806,1.946,4.212,4.212,0,0,0,4.559,4.56c.069-.006.136-.008.2-.008Zm5.932-5.948,5.7-5.5a1.2,1.2,0,0,0-1.672-1.733L13.721,16.5a1.214,1.214,0,0,1-1.733-.03L9.246,13.922a1.2,1.2,0,0,0-1.638,1.763L10.318,18.2a3.61,3.61,0,0,0,2.559,1.058A3.57,3.57,0,0,0,15.41,18.22Z"
                                          fill="#2cbe00"/>
                                </svg>
                                <span class="text-small">حسابداری ، فروشگاه ، انبارداری</span>
                            </li>
                            <li class="option flex gap-2 items-center justify-start mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 28.889 28.889">
                                    <path id="fi-rr-badge-check"
                                          d="M14.445,28.889a6.608,6.608,0,0,1-5.065-2.358,6.334,6.334,0,0,1-5.148-1.872,6.614,6.614,0,0,1-1.914-5.251A6.344,6.344,0,0,1,0,14.445,6.6,6.6,0,0,1,2.359,9.379,6.342,6.342,0,0,1,4.231,4.231,6.589,6.589,0,0,1,9.481,2.317,6.348,6.348,0,0,1,14.445,0,6.608,6.608,0,0,1,19.51,2.358,6.343,6.343,0,0,1,24.658,4.23a6.614,6.614,0,0,1,1.914,5.251,6.344,6.344,0,0,1,2.317,4.964A6.6,6.6,0,0,1,26.53,19.51a6.342,6.342,0,0,1-1.872,5.148,6.625,6.625,0,0,1-5.249,1.914A6.348,6.348,0,0,1,14.445,28.889ZM9.477,24.166a2.259,2.259,0,0,1,1.743.814,4.212,4.212,0,0,0,6.45,0,2.265,2.265,0,0,1,1.945-.806,4.213,4.213,0,0,0,4.56-4.56,2.259,2.259,0,0,1,.806-1.946,4.212,4.212,0,0,0,0-6.447,2.261,2.261,0,0,1-.806-1.946,4.212,4.212,0,0,0-4.559-4.56,2.254,2.254,0,0,1-1.946-.805,4.212,4.212,0,0,0-6.45,0,2.277,2.277,0,0,1-1.945.806,4.213,4.213,0,0,0-4.56,4.56,2.259,2.259,0,0,1-.806,1.946,4.212,4.212,0,0,0,0,6.447,2.261,2.261,0,0,1,.806,1.946,4.212,4.212,0,0,0,4.559,4.56c.069-.006.136-.008.2-.008Zm5.932-5.948,5.7-5.5a1.2,1.2,0,0,0-1.672-1.733L13.721,16.5a1.214,1.214,0,0,1-1.733-.03L9.246,13.922a1.2,1.2,0,0,0-1.638,1.763L10.318,18.2a3.61,3.61,0,0,0,2.559,1.058A3.57,3.57,0,0,0,15.41,18.22Z"
                                          fill="#2cbe00"/>
                                </svg>
                                <span class="text-small">بدون نیاز به دانش فنی و کدنویسی</span>
                            </li>
                        </ul>
                    </div>

                    <div class="video-main  flex sm:w-full justify-end w-1/2">
                        <div class="box-video flex justify-center items-center  pos-relative">
{{--                            <button class="play-video pos-absolute cursor-pointer">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90"--}}
{{--                                     viewBox="0 0 123.246 123.246">--}}
{{--                                    <path id="fi-rr-caret-circle-down"--}}
{{--                                          d="M61.623,123.246a61.623,61.623,0,1,1,61.623-61.623,61.623,61.623,0,0,1-61.623,61.623Zm0-112.975a51.352,51.352,0,1,0,51.353,51.352A51.352,51.352,0,0,0,61.623,10.27Zm-29.43,49.3L58.316,86.036a4.622,4.622,0,0,0,6.614,0L91.053,59.569a4.745,4.745,0,0,0-3.307-8.088H35.5a4.745,4.745,0,0,0-3.307,8.088Z"--}}
{{--                                          transform="translate(0 123.246) rotate(-90)"/>--}}
{{--                                </svg>--}}
{{--                            </button>--}}
                            <img class="img-gif" src="img/view/gif/faq.gif" alt="">
                            <img width="45" src="img/view/png/arrow-video-main.png" alt="" class="img-arrow">
                        </div>

                    </div>
                </div>
            </div>
        </section>

        {{------s-main------}}

        {{------s-Building-store-----}}

        <section class="s-Building-store mt-20">
            {{--            <div class="line-s2">--}}
            {{--                <img src="img/view/svg/line-s2.svg" alt="">--}}
            {{--            </div>--}}
            <div class="prs-container">
                <div class="p-Building-store items-center flex flex-col w-full">
                    <div class="title-website">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 29.839 29.839">
                            <path id="fi-rr-object-group"
                                  d="M27.351,21.555V8.283a4.351,4.351,0,1,0-5.8-5.8H8.283a4.351,4.351,0,1,0-5.8,5.8V21.557a4.351,4.351,0,1,0,5.8,5.8H21.557a4.351,4.351,0,1,0,5.8-5.8Zm-6.171,3.31H8.658A4.362,4.362,0,0,0,4.973,21.18V8.658A4.362,4.362,0,0,0,8.658,4.973H21.18a4.362,4.362,0,0,0,3.685,3.685V21.18A4.362,4.362,0,0,0,21.18,24.865ZM25.487,2.486a1.865,1.865,0,1,1-1.865,1.865A1.867,1.867,0,0,1,25.487,2.486Zm-21.135,0A1.865,1.865,0,1,1,2.486,4.351,1.867,1.867,0,0,1,4.351,2.486Zm0,24.865a1.865,1.865,0,1,1,1.865-1.865A1.867,1.867,0,0,1,4.351,27.351Zm21.135,0a1.865,1.865,0,1,1,1.865-1.865A1.867,1.867,0,0,1,25.487,27.351ZM17.405,13.676V11.189A2.489,2.489,0,0,0,14.919,8.7H9.946a2.489,2.489,0,0,0-2.486,2.486v2.486a2.489,2.489,0,0,0,2.486,2.486h4.973A2.489,2.489,0,0,0,17.405,13.676ZM9.946,11.189h4.973v2.486H9.946Zm12.432,4.973v2.486a2.489,2.489,0,0,1-2.486,2.486H14.919a2.489,2.489,0,0,1-2.486-2.486,1.243,1.243,0,0,1,2.486,0h4.973V16.162a1.243,1.243,0,1,1,0-2.486A2.489,2.489,0,0,1,22.378,16.162Z"/>
                        </svg>

                        <h2>همه چیز برای ساخت فروشگاه آنلاین شما!</h2>
                    </div>
                    <div class="list-building grid  gap-3 grid-cols-4 mb-5 px-4 mt-20">
                        <div class="box-building  bg-white  w-full">
                            <div class="floating-box flex flex-col items-center w-full ">
                                <img class="img" width="80" src="img/view/png/store-online.png" alt="">
                                <h3 class="text-base RaviBold">فروشگاه آنلاین حرفه‌ای، با چند کلیک!</h3>
                                <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                    به سادگی و در کمترین زمان ممکن، فروشگاه خود را با امکانات پیشرفته ایجاد کنید. دیگر نیازی به دانش فنی نیست!
                                </span>
                            </div>

                        </div>
                        <div class="box-building  bg-white  w-full">
                            <div class="floating-box flex flex-col items-center w-full ">
                                <img class="img" width="80" src="img/view/png/ux.png" alt="">
                                <h3 class="text-base RaviBold">طراحی سفارشی برای فروشگاه شما</h3>
                                <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                   از ابزارهای متنوع و قابل ویرایش بهره ببرید تا فروشگاه آنلاین شما دقیقاً همان‌طور که می‌خواهید دیده شود.
                                </span>
                            </div>

                        </div>
                        <div class="box-building  bg-white  w-full">
                            <div class="floating-box flex flex-col items-center w-full ">
                                <img class="img" width="80" src="img/view/png/seo.png" alt="">
                                <h3 class="text-base RaviBold">افزایش فروش با سئو دکمه‌ای !</h3>
                                <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                  با استفاده از ابزارهای بهینه‌سازی موتور جستجو (SEO) و SMS مارکتینگ، فروش آنلاین خود را به حداکثر برسانید.
                                </span>
                            </div>

                        </div>
                        <div class="box-building  bg-white  w-full">
                            <div class="floating-box flex flex-col items-center w-full ">
                                <img class="img" width="80" src="img/view/png/pay.png" alt="">
                                <h3 class="text-base RaviBold">درگاه پرداخت شخصی و بدون کارمزد</h3>
                                <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                    قابلیت استفاده از درگاه پرداخت شخصی فروشگاه و اتصال مستقیم به حساب بانکی خودتون، دیگه نگران کارمزد نباشید :)
                                </span>
                            </div>

                        </div>

                    </div>
                    <div class="box-more-features flex justify-between items-center px-3 h-16 bg-white rounded-lg ">
                        <span class="text-base RaviBold text-normal">فروشگاه‌سازی آسان، امکانات نامحدود</span>
                        <button class="btn-base-two bg-white text-black border-2 border-black hover:bg-black hover:text-white px-4">
                            امکانات متنوع بیشتر
                        </button>
                    </div>
                </div>
            </div>
        </section>
        {{------s-Building-store-----}}


        {{-----s-s3-----}}
        <section
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

            class="s3 mt-20">
            <div class="prs-container">
                <div class="p-s3 w-full">
                    <div class="title-website">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 30.405 30.405">
                            <path id="fi-rr-comment-quote"
                                  d="M13.936,12.035V16.47a5.073,5.073,0,0,1-5.068,5.068,1.267,1.267,0,1,1,0-2.534A2.536,2.536,0,0,0,11.4,16.47H9.5a1.9,1.9,0,0,1-1.9-1.9v-1.9a2.533,2.533,0,0,1,2.534-2.534h1.9A1.9,1.9,0,0,1,13.936,12.035Zm6.968-1.9H19a2.533,2.533,0,0,0-2.534,2.534v1.9a1.9,1.9,0,0,0,1.9,1.9h1.9A2.536,2.536,0,0,1,17.737,19a1.267,1.267,0,1,0,0,2.534A5.073,5.073,0,0,0,22.8,16.47V12.035A1.9,1.9,0,0,0,20.9,10.135Zm9.5,5.5v8.438a6.342,6.342,0,0,1-6.335,6.335h-7.5C7.705,30.406.6,24.335.038,16.285A15.207,15.207,0,0,1,16.262.035,15.469,15.469,0,0,1,30.406,15.634Zm-2.534,0A12.925,12.925,0,0,0,16.091,2.565c-.29-.02-.58-.029-.868-.029A12.671,12.671,0,0,0,2.565,16.111c.473,6.816,6.364,11.762,14.01,11.762h7.5a3.805,3.805,0,0,0,3.8-3.8V15.635Z"
                                  transform="translate(-0.001 -0.001)"/>
                        </svg>
                        <h2>داستان‌های موفقیت کسب‌وکارها با ما</h2>
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
            </div>
        </section>
        {{-----s-s3-----}}


        {{----s-create-store----}}
        <section x-data class="s-create-store py-9">
            <div class="prs-container">
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
                                <img width="150" src="img/view/png/line-between-rotate.png" alt="">
                            </div>
                            <div class="top-list mt-8 flex justify-between w-full items-center">
                                <div class="item-store flex flex-col items-center">
                                    <div class="p-number mb-3 w-full flex items-center justify-between">
                                        <strong class="bolX mr-3 text-5xl mt-4">1</strong>
                                        <img class="ml-3" width="40" src="img/view/png/step-1.png" alt="">
                                    </div>
                                    <h3 class="text-base fs-16 bolX">ثبت ‌نام و ایجاد حساب کاربری</h3>
                                    <span class="text-gray text-small RaviBold text-center mt-3">با چند کلیک ساده ثبت‌نام کنید و وارد دنیای فروش آنلاین شوید.</span>
                                </div>
                                <img width="110" src="img/view/png/arrow-between-to.png" alt="">
                                <div class="item-store flex flex-col items-center">
                                    <div class="p-number mb-3 w-full flex items-center justify-between">
                                        <strong class="bolX mr-3 text-5xl mt-4">2</strong>
                                        <img class="ml-3" width="70" src="img/view/png/step-2.png" alt="">
                                    </div>
                                    <h3 class="text-base fs-16 bolX">طراحی سفارشی و رها کردن المان ها</h3>
                                    <span class="text-gray text-small RaviBold text-center mt-3">فروشگاه آنلاین خود را با المان‌های حرفه‌ای ما طراحی کنید و با سلیقه خود تنظیم کنید.</span>
                                </div>
                                <img width="110" src="img/view/png/arrow-between-to.png" alt="">
                                <div class="item-store flex flex-col items-center">
                                    <div class="p-number mb-3 w-full flex items-center justify-between">
                                        <strong class="bolX mr-3 text-5xl mt-4">3</strong>
                                        <img class="ml-3" width="50" src="img/view/png/step-3.png" alt="">
                                    </div>
                                    <h3 class="text-base fs-16 bolX">افزودن محصول و آماده فروش</h3>
                                    <span class="text-gray text-small RaviBold text-center mt-3">محصولات خود را به راحتی اضافه کرده و به مشتریانتان معرفی کنید.</span>
                                </div>
                            </div>
                            <div class="bottom-list mt-8 flex justify-between w-full items-center">
                                <div class="item-store flex flex-col items-center">
                                    <div class="p-number mb-3 w-full flex items-center justify-between">
                                        <strong class="bolX mr-3 text-5xl mt-4">4</strong>
                                        <img class="ml-3" width="40" src="img/view/png/step-4.png" alt="">
                                    </div>
                                    <h3 class="text-base fs-16 bolX">اتصال به درگاه پرداخت و تنظیم حمل و نقل</h3>
                                    <span class="text-gray text-small RaviBold text-center mt-3">پرداخت‌ها را به راحتی مدیریت کنید و سفارشات را به مشتریان ارسال کنید.</span>
                                </div>
                                <img width="110" src="img/view/png/arrow-between-from.png" alt="">
                                <div class="item-store flex flex-col items-center">
                                    <div class="p-number mb-3 w-full flex items-center justify-between">
                                        <strong class="bolX mr-3 text-5xl mt-4">5</strong>
                                        <img class="ml-3" width="70" src="img/view/png/step-5.png" alt="">
                                    </div>
                                    <h3 class="text-base fs-16 bolX">اتصال به کانال های فروش و SEO</h3>
                                    <span class="text-gray text-small RaviBold text-center mt-3">با اتصال به ترب ، ایمالز ، ذره بین و پونز فروش خود را افزایش دهید و با سئو به کاربران گوگل معرفی شوید !</span>
                                </div>
                                <img width="110" src="img/view/png/arrow-between-from.png" alt="">
                                <div class="item-store flex flex-col items-center">
                                    <div class="p-number mb-3 w-full flex items-center justify-between">
                                        <strong class="bolX mr-3 text-5xl mt-4">6</strong>
                                        <img class="ml-3" width="50" src="img/view/png/step-6.png" alt="">
                                    </div>
                                    <h3 class="text-base fs-16 bolX">شروع به فروش و مدیریت آسان فروشگاه</h3>
                                    <span class="text-gray text-small RaviBold text-center mt-3">حالا همه چیز آماده است! فروشگاه شما آماده فروش است و شما با ابزارهای حرفه‌ای ما، کنترل کامل فروش خود را دارید.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="show-mobile w-full">
                        <div class="list-create-store relative flex justify-center flex-col w-100">
                            <div class="top-list mt-8 flex flex-col justify-between w-full items-center">
                                <div class="item-store flex flex-col items-center">
                                    <div class="p-number mb-3 w-full flex items-center justify-between">
                                        <strong class="bolX mr-3 text-5xl mt-4">1</strong>
                                        <img class="ml-3" width="40" src="img/view/png/step-1.png" alt="">
                                    </div>
                                    <h3 class="text-base fs-16 bolX">ثبت ‌نام و ایجاد حساب کاربری</h3>
                                    <span class="text-gray text-small RaviBold text-center mt-3">با چند کلیک ساده ثبت‌نام کنید و وارد دنیای فروش آنلاین شوید.</span>
                                </div>
                                <div class="img-arrow-left w-full flex justify-end relative">
                                    <img class="absolute left-0" width="35" src="img/view/svg/img-arrow-left.svg"
                                         alt="">
                                </div>
                                <div class="item-store mt-7 flex flex-col items-center">
                                    <div class="p-number mb-3 w-full flex items-center justify-between">
                                        <strong class="bolX mr-3 text-5xl mt-4">2</strong>
                                        <img class="ml-3" width="70" src="img/view/png/step-2.png" alt="">
                                    </div>
                                    <h3 class="text-base fs-16 bolX">طراحی سفارشی و رها کردن المان ها</h3>
                                    <span class="text-gray text-small RaviBold text-center mt-3">فروشگاه آنلاین خود را با المان‌های حرفه‌ای ما طراحی کنید و با سلیقه خود تنظیم کنید.</span>
                                </div>
                                <div class="img-arrow-right w-full flex justify-start relative">
                                    <img class="absolute right-0" width="35" src="img/view/svg/img-arrow-right.svg"
                                         alt="">
                                </div>
                                <div class="item-store mt-7 flex flex-col items-center">
                                    <div class="p-number mb-3 w-full flex items-center justify-between">
                                        <strong class="bolX mr-3 text-5xl mt-4">3</strong>
                                        <img class="ml-3" width="50" src="img/view/png/step-3.png" alt="">
                                    </div>
                                    <h3 class="text-base fs-16 bolX">افزودن محصول و آماده فروش</h3>
                                    <span class="text-gray text-small RaviBold text-center mt-3">محصولات خود را به راحتی اضافه کرده و به مشتریانتان معرفی کنید.</span>
                                </div>
                                <div class="img-arrow-left w-full flex justify-end relative">
                                    <img class="absolute left-0" width="35" src="img/view/svg/img-arrow-left.svg"
                                         alt="">
                                </div>

                            </div>
                            <div class="bottom-list mt-8 flex justify-between w-full items-center">
                                <div class="item-store flex flex-col items-center">
                                    <div class="p-number mb-3 w-full flex items-center justify-between">
                                        <strong class="bolX mr-3 text-5xl mt-4">4</strong>
                                        <img class="ml-3" width="40" src="img/view/png/step-4.png" alt="">
                                    </div>
                                    <h3 class="text-base fs-16 bolX">اتصال به درگاه پرداخت و تنظیم حمل و نقل</h3>
                                    <span class="text-gray text-small RaviBold text-center mt-3">پرداخت‌ها را به راحتی مدیریت کنید و سفارشات را به مشتریان ارسال کنید.</span>
                                </div>
                                <div class="img-arrow-right w-full flex justify-start relative">
                                    <img class="absolute right-0" width="35" src="img/view/svg/img-arrow-right.svg"
                                         alt="">
                                </div>
                                <div class="item-store mt-7 flex flex-col items-center">
                                    <div class="p-number mb-3 w-full flex items-center justify-between">
                                        <strong class="bolX mr-3 text-5xl mt-4">5</strong>
                                        <img class="ml-3" width="70" src="img/view/png/step-5.png" alt="">
                                    </div>
                                    <h3 class="text-base fs-16 bolX">اتصال به کانال های فروش و SEO</h3>
                                    <span class="text-gray text-small RaviBold text-center mt-3">با اتصال به ترب ، ایمالز ، ذره بین و پونز فروش خود را افزایش دهید و با سئو به کاربران گوگل معرفی شوید !</span>
                                </div>
                                <div class="img-arrow-left w-full flex justify-end relative">
                                    <img class="absolute left-0" width="35" src="img/view/svg/img-arrow-left.svg"
                                         alt="">
                                </div>
                                <div class="item-store mt-7 flex flex-col items-center">
                                    <div class="p-number mb-3 w-full flex items-center justify-between">
                                        <strong class="bolX mr-3 text-5xl mt-4">6</strong>
                                        <img class="ml-3" width="50" src="img/view/png/step-6.png" alt="">
                                    </div>
                                    <h3 class="text-base fs-16 bolX">شروع به فروش و مدیریت آسان فروشگاه</h3>
                                    <span class="text-gray text-small RaviBold text-center mt-3">حالا همه چیز آماده است! فروشگاه شما آماده فروش است و شما با ابزارهای حرفه‌ای ما، کنترل کامل فروش خود را دارید.</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <button class="btn-base bg-black text-white hover:bg-white hover:text-black border-2 border-black md:mt-9  btn-base-create-store gap-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 28.057 30.608">
                            <path id="fi-rr-mug-hot"
                                  d="M24.594,12.753h-.638V11.478A3.826,3.826,0,0,0,20.13,7.652H4.826A3.826,3.826,0,0,0,1,11.478V24.231a6.384,6.384,0,0,0,6.377,6.377h10.2a6.388,6.388,0,0,0,6.249-5.1,4.591,4.591,0,0,0,5.229-4.464V17.217A4.464,4.464,0,0,0,24.594,12.753Zm-7.014,15.3H7.377a3.826,3.826,0,0,1-3.826-3.826V11.478A1.275,1.275,0,0,1,4.826,10.2h15.3a1.275,1.275,0,0,1,1.275,1.275V24.231a3.826,3.826,0,0,1-3.826,3.826Zm8.927-7.014a2.067,2.067,0,0,1-2.551,1.913V15.3a2.067,2.067,0,0,1,2.551,1.913ZM11.2,3.826V1.275a1.275,1.275,0,1,1,2.551,0V3.826a1.275,1.275,0,1,1-2.551,0Zm5.1,0V1.275a1.275,1.275,0,1,1,2.551,0V3.826a1.275,1.275,0,1,1-2.551,0Zm-10.2,0V1.275a1.275,1.275,0,1,1,2.551,0V3.826a1.275,1.275,0,1,1-2.551,0Z"
                                  transform="translate(-1)" fill="#fff"/>
                        </svg>

                        همین امروز فروشگاهت را راه‌اندازی کن
                    </button>
                </div>

            </div>
        </section>

        {{----s-create-store----}}


        {{--s-plans--}}
        <section class="s-plans">
            <div class="prs-container">
                <div class="p-plans">
                    <div class="title-website">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 31.692 31.696">
                            <path id="fi-rr-diamond"
                                  d="M30.666,7.585,26.69,2.212A5.289,5.289,0,0,0,22.392,0H9.3A5.283,5.283,0,0,0,5.019,2.187L.971,7.6a5.273,5.273,0,0,0,.162,6.318L12.745,30.2a3.958,3.958,0,0,0,6.244-.053l11.519-16.1a5.283,5.283,0,0,0,.158-6.459ZM24.554,3.765,28.54,9.151c.021.029.026.063.048.094H22.127l-1.886-6.6h2.151a2.657,2.657,0,0,1,2.162,1.124ZM15.848,25.249,12.283,11.886h7.132Zm-3.531-16,1.886-6.6h3.291l1.886,6.6Zm-5.163-5.5A2.651,2.651,0,0,1,9.3,2.641h2.151L9.57,9.245H3.062c.018-.029.024-.065.045-.092ZM3.233,12.315a2.509,2.509,0,0,1-.244-.429H9.551l3.954,14.831ZM18.187,26.73l3.962-14.844h6.585a2.774,2.774,0,0,1-.321.556Z"
                                  transform="translate(0.001)"/>
                        </svg>
                        <h2>قیمت‌های شفاف، امکانات بی‌نهایت!</h2>
                    </div>
                    <div class="show-desktop">
                        <div class="list-plans mx-auto mt-14 mb-6 w-11/12 grid grid-cols-3 gap-3">
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
                                <button class="btn-base-two bg-white text-black border-2 border-black hover:bg-black hover:text-white text-small relative rounded-md mt-7 w-2/3">
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
                                <button class="btn-base-two bg-white text-black border-2 border-black hover:bg-black hover:text-white text-small relative rounded-md mt-7 w-2/3">
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
                                <button class="btn-base-two bg-white text-black border-2 border-black hover:bg-black hover:text-white text-small relative rounded-md mt-7 w-2/3">
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
                    <div class="show-mobile">
                        <div class="list-plans mx-auto mt-14 mb-6 w-11/12 flex justify-start gap-3">
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
                                <button class="btn-base-two bg-white text-black border-2 border-black hover:bg-black hover:text-white text-small relative btn-store-free  rounded-md mt-7">
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
                                <button class="btn-base-two bg-white text-black border-2 border-black hover:bg-black hover:text-white btn-store-free text-small relative rounded-md mt-7 ">
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
                                <button class="btn-base-two bg-white text-black border-2 border-black hover:bg-black hover:text-white btn-store-free text-small relative rounded-md mt-7 ">
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
                    <div class="w-full flex justify-center">
                        <a class="text-small text-gray-s RaviBold" href="">مشاهده و مقایسه اشتراک ها</a>
                    </div>
                </div>
            </div>
        </section>
        {{--s-plans--}}

        {{--s-support--}}
        <section class="s-support">
            <div class="prs-container ">
                <div class="p-support grid grid-cols-2 w-full h-full">
                    <div class="col-support py-9 flex flex-col items-center w-full">
                        <div class="title-website-col w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 31.953 31.955">
                                <path id="fi-rr-head-side-headphones"
                                      d="M26.363,5.884A14.531,14.531,0,0,0,12.585.142,14.64,14.64,0,0,0,3.01,23.53a5.17,5.17,0,0,1,.984,3.135v1.293a4,4,0,0,0,3.994,3.994h9.32A4,4,0,0,0,21.3,27.958h.658a6.677,6.677,0,0,0,6.6-5.785l.292-2.2h.439a2.608,2.608,0,0,0,2.663-2.663c0-1.891-3.9-9.338-5.59-11.425Zm-11.717,6.1a2.663,2.663,0,1,1-2.663,2.663A2.665,2.665,0,0,1,14.645,11.983Zm13.04,5.326a1.33,1.33,0,0,0-1.319,1.157l-.445,3.359A4.008,4.008,0,0,1,21.96,25.3H19.971a1.33,1.33,0,0,0-1.331,1.331v1.331a1.332,1.332,0,0,1-1.331,1.331H7.988a1.332,1.332,0,0,1-1.331-1.331V26.666a7.844,7.844,0,0,0-1.532-4.754A11.977,11.977,0,0,1,12.948,2.779c.122-.017.245-.032.366-.045V9.487a5.326,5.326,0,1,0,2.663,0V2.735A11.914,11.914,0,0,1,24.262,7.52c1.74,2.152,4.86,8.591,5.026,9.79h-1.6Z"
                                      transform="translate(0 0.002)"/>
                            </svg>
                            <h2>پشتیبانی و مشاوره رایگان</h2>
                        </div>
                        <p class="description w-2/3 mt-9 text-normal text-center text-gray">
                            جهت دریافت اطلاعات بیشتر و مشاوره رایگان قبل از ساخت فروشگاه،
                            می توانید با شماره زیر تماس بگیرید.
                        </p>
                        <h5 class="bolX text-sm mt-4">از شنبه تا چهارشنبه - ساعت : ۱۰ صبح الی ۱۸</h5>
                        <div class="w-full mt-5 boxes flex flex-col items-center justify-center gap-2">
                            <a href="" class="box-tel flex justify-center bolX text-lg items-center relative">
                                ۰۲۱-۷۱۰۵۷۵۵۹
                                <svg class="absolute left-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                     viewBox="0 0 30.398 30.442">
                                    <path id="fi-rr-call-history"
                                          d="M22.494,30.413c-10.3.348-28.859-18.06-20.243-28.041L3.708,1.1a3.9,3.9,0,0,1,5.481.056,1.267,1.267,0,0,1,.109.127l2.28,2.963a3.938,3.938,0,0,1-.013,5.422L10.1,11.518a16.2,16.2,0,0,0,8.781,8.8l1.855-1.476a4.016,4.016,0,0,1,5.425-.008l2.965,2.28a1.427,1.427,0,0,1,.127.108,3.94,3.94,0,0,1,0,5.547L28.1,28.1A7.8,7.8,0,0,1,22.494,30.413ZM6.416,2.54a1.386,1.386,0,0,0-.981.405L3.977,4.213c-7.153,8.6,14.736,29.27,22.265,22.156L27.4,25.037a1.394,1.394,0,0,0,.108-1.975L24.557,20.8a1.027,1.027,0,0,1-.127-.11,1.422,1.422,0,0,0-1.961,0,1.279,1.279,0,0,1-.106.1l-2.481,1.976a1.267,1.267,0,0,1-1.24.193A19.018,19.018,0,0,1,7.466,11.789a1.267,1.267,0,0,1,.185-1.267L9.62,8.044a1.075,1.075,0,0,1,.1-.106,1.394,1.394,0,0,0,0-1.962,1.1,1.1,0,0,1-.109-.127L7.347,2.9a1.385,1.385,0,0,0-.931-.357ZM21.575,19.793Zm7-3.854C34.9,6.634,23.764-4.491,14.468,1.83a1.267,1.267,0,1,0,1.45,2.078C22.853-.855,31.26,7.561,26.5,14.491a1.267,1.267,0,1,0,2.078,1.448ZM23.69,13.577a1.267,1.267,0,0,0,0-1.791L21.529,9.622V6.341a1.267,1.267,0,0,0-2.534,0v3.8a1.267,1.267,0,0,0,.371.9L21.9,13.571a1.267,1.267,0,0,0,1.791,0Z"
                                          transform="translate(-0.033 0.024)"/>
                                </svg>
                            </a>
                            <a href="" class="box-telegram flex justify-center bolX text-lg items-center relative">
                                @BahoooshSupport
                                <svg class="absolute left-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                     viewBox="0 0 29.834 29.837">
                                    <path id="fi-rr-paper-plane"
                                          d="M28.742,1.1A3.687,3.687,0,0,0,25.261.1L5.369,4.292A6.21,6.21,0,0,0,1.822,14.836L3.958,16.97a1.243,1.243,0,0,1,.364.88v3.939a3.686,3.686,0,0,0,.373,1.6l-.01.009.032.032a3.73,3.73,0,0,0,1.693,1.686l.032.032.009-.01a3.686,3.686,0,0,0,1.6.373h3.939a1.243,1.243,0,0,1,.879.363L15,28.007a6.17,6.17,0,0,0,4.376,1.831,6.277,6.277,0,0,0,2-.328,6.133,6.133,0,0,0,4.157-4.956l4.2-19.935A3.7,3.7,0,0,0,28.742,1.1ZM5.718,15.215,3.581,13.08a3.655,3.655,0,0,1-.9-3.822A3.7,3.7,0,0,1,5.792,6.74L25.486,2.593,6.806,21.276V17.85A3.7,3.7,0,0,0,5.718,15.215Zm17.369,8.914a3.73,3.73,0,0,1-6.327,2.128l-2.138-2.138a3.7,3.7,0,0,0-2.634-1.092H8.563L27.245,4.351Z"
                                          transform="translate(-0.003 0)" fill="#fff"/>
                                </svg>

                            </a>
                        </div>
                    </div>
                    <div class="col-faq flex py-9  flex-col items-center w-full">
                        <div class="title-website-col w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 30.405 30.404">
                                <path id="fi-rr-comment-quote"
                                      d="M13.936,12.035V16.47a5.073,5.073,0,0,1-5.068,5.068,1.267,1.267,0,1,1,0-2.534A2.536,2.536,0,0,0,11.4,16.47H9.5a1.9,1.9,0,0,1-1.9-1.9v-1.9a2.533,2.533,0,0,1,2.534-2.534h1.9A1.9,1.9,0,0,1,13.936,12.035Zm6.968-1.9H19a2.533,2.533,0,0,0-2.534,2.534v1.9a1.9,1.9,0,0,0,1.9,1.9h1.9A2.536,2.536,0,0,1,17.737,19a1.267,1.267,0,1,0,0,2.534A5.073,5.073,0,0,0,22.8,16.47V12.035A1.9,1.9,0,0,0,20.9,10.135Zm9.5,5.5v8.438a6.342,6.342,0,0,1-6.335,6.335h-7.5C7.705,30.406.6,24.335.038,16.285A15.207,15.207,0,0,1,16.262.035,15.469,15.469,0,0,1,30.406,15.634Zm-2.534,0A12.925,12.925,0,0,0,16.091,2.565c-.29-.02-.58-.029-.868-.029A12.671,12.671,0,0,0,2.565,16.111c.473,6.816,6.364,11.762,14.01,11.762h7.5a3.805,3.805,0,0,0,3.8-3.8V15.635Z"
                                      transform="translate(-0.001 -0.001)"/>
                            </svg>
                            <h2>سوالات متداول</h2>
                        </div>
                        <div x-data="{faq : 1}"
                             class="list-faq gap-3 mt-5 pr-8 w-full flex flex-col items-center justify-start">
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
        </section>

        {{--s-support--}}

        {{--s-blogs--}}
        <section class="s-blogs">
            <div class="prs-container">
                <div class="p-blogs w-full">
                    <div class="show-desktop">
                        <div class="row-title w-full flex justify-between items-end">
                            <div style="width: 10%"></div>
                            <div class="title-website-col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                     viewBox="0 0 30.405 30.404">
                                    <path id="fi-rr-comment-quote"
                                          d="M13.936,12.035V16.47a5.073,5.073,0,0,1-5.068,5.068,1.267,1.267,0,1,1,0-2.534A2.536,2.536,0,0,0,11.4,16.47H9.5a1.9,1.9,0,0,1-1.9-1.9v-1.9a2.533,2.533,0,0,1,2.534-2.534h1.9A1.9,1.9,0,0,1,13.936,12.035Zm6.968-1.9H19a2.533,2.533,0,0,0-2.534,2.534v1.9a1.9,1.9,0,0,0,1.9,1.9h1.9A2.536,2.536,0,0,1,17.737,19a1.267,1.267,0,1,0,0,2.534A5.073,5.073,0,0,0,22.8,16.47V12.035A1.9,1.9,0,0,0,20.9,10.135Zm9.5,5.5v8.438a6.342,6.342,0,0,1-6.335,6.335h-7.5C7.705,30.406.6,24.335.038,16.285A15.207,15.207,0,0,1,16.262.035,15.469,15.469,0,0,1,30.406,15.634Zm-2.534,0A12.925,12.925,0,0,0,16.091,2.565c-.29-.02-.58-.029-.868-.029A12.671,12.671,0,0,0,2.565,16.111c.473,6.816,6.364,11.762,14.01,11.762h7.5a3.805,3.805,0,0,0,3.8-3.8V15.635Z"
                                          transform="translate(-0.001 -0.001)"/>
                                </svg>
                                <h2>وبلاگ آموزشی و اطلاعیه ها</h2>
                            </div>
                            <a href="" class="btn-base-two bg-white text-black border-2 border-black hover:bg-black hover:text-white px-7">
                                مشاهده همه
                            </a>

                        </div>
                    </div>
                    <div class="show-mobile">
                        <div class="row-title w-full flex justify-center items-center">
                            <div class="title-website-col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                     viewBox="0 0 30.405 30.404">
                                    <path id="fi-rr-comment-quote"
                                          d="M13.936,12.035V16.47a5.073,5.073,0,0,1-5.068,5.068,1.267,1.267,0,1,1,0-2.534A2.536,2.536,0,0,0,11.4,16.47H9.5a1.9,1.9,0,0,1-1.9-1.9v-1.9a2.533,2.533,0,0,1,2.534-2.534h1.9A1.9,1.9,0,0,1,13.936,12.035Zm6.968-1.9H19a2.533,2.533,0,0,0-2.534,2.534v1.9a1.9,1.9,0,0,0,1.9,1.9h1.9A2.536,2.536,0,0,1,17.737,19a1.267,1.267,0,1,0,0,2.534A5.073,5.073,0,0,0,22.8,16.47V12.035A1.9,1.9,0,0,0,20.9,10.135Zm9.5,5.5v8.438a6.342,6.342,0,0,1-6.335,6.335h-7.5C7.705,30.406.6,24.335.038,16.285A15.207,15.207,0,0,1,16.262.035,15.469,15.469,0,0,1,30.406,15.634Zm-2.534,0A12.925,12.925,0,0,0,16.091,2.565c-.29-.02-.58-.029-.868-.029A12.671,12.671,0,0,0,2.565,16.111c.473,6.816,6.364,11.762,14.01,11.762h7.5a3.805,3.805,0,0,0,3.8-3.8V15.635Z"
                                          transform="translate(-0.001 -0.001)"/>
                                </svg>
                                <h2>وبلاگ آموزشی و اطلاعیه ها</h2>
                            </div>
                        </div>
                    </div>
                    <div class="show-desktop w-full">
                        <div class="list-blogs w-full my-6 grid grid-cols-3 gap-2">
                            <div class="thumbnail-blog flex justify-between items-center bg-white w-full">
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
                            <div class="thumbnail-blog flex justify-between items-center bg-white w-full">
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
                            <div class="thumbnail-blog flex justify-between items-center bg-white w-full">
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
                        </div>
                    </div>
                    <div class="show-mobile  w-full"
                         x-data="{
            init() {

                new Swiper($refs.swiper, {
                    slidesPerView: $store.device.mobile ? 1 : 1.5,
                    spaceBetween: 15,
                    pagination:false,
                    navigation: {
                        nextEl: $refs.prevBtn,
                        prevEl: $refs.nextBtn
                    }
                })
            }
        }"

                    >
                        <div class="w-full relative mt-6 flex justify-center items-center gap-2">
                            <button class="absolute z-10  next-button" x-ref="nextBtn">
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
                                            <rect id="Rectangle_1744-2" data-name="Rectangle 1744" width="51"
                                                  height="52"
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
                            <div class="swiper  swiperStore" x-ref="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="thumbnail-blog flex justify-between items-center bg-white w-full">
                                            <div class="img-blog">
                                                <img src="img/view/png/kids-clothes-online-store-0.png" alt="">
                                            </div>
                                            <div class="detail-blog flex flex-col items-start">
                                                <div class="date w-full gap-2 flex justify-start items-center">
                                                    <svg id="Calendar_2" data-name="Calendar 2"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         width="18" height="20" viewBox="0 0 23.63 25.599">
                                                        <path id="Path_839" data-name="Path 839" d="M6,16H9.376"
                                                              transform="translate(-0.213 -0.247)" fill="none"
                                                              stroke="#d4d4d4"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="1.5"/>
                                                        <path id="Path_840" data-name="Path 840" d="M6,20H9.376"
                                                              transform="translate(-0.213 -0.308)" fill="none"
                                                              stroke="#d4d4d4"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="1.5"/>
                                                        <path id="Path_841" data-name="Path 841"
                                                              d="M7.877,0a.985.985,0,0,1,.985.985V2.053c.9-.058,1.878-.084,2.954-.084s2.058.025,2.954.084V.985a.985.985,0,1,1,1.969,0V2.258c4.5.678,6.23,2.7,6.727,7.588q.048.474.081.985.031.475.05.983.035.929.034,1.97T23.6,15.754q-.019.509-.05.984-.033.509-.081.981c-.532,5.235-2.481,7.184-7.715,7.715q-.473.048-.981.081-.476.031-.984.05-.928.035-1.969.034C2.085,25.6,0,23.514,0,13.784q0-1.043.034-1.97.019-.508.05-.983.033-.511.081-.985C.662,4.957,2.4,2.935,6.892,2.258V.985A.985.985,0,0,1,7.877,0ZM6.892,4.252A6.614,6.614,0,0,0,4.045,5.284c-.93.682-1.6,1.879-1.9,4.562H21.484c-.3-2.683-.969-3.88-1.9-4.562a6.614,6.614,0,0,0-2.847-1.032v.671a.985.985,0,1,1-1.969,0V4.028c-.855-.06-1.833-.09-2.954-.09s-2.1.03-2.954.09v.895a.985.985,0,1,1-1.969,0Zm14.3,13.523q.147-.019.288-.034c-.258,2.3-.79,3.492-1.5,4.206s-1.911,1.245-4.206,1.5q.015-.141.034-.288a6.5,6.5,0,0,1,1.628-3.76A6.5,6.5,0,0,1,21.194,17.776Zm-7.34,5.13c-.032.24-.055.471-.072.69-.609.024-1.264.035-1.967.035A26.489,26.489,0,0,1,6.291,23.2a5.138,5.138,0,0,1-2.64-1.251A5.138,5.138,0,0,1,2.4,19.308a26.491,26.491,0,0,1-.431-5.524c0-.7.011-1.359.035-1.969H21.626c.024.61.035,1.265.035,1.969s-.011,1.358-.035,1.967c-.219.017-.45.04-.69.072a8.437,8.437,0,0,0-4.894,2.187A8.437,8.437,0,0,0,13.854,22.905Z"
                                                              transform="translate(0)" fill="#d4d4d4"
                                                              fill-rule="evenodd"/>
                                                    </svg>
                                                    <span class="text-small text-light bolX">۲ اردیبهشت 1403</span>
                                                </div>
                                                <h3 class="title-blog mt-3">
                                                    <a class="bolX text-normal" href="">راه اندازی کسب و کار فروش لباس
                                                        بچه گانه</a>
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
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="thumbnail-blog flex justify-between items-center bg-white w-full">
                                            <div class="img-blog">
                                                <img src="img/view/png/kids-clothes-online-store-0.png" alt="">
                                            </div>
                                            <div class="detail-blog flex flex-col items-start">
                                                <div class="date w-full gap-2 flex justify-start items-center">
                                                    <svg id="Calendar_2" data-name="Calendar 2"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         width="18" height="20" viewBox="0 0 23.63 25.599">
                                                        <path id="Path_839" data-name="Path 839" d="M6,16H9.376"
                                                              transform="translate(-0.213 -0.247)" fill="none"
                                                              stroke="#d4d4d4"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="1.5"/>
                                                        <path id="Path_840" data-name="Path 840" d="M6,20H9.376"
                                                              transform="translate(-0.213 -0.308)" fill="none"
                                                              stroke="#d4d4d4"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="1.5"/>
                                                        <path id="Path_841" data-name="Path 841"
                                                              d="M7.877,0a.985.985,0,0,1,.985.985V2.053c.9-.058,1.878-.084,2.954-.084s2.058.025,2.954.084V.985a.985.985,0,1,1,1.969,0V2.258c4.5.678,6.23,2.7,6.727,7.588q.048.474.081.985.031.475.05.983.035.929.034,1.97T23.6,15.754q-.019.509-.05.984-.033.509-.081.981c-.532,5.235-2.481,7.184-7.715,7.715q-.473.048-.981.081-.476.031-.984.05-.928.035-1.969.034C2.085,25.6,0,23.514,0,13.784q0-1.043.034-1.97.019-.508.05-.983.033-.511.081-.985C.662,4.957,2.4,2.935,6.892,2.258V.985A.985.985,0,0,1,7.877,0ZM6.892,4.252A6.614,6.614,0,0,0,4.045,5.284c-.93.682-1.6,1.879-1.9,4.562H21.484c-.3-2.683-.969-3.88-1.9-4.562a6.614,6.614,0,0,0-2.847-1.032v.671a.985.985,0,1,1-1.969,0V4.028c-.855-.06-1.833-.09-2.954-.09s-2.1.03-2.954.09v.895a.985.985,0,1,1-1.969,0Zm14.3,13.523q.147-.019.288-.034c-.258,2.3-.79,3.492-1.5,4.206s-1.911,1.245-4.206,1.5q.015-.141.034-.288a6.5,6.5,0,0,1,1.628-3.76A6.5,6.5,0,0,1,21.194,17.776Zm-7.34,5.13c-.032.24-.055.471-.072.69-.609.024-1.264.035-1.967.035A26.489,26.489,0,0,1,6.291,23.2a5.138,5.138,0,0,1-2.64-1.251A5.138,5.138,0,0,1,2.4,19.308a26.491,26.491,0,0,1-.431-5.524c0-.7.011-1.359.035-1.969H21.626c.024.61.035,1.265.035,1.969s-.011,1.358-.035,1.967c-.219.017-.45.04-.69.072a8.437,8.437,0,0,0-4.894,2.187A8.437,8.437,0,0,0,13.854,22.905Z"
                                                              transform="translate(0)" fill="#d4d4d4"
                                                              fill-rule="evenodd"/>
                                                    </svg>
                                                    <span class="text-small text-light bolX">۲ اردیبهشت 1403</span>
                                                </div>
                                                <h3 class="title-blog mt-3">
                                                    <a class="bolX text-normal" href="">راه اندازی کسب و کار فروش لباس
                                                        بچه گانه</a>
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
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="thumbnail-blog flex justify-between items-center bg-white w-full">
                                            <div class="img-blog">
                                                <img src="img/view/png/kids-clothes-online-store-0.png" alt="">
                                            </div>
                                            <div class="detail-blog flex flex-col items-start">
                                                <div class="date w-full gap-2 flex justify-start items-center">
                                                    <svg id="Calendar_2" data-name="Calendar 2"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         width="18" height="20" viewBox="0 0 23.63 25.599">
                                                        <path id="Path_839" data-name="Path 839" d="M6,16H9.376"
                                                              transform="translate(-0.213 -0.247)" fill="none"
                                                              stroke="#d4d4d4"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="1.5"/>
                                                        <path id="Path_840" data-name="Path 840" d="M6,20H9.376"
                                                              transform="translate(-0.213 -0.308)" fill="none"
                                                              stroke="#d4d4d4"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="1.5"/>
                                                        <path id="Path_841" data-name="Path 841"
                                                              d="M7.877,0a.985.985,0,0,1,.985.985V2.053c.9-.058,1.878-.084,2.954-.084s2.058.025,2.954.084V.985a.985.985,0,1,1,1.969,0V2.258c4.5.678,6.23,2.7,6.727,7.588q.048.474.081.985.031.475.05.983.035.929.034,1.97T23.6,15.754q-.019.509-.05.984-.033.509-.081.981c-.532,5.235-2.481,7.184-7.715,7.715q-.473.048-.981.081-.476.031-.984.05-.928.035-1.969.034C2.085,25.6,0,23.514,0,13.784q0-1.043.034-1.97.019-.508.05-.983.033-.511.081-.985C.662,4.957,2.4,2.935,6.892,2.258V.985A.985.985,0,0,1,7.877,0ZM6.892,4.252A6.614,6.614,0,0,0,4.045,5.284c-.93.682-1.6,1.879-1.9,4.562H21.484c-.3-2.683-.969-3.88-1.9-4.562a6.614,6.614,0,0,0-2.847-1.032v.671a.985.985,0,1,1-1.969,0V4.028c-.855-.06-1.833-.09-2.954-.09s-2.1.03-2.954.09v.895a.985.985,0,1,1-1.969,0Zm14.3,13.523q.147-.019.288-.034c-.258,2.3-.79,3.492-1.5,4.206s-1.911,1.245-4.206,1.5q.015-.141.034-.288a6.5,6.5,0,0,1,1.628-3.76A6.5,6.5,0,0,1,21.194,17.776Zm-7.34,5.13c-.032.24-.055.471-.072.69-.609.024-1.264.035-1.967.035A26.489,26.489,0,0,1,6.291,23.2a5.138,5.138,0,0,1-2.64-1.251A5.138,5.138,0,0,1,2.4,19.308a26.491,26.491,0,0,1-.431-5.524c0-.7.011-1.359.035-1.969H21.626c.024.61.035,1.265.035,1.969s-.011,1.358-.035,1.967c-.219.017-.45.04-.69.072a8.437,8.437,0,0,0-4.894,2.187A8.437,8.437,0,0,0,13.854,22.905Z"
                                                              transform="translate(0)" fill="#d4d4d4"
                                                              fill-rule="evenodd"/>
                                                    </svg>
                                                    <span class="text-small text-light bolX">۲ اردیبهشت 1403</span>
                                                </div>
                                                <h3 class="title-blog mt-3">
                                                    <a class="bolX text-normal" href="">راه اندازی کسب و کار فروش لباس
                                                        بچه گانه</a>
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
                                    </div>
                                </div>

                            </div>
                            <button class="absolute z-10 left-0 prev-button" x-ref="prevBtn">
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
                                            <rect id="Rectangle_1902-2" data-name="Rectangle 1902" width="51"
                                                  height="52"
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
                </div>
            </div>
        </section>
        {{--s-blogs--}}


        {{--footer--}}
        <footer class="footer mt-14 mb-4">
            <div class="line-footer relative flex justify-center w-100">
                <button onclick="window.scrollTo(0,0)" class="btn-back-to-up absolute">
                    <img width="55" src="img/view/svg/back-to-up.svg" alt="">
                </button>
                <img src="img/view/svg/line-footer.svg" alt="">
            </div>
            <div class="prs-container">
                <div class="p-footer mt-16 w-full flex flex-col">
                    <div class="show-desktop w-full">
                        <div class="top-footer flex items-center justify-between w-full">
                            <div class="box-contact flex flex-col items-center justify-center bg-white">
                                <img width="200" src="img/view/png/New%20Logo%20-%20Font.png" alt="">
                                <div class="list gap-4 mt-8 w-full flex flex-col px-7">
                                    <div class="item w-full gap-2 flex justify-start items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                             viewBox="0 0 22.844 22.799">
                                            <path id="_008-maps" data-name="008-maps"
                                                  d="M13.181,23.3H5.344A5.35,5.35,0,0,1,0,17.956V5.844A5.35,5.35,0,0,1,5.344.5H17.456A5.35,5.35,0,0,1,22.8,5.844v4.5a.891.891,0,0,1-1.781,0v-4.5a3.566,3.566,0,0,0-3.562-3.562H5.344A3.566,3.566,0,0,0,1.781,5.844V17.956a3.566,3.566,0,0,0,3.562,3.562h7.837A.891.891,0,0,1,13.181,23.3Zm-1.1-14.958,2.759-2.759a.891.891,0,0,0-1.26-1.259L10.817,7.082a.891.891,0,0,1-1.262,0L6.822,4.326A.891.891,0,0,0,5.558,5.58L8.29,8.334a2.654,2.654,0,0,0,1.891.79h.005A2.654,2.654,0,0,0,12.076,8.341ZM5.132,15.286l1.913-1.94a2.681,2.681,0,0,0-.007-3.759L5.129,7.665A.891.891,0,0,0,3.866,8.92l1.909,1.922a.894.894,0,0,1,0,1.253l-1.913,1.94a.891.891,0,1,0,1.268,1.251ZM19.939,22.4c1.927-2.447,2.9-4.313,2.9-5.547a4.765,4.765,0,1,0-9.529,0c0,1.234.977,3.1,2.9,5.547a2.368,2.368,0,0,0,3.72,0Zm-.7-.551h0Zm1.823-5c0,.6-.663,2.084-2.523,4.445a.584.584,0,0,1-.922,0C15.758,18.934,15.1,17.45,15.1,16.85a2.984,2.984,0,1,1,5.967,0ZM5.388,19.737a.893.893,0,0,1-.63-1.52L17.717,5.258a.891.891,0,1,1,1.26,1.259L6.018,19.476A.888.888,0,0,1,5.388,19.737Zm11.578-2.984a1.113,1.113,0,1,0,1.113-1.113A1.113,1.113,0,0,0,16.966,16.754Z"
                                                  transform="translate(0 -0.5)" fill="#181818"/>
                                        </svg>
                                        <span class="text-small">تهران، خ سهروردی جنوبی، خ ملک، پ۱۲، واحد۷</span>
                                    </div>
                                    <div class="item w-full gap-2 flex justify-start items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                             viewBox="0 0 22.84 22.859">
                                            <path id="_003-telephone" data-name="003-telephone"
                                                  d="M14.978,22.86C5.819,22.791-4.911,9.446,2.929,1.6c.279-.283.573-.556.876-.81A3.329,3.329,0,0,1,8.3.98l.011.012,1.51,1.569A3.274,3.274,0,0,1,8.75,7.879a7.21,7.21,0,0,0-1.193.589c-.832.847-1.361,2.224,1.75,5.34,1.009,1.011,2.5,2.355,3.828,2.355a2.114,2.114,0,0,0,1.506-.694,6.937,6.937,0,0,0,.552-1.142,3.267,3.267,0,0,1,5.321-1.1l1.551,1.5.011.011a3.335,3.335,0,0,1,.2,4.492c-.237.284-.49.561-.752.824A9.058,9.058,0,0,1,14.978,22.86ZM5.955,1.789a1.555,1.555,0,0,0-1,.368c-.26.218-.512.451-.751.694C.022,7.1,2.319,12.9,6.335,16.866c3.98,3.96,9.75,6.125,13.924,1.931.225-.225.442-.463.645-.706a1.542,1.542,0,0,0-.087-2.082l-1.55-1.5-.011-.011a1.47,1.47,0,0,0-2.406.494,6.881,6.881,0,0,1-.919,1.713,3.876,3.876,0,0,1-2.8,1.244c-1.965,0-3.753-1.539-5.092-2.879C6.013,13.121,3.666,9.8,6.316,7.184a7.09,7.09,0,0,1,1.76-.958,1.477,1.477,0,0,0,.48-2.409L8.545,3.8,7.036,2.236a1.53,1.53,0,0,0-1.081-.448ZM22.16,10.673a.893.893,0,0,1-.888-.813,8.91,8.91,0,0,0-8.078-8.078A.893.893,0,0,1,13.354,0a10.773,10.773,0,0,1,9.7,9.7.893.893,0,0,1-.809.969C22.214,10.672,22.187,10.673,22.16,10.673Zm-6.955,0a.893.893,0,0,0,.564-1.129,3.612,3.612,0,0,0-2.2-2.255.893.893,0,0,0-.595,1.683,1.814,1.814,0,0,1,1.1,1.137.892.892,0,0,0,1.129.564Zm3.507-.008a.893.893,0,0,0,.757-1.01A7.192,7.192,0,0,0,13.4,3.585a.893.893,0,0,0-.253,1.767A5.4,5.4,0,0,1,17.7,9.907a.893.893,0,0,0,1.01.757Z"
                                                  transform="translate(-0.214 -0.001)" fill="#181818"/>
                                        </svg>
                                        <p class="text-small text-base bolX">تلفن گویا باهوش : ۷۱۰۵۷۵۵۹-۰۲۱</p>
                                    </div>
                                    <div class="item w-full gap-2 flex justify-start items-center">
                                        <svg id="Time" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                             viewBox="0 0 24 24">
                                            <path id="Path_1170" data-name="Path 1170"
                                                  d="M1,12a27.833,27.833,0,0,0,.462,5.827A6.193,6.193,0,0,0,3,21a6.193,6.193,0,0,0,3.172,1.54A27.838,27.838,0,0,0,12,23a27.838,27.838,0,0,0,5.827-.462A6.193,6.193,0,0,0,21,21a6.193,6.193,0,0,0,1.54-3.172A27.838,27.838,0,0,0,23,12a27.838,27.838,0,0,0-.462-5.827A6.193,6.193,0,0,0,21,3a6.193,6.193,0,0,0-3.172-1.54A27.833,27.833,0,0,0,12,1a27.833,27.833,0,0,0-5.827.462A6.193,6.193,0,0,0,3,3a6.193,6.193,0,0,0-1.54,3.172A27.833,27.833,0,0,0,1,12Z"
                                                  fill="none" stroke="#212135" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="2"/>
                                            <path id="Path_1171" data-name="Path 1171" d="M12,6v5c0,1,0,1,1,1h5"
                                                  fill="none"
                                                  stroke="#212135" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"/>
                                        </svg>

                                        <span class="text-small">ساعت کاری : شنبه تا چهارشنبه از ساعت ۱۰ الی ۱۸</span>
                                    </div>
                                    <div class="item w-full gap-2 flex justify-start items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18"
                                             viewBox="0 0 24 22">
                                            <g id="Message_2" data-name="Message 2" transform="translate(1 1)">
                                                <path id="Path_1026" data-name="Path 1026" d="M8,16h8"
                                                      transform="translate(-1 -1)" fill="none" stroke="#181818"
                                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                <path id="Path_1027" data-name="Path 1027"
                                                      d="M1,11c0,4.556.563,6.87,1.97,8.16a6.459,6.459,0,0,0,3.186,1.415A30.377,30.377,0,0,0,12,21a30.376,30.376,0,0,0,5.844-.425A6.458,6.458,0,0,0,21.03,19.16C22.438,17.87,23,15.556,23,11s-.562-6.87-1.97-8.16a6.459,6.459,0,0,0-3.186-1.415A30.383,30.383,0,0,0,12,1a23.222,23.222,0,0,0-7.112.762,4.6,4.6,0,0,0-3,2.64C1.253,5.837,1,7.92,1,11Z"
                                                      transform="translate(-1 -1)" fill="none" stroke="#181818"
                                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            </g>
                                        </svg>

                                        <h4 class="text-normal bolX"> Bahooosh.Site@Gmail.Com</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="left">
                                <div class="detail-footer-top w-full flex flex-col items-start">
                                    <h4 class="text-md bolX">درباره فروشگاه ساز باهوش بدانید :</h4>
                                    <p class="text-gray text-small text-justify mt-4">
                                        ما در باهوش به کسب‌وکارهایی که به دنبال حضور حرفه‌ای در فضای آنلاین هستند کمک
                                        می‌کنیم تا با سرعت و سادگی فروشگاه اینترنتی خود را راه‌اندازی کنند. سیستم هوشمند
                                        و
                                        پیشرفته فروشگاه‌ساز باهوش به شما امکان می‌دهد بدون هیچ‌گونه پیچیدگی، فروشگاه
                                        ایده‌آل
                                        خود را ایجاد کنید و به دنیای فروش آنلاین وارد شوید.
                                    </p>
                                </div>
                                <div class="detail-footer-bottom mt-6 w-full flex justify-between items-center">
                                    <div class="right-col w-2/3 flex flex-col">
                                    <span
                                        class="text-small bolX text-gray">شبکه‌های اجتماعی باهوش را دنبال کنید :)</span>
                                        <div class="socials gap-3 mt-3 w-full flex justify-start items-center">
                                            <div class="aparat bg-white flex items-center justify-center">
                                                <img width="20" src="img/view/png/aparat.png" alt="">
                                            </div>
                                            <div class="telegram relative bg-white flex items-center justify-center">
                                                <img class="absolute right-2" width="20"
                                                     src="img/view/png/telegram-logo.png" alt="">
                                                <span class="text-small">@MyBahooosh</span>
                                            </div>
                                            <div class="instagram relative bg-white flex items-center justify-center">
                                                <img class="absolute right-2" width="20"
                                                     src="img/view/png/instagram-logo.png" alt="">
                                                <span class="text-small">@MyBahooosh</span>
                                            </div>
                                        </div>
                                        <div class="p-links mt-5 flex w-full justify-start items-center">
                                            <h3 class="text-md bolX">دسترسی سریع :</h3>
                                            <div class="links mr-4 flex gap-4 justify-start items-center">
                                                <a class="text-gray text-small" href="">فروشگاه ساز</a>
                                                <a class="text-gray text-small" href="">درباره ما </a>
                                                <a class="text-gray text-small" href="">تماس باما</a>
                                                <a class="text-gray text-small" href="">تعرفه ها</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="left-col flex justify-end items-center gap-2">
                                        <div class="box-enamad flex justify-center items-center">
                                            <img width="70" src="img/view/png/enmad-1.png" alt="">
                                        </div>
                                        <div class="box-enamad flex justify-center items-center">
                                            <img width="70" src="img/view/png/enamad-2.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="show-mobile">
                        <div class="top-footer flex flex-col items-center justify-between w-full">
                            <div class="box-contact w-full flex flex-col items-center justify-center bg-white">
                                <img width="200" src="img/view/png/New%20Logo%20-%20Font.png" alt="">
                                <div class="list gap-4 mt-8 w-full flex flex-col px-7">
                                    <div class="item w-full gap-2 flex justify-start items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                             viewBox="0 0 22.844 22.799">
                                            <path id="_008-maps" data-name="008-maps"
                                                  d="M13.181,23.3H5.344A5.35,5.35,0,0,1,0,17.956V5.844A5.35,5.35,0,0,1,5.344.5H17.456A5.35,5.35,0,0,1,22.8,5.844v4.5a.891.891,0,0,1-1.781,0v-4.5a3.566,3.566,0,0,0-3.562-3.562H5.344A3.566,3.566,0,0,0,1.781,5.844V17.956a3.566,3.566,0,0,0,3.562,3.562h7.837A.891.891,0,0,1,13.181,23.3Zm-1.1-14.958,2.759-2.759a.891.891,0,0,0-1.26-1.259L10.817,7.082a.891.891,0,0,1-1.262,0L6.822,4.326A.891.891,0,0,0,5.558,5.58L8.29,8.334a2.654,2.654,0,0,0,1.891.79h.005A2.654,2.654,0,0,0,12.076,8.341ZM5.132,15.286l1.913-1.94a2.681,2.681,0,0,0-.007-3.759L5.129,7.665A.891.891,0,0,0,3.866,8.92l1.909,1.922a.894.894,0,0,1,0,1.253l-1.913,1.94a.891.891,0,1,0,1.268,1.251ZM19.939,22.4c1.927-2.447,2.9-4.313,2.9-5.547a4.765,4.765,0,1,0-9.529,0c0,1.234.977,3.1,2.9,5.547a2.368,2.368,0,0,0,3.72,0Zm-.7-.551h0Zm1.823-5c0,.6-.663,2.084-2.523,4.445a.584.584,0,0,1-.922,0C15.758,18.934,15.1,17.45,15.1,16.85a2.984,2.984,0,1,1,5.967,0ZM5.388,19.737a.893.893,0,0,1-.63-1.52L17.717,5.258a.891.891,0,1,1,1.26,1.259L6.018,19.476A.888.888,0,0,1,5.388,19.737Zm11.578-2.984a1.113,1.113,0,1,0,1.113-1.113A1.113,1.113,0,0,0,16.966,16.754Z"
                                                  transform="translate(0 -0.5)" fill="#181818"/>
                                        </svg>
                                        <span class="text-small">تهران، خ سهروردی جنوبی، خ ملک، پ۱۲، واحد۷</span>
                                    </div>
                                    <div class="item w-full gap-2 flex justify-start items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                             viewBox="0 0 22.84 22.859">
                                            <path id="_003-telephone" data-name="003-telephone"
                                                  d="M14.978,22.86C5.819,22.791-4.911,9.446,2.929,1.6c.279-.283.573-.556.876-.81A3.329,3.329,0,0,1,8.3.98l.011.012,1.51,1.569A3.274,3.274,0,0,1,8.75,7.879a7.21,7.21,0,0,0-1.193.589c-.832.847-1.361,2.224,1.75,5.34,1.009,1.011,2.5,2.355,3.828,2.355a2.114,2.114,0,0,0,1.506-.694,6.937,6.937,0,0,0,.552-1.142,3.267,3.267,0,0,1,5.321-1.1l1.551,1.5.011.011a3.335,3.335,0,0,1,.2,4.492c-.237.284-.49.561-.752.824A9.058,9.058,0,0,1,14.978,22.86ZM5.955,1.789a1.555,1.555,0,0,0-1,.368c-.26.218-.512.451-.751.694C.022,7.1,2.319,12.9,6.335,16.866c3.98,3.96,9.75,6.125,13.924,1.931.225-.225.442-.463.645-.706a1.542,1.542,0,0,0-.087-2.082l-1.55-1.5-.011-.011a1.47,1.47,0,0,0-2.406.494,6.881,6.881,0,0,1-.919,1.713,3.876,3.876,0,0,1-2.8,1.244c-1.965,0-3.753-1.539-5.092-2.879C6.013,13.121,3.666,9.8,6.316,7.184a7.09,7.09,0,0,1,1.76-.958,1.477,1.477,0,0,0,.48-2.409L8.545,3.8,7.036,2.236a1.53,1.53,0,0,0-1.081-.448ZM22.16,10.673a.893.893,0,0,1-.888-.813,8.91,8.91,0,0,0-8.078-8.078A.893.893,0,0,1,13.354,0a10.773,10.773,0,0,1,9.7,9.7.893.893,0,0,1-.809.969C22.214,10.672,22.187,10.673,22.16,10.673Zm-6.955,0a.893.893,0,0,0,.564-1.129,3.612,3.612,0,0,0-2.2-2.255.893.893,0,0,0-.595,1.683,1.814,1.814,0,0,1,1.1,1.137.892.892,0,0,0,1.129.564Zm3.507-.008a.893.893,0,0,0,.757-1.01A7.192,7.192,0,0,0,13.4,3.585a.893.893,0,0,0-.253,1.767A5.4,5.4,0,0,1,17.7,9.907a.893.893,0,0,0,1.01.757Z"
                                                  transform="translate(-0.214 -0.001)" fill="#181818"/>
                                        </svg>
                                        <p class="text-small text-base bolX">تلفن گویا باهوش : ۷۱۰۵۷۵۵۹-۰۲۱</p>
                                    </div>
                                    <div class="item w-full gap-2 flex justify-start items-center">
                                        <svg id="Time" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                             viewBox="0 0 24 24">
                                            <path id="Path_1170" data-name="Path 1170"
                                                  d="M1,12a27.833,27.833,0,0,0,.462,5.827A6.193,6.193,0,0,0,3,21a6.193,6.193,0,0,0,3.172,1.54A27.838,27.838,0,0,0,12,23a27.838,27.838,0,0,0,5.827-.462A6.193,6.193,0,0,0,21,21a6.193,6.193,0,0,0,1.54-3.172A27.838,27.838,0,0,0,23,12a27.838,27.838,0,0,0-.462-5.827A6.193,6.193,0,0,0,21,3a6.193,6.193,0,0,0-3.172-1.54A27.833,27.833,0,0,0,12,1a27.833,27.833,0,0,0-5.827.462A6.193,6.193,0,0,0,3,3a6.193,6.193,0,0,0-1.54,3.172A27.833,27.833,0,0,0,1,12Z"
                                                  fill="none" stroke="#212135" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="2"/>
                                            <path id="Path_1171" data-name="Path 1171" d="M12,6v5c0,1,0,1,1,1h5"
                                                  fill="none"
                                                  stroke="#212135" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"/>
                                        </svg>

                                        <span class="text-small">ساعت کاری : شنبه تا چهارشنبه از ساعت ۱۰ الی ۱۸</span>
                                    </div>
                                    <div class="item w-full gap-2 flex justify-start items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18"
                                             viewBox="0 0 24 22">
                                            <g id="Message_2" data-name="Message 2" transform="translate(1 1)">
                                                <path id="Path_1026" data-name="Path 1026" d="M8,16h8"
                                                      transform="translate(-1 -1)" fill="none" stroke="#181818"
                                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                <path id="Path_1027" data-name="Path 1027"
                                                      d="M1,11c0,4.556.563,6.87,1.97,8.16a6.459,6.459,0,0,0,3.186,1.415A30.377,30.377,0,0,0,12,21a30.376,30.376,0,0,0,5.844-.425A6.458,6.458,0,0,0,21.03,19.16C22.438,17.87,23,15.556,23,11s-.562-6.87-1.97-8.16a6.459,6.459,0,0,0-3.186-1.415A30.383,30.383,0,0,0,12,1a23.222,23.222,0,0,0-7.112.762,4.6,4.6,0,0,0-3,2.64C1.253,5.837,1,7.92,1,11Z"
                                                      transform="translate(-1 -1)" fill="none" stroke="#181818"
                                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            </g>
                                        </svg>

                                        <h4 class="text-normal bolX"> Bahooosh.Site@Gmail.Com</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="left w-full">
                                <div class="detail-footer-top w-full flex flex-col items-center mt-7">
                                    <h4 class="text-md bolX">درباره فروشگاه ساز باهوش بدانید :</h4>
                                    <p class="text-gray text-small text-justify mt-4">
                                        ما در باهوش به کسب‌وکارهایی که به دنبال حضور حرفه‌ای در فضای آنلاین هستند کمک
                                        می‌کنیم تا با سرعت و سادگی فروشگاه اینترنتی خود را راه‌اندازی کنند. سیستم هوشمند
                                        و
                                        پیشرفته فروشگاه‌ساز باهوش به شما امکان می‌دهد بدون هیچ‌گونه پیچیدگی، فروشگاه
                                        ایده‌آل
                                        خود را ایجاد کنید و به دنیای فروش آنلاین وارد شوید.
                                    </p>
                                </div>
                                <div
                                    class="detail-footer-bottom flex-col mt-6 w-full flex justify-between items-center">
                                    <div class="right-col w-full flex items-center flex-col">
                                    <span
                                        class="text-small bolX text-gray">شبکه‌های اجتماعی باهوش را دنبال کنید :)</span>
                                        <div class="flex  w-full justify-between gap-2">
                                            <div class="left-col flex w-1/2 justify-end items-center gap-2">
                                                <div class="box-enamad flex justify-center items-center">
                                                    <img width="70" src="img/view/png/enmad-1.png" alt="">
                                                </div>
                                                <div class="box-enamad flex justify-center items-center">
                                                    <img width="70" src="img/view/png/enamad-2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="socials gap-2 w-1/2 mt-3 flex flex-col">
                                                <div
                                                    class="telegram relative bg-white flex items-center justify-center">
                                                    <img class="absolute right-2" width="20"
                                                         src="img/view/png/aparat.png" alt="">
                                                    <span class="text-small">@MyBahooosh</span>
                                                </div>
                                                <div
                                                    class="telegram relative bg-white flex items-center justify-center">
                                                    <img class="absolute right-2" width="20"
                                                         src="img/view/png/telegram-logo.png" alt="">
                                                    <span class="text-small">@MyBahooosh</span>
                                                </div>
                                                <div
                                                    class="instagram relative bg-white flex items-center justify-center">
                                                    <img class="absolute right-2" width="20"
                                                         src="img/view/png/instagram-logo.png" alt="">
                                                    <span class="text-small">@MyBahooosh</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="p-links mt-5 flex flex-col w-full justify-start items-center">
                                        <h3 class="text-md bolX">دسترسی سریع :</h3>
                                        <div class="links pt-6 grid grid-cols-2 gap-4">
                                            <a class="text-gray text-small mx-3" href="">فروشگاه ساز</a>
                                            <a class="text-gray text-small mx-3" href="">درباره ما </a>
                                            <a class="text-gray text-small mx-3" href="">تماس باما</a>
                                            <a class="text-gray text-small mx-3" href="">تعرفه ها</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-footer mt-7 flex items-center justify-between w-full">
                        <div class="start flex pt-4 flex-col items-start">
                            <span class="text-base text-small bolX">© کپی رایت ۱۴۰۱-۱۴۰۳.</span>
                            <span style="color: #272E37" class="text-small">تمامی حقوق مادی و معنوی این وبسایت متعلق به آژانس خلاقیت پارناس می باشد و هرگونه کپی برداری پیگرد قانونی دارد.</span>
                        </div>
                        <a class="pt-4" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="40" viewBox="0 0 57.249 48.922">
                                <g id="Layer_2" data-name="Layer 2" transform="translate(1.755 1.97)">
                                    <g id="Layer_1" data-name="Layer 1" transform="translate(0 0)">
                                        <path id="Path_1344" data-name="Path 1344"
                                              d="M53.9,51.278,37.032,21.66,15.31,59.421"
                                              transform="translate(-10.004 -13.835)" fill="none" stroke="#d4d4d4"
                                              stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/>
                                        <path id="Path_1345" data-name="Path 1345"
                                              d="M49.149,62.09h9.725l-6.21-11.11L42.19,69.4"
                                              transform="translate(-25.636 -30.886)" fill="none" stroke="#d4d4d4"
                                              stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/>
                                        <path id="Path_1351" data-name="Path 1351"
                                              d="M50.22,40.4H84.044L61.845,2.96,59.1,7.655,74.6,34.164h-3.95"
                                              transform="translate(-30.306 -2.96)" fill="none" stroke="#d4d4d4"
                                              stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/>
                                        <path id="Path_1352" data-name="Path 1352"
                                              d="M8.869,40.4H2.63L24.825,2.96l2.749,4.7L12.066,34.164"
                                              transform="translate(-2.63 -2.96)" fill="none" stroke="#d4d4d4"
                                              stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        {{--footer--}}

    </div>
</x-layouts.app>
