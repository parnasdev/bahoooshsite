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
                            تماس با ما و پشتیبانی
                        </h1>
                        <span class="text-gray-s text-small max-[600px]:w-full w-2/5 text-center medium">
                      تیم باهوش از روز شنبه تا چهارشنبه - ساعت ۱۰ صبح الی ۱۸ عصر در خدمت شما می باشد.
همچنین جهت ارتباط با پشتیبانی فنی و راهنمایی در مورد کار با سیستم از طریق تلگرام در ارتباط باشید.
                        </span>
                        <button
                            class="btn-base bg-white text-black hover:bg-black hover:text-white border-2 border-black mt-2 w-64 gap-5">
                            درباره باهوش
                        </button>
                    </div>
                    <div class="border-row-one relative flex justify-content-end mt-20 mb-12 border-t-2 border-black">
                        <img width="85" src="/img/view/png/contactus.png" alt="" class="img-left absolute">
                        <img width="40" src="img/view/png/img-arrow-right.png" alt=""
                             class="img-right top-0 right-2 absolute">
                    </div>
                </div>
                <div class="row-two sm:mt-28 max-[700px]:gap-4 flex max-[700px]:flex-col justify-between items-start">
                    <div class="box-start w-1/2 max-[700px]:w-full flex flex-col items-start">
                        <form class="form py-5 flex flex-wrap w-full gap-3" action="">
                            <div x-data="{inp:false}" :class="inp===true? 'active-border':'deactive-border'"
                                 class="inp-full gap-3 px-3 flex flex-col items-start justify-center w-full bg-white">
                                <label @click="inp=true ; $nextTick(() => { $refs.input.focus(); })"
                                       :class="inp === true ? 'labelUp':'labeDown bolX'"
                                       class="text-light p-x-2 text-normal " for="">نام و نام خانوادگی *</label>
                                <input x-ref="input" class="mt-3 text-normal" style="display: none"
                                       @click.outside="$el.value.length > 1 ? inp= true :inp=false" x-show="inp"
                                       x-transition type="text">
                            </div>
                            <div class=" w-full grid grid-cols-2 gap-2">
                                <div x-data="{inp:false}" :class="inp===true? 'active-border':'deactive-border'"
                                     class="inp-full gap-3 px-3 flex flex-col items-start justify-center w-full bg-white">
                                    <label @click="inp=true ; $nextTick(() => { $refs.input.focus(); })"
                                           :class="inp === true ? 'labelUp':'labeDown bolX'"
                                           class="text-light p-x-2 text-normal " for="">شماره همراه *</label>
                                    <input x-ref="input" class="mt-3 text-normal" style="display: none"
                                           @click.outside="$el.value.length > 1 ? inp= true :inp=false" x-show="inp"
                                           x-transition type="text">
                                </div>
                                <div x-data="{inp:false}" :class="inp===true? 'active-border':'deactive-border'"
                                     class="inp-full gap-3 px-3 flex flex-col items-start justify-center w-full bg-white">
                                    <label @click="inp=true ; $nextTick(() => { $refs.input.focus(); })"
                                           :class="inp === true ? 'labelUp':'labeDown bolX'"
                                           class="text-light p-x-2 text-normal " for="">ایمیل (اختیاری)</label>
                                    <input x-ref="input" class="mt-3 text-normal" style="display: none"
                                           @click.outside="$el.value.length > 1 ? inp= true :inp=false" x-show="inp"
                                           x-transition type="text">
                                </div>

                            </div>
                            {{--singleSelect--}}
                            <div
                                class="w-full cursor-pointer relative bg-white selectBase flex flex-col px-2  rounded-[10px]"
                                x-data="{select:false , text: 'انتخاب کنید' }">
                                <div @click="select=true"
                                     class="head w-full h-[50px] flex justify-between items-center">
                                    <h4 x-text="text" class="text-light bolX text-[13px]"></h4>
                                    <svg class="transition ease-in-out" :class="select ? 'rotate-180 ':''"
                                         xmlns="http://www.w3.org/2000/svg" width="13" height="7"
                                         viewBox="0 0 16.854 8.635">
                                        <path id="fi-rr-angle-small-right"
                                              d="M16.683,10.874,11.158,5.349a1.2,1.2,0,1,0-1.7,1.709L15,12.572a1.2,1.2,0,0,1,0,1.709L9.46,19.794a1.2,1.2,0,0,0,1.7,1.709l5.525-5.525A3.611,3.611,0,0,0,16.683,10.874Z"
                                              transform="translate(21.853 -9.104) rotate(90)"/>
                                    </svg>
                                </div>
                                <div class="absolute top-[55px] z-10 right-0  w-full" style="display: none"
                                     @click.outside="select=false"
                                     x-collapse.duration.500ms x-show="select">
                                    <div
                                        class="w-full flex flex-col shadow-md overflow-y-auto bg-white h-[270px] rounded-[10px]">
                                        <template x-for="item in 4">
                                            <div @click="select=false"
                                                 class="item w-full px-3 h-[60px] border-b-2 border-gray-200 flex items-center justify-between">
                                                <h4 x-model="text" class="text-[13px] text-gray medium  m-0 p-0">آیتم
                                                    1</h4>
                                                <img class="w-[45px] h-[45px] rounded-[50%]"
                                                     src="/img/view/png/square-aprat.png" alt="">
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </div>
                            {{--singleSelect--}}

                            {{--multiSelect--}}
                            <div
                                class="w-full cursor-pointer relative bg-white selectBase flex flex-col px-2  rounded-[10px]"
                                x-data="{multiSelect:false}">
                                <div @click="multiSelect=!multiSelect"
                                     class="head w-full h-[50px] flex justify-between items-center">
                                    <h4 class="text-light bolX text-[13px]">چند تا انتخاب کنید</h4>
                                    <svg class="transition ease-in-out" :class="select ? 'rotate-180 ':''"
                                         xmlns="http://www.w3.org/2000/svg" width="13" height="7"
                                         viewBox="0 0 16.854 8.635">
                                        <path id="fi-rr-angle-small-right"
                                              d="M16.683,10.874,11.158,5.349a1.2,1.2,0,1,0-1.7,1.709L15,12.572a1.2,1.2,0,0,1,0,1.709L9.46,19.794a1.2,1.2,0,0,0,1.7,1.709l5.525-5.525A3.611,3.611,0,0,0,16.683,10.874Z"
                                              transform="translate(21.853 -9.104) rotate(90)"/>
                                    </svg>
                                </div>
                                <div class="absolute top-[55px] z-10 right-0  w-full" style="display: none"
                                     @click.outside="multiSelect=false"
                                     x-collapse.duration.500ms x-show="multiSelect">
                                    <div
                                        class="w-full flex flex-col shadow-md overflow-y-auto bg-white h-[270px] rounded-[10px]">
                                        <div
                                            class="item w-full px-3 h-[50px] border-b-2 border-gray-200 flex items-center justify-between">
                                            <div class="flex items-center">
                                                <input id="default-checkbox" type="checkbox" value=""
                                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="default-checkbox"
                                                       class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">ایتم
                                                    انتخابی 1</label>
                                            </div>
                                        </div>
                                        <div
                                            class="item w-full px-3 h-[50px] border-b-2 border-gray-200 flex items-center justify-between">
                                            <div class="flex items-center">
                                                <input id="default-checkbox" type="checkbox" value=""
                                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="default-checkbox"
                                                       class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">ایتم
                                                    انتخابی 1</label>
                                            </div>
                                        </div>
                                        <div
                                            class="item w-full px-3 h-[50px] border-b-2 border-gray-200 flex items-center justify-between">
                                            <div class="flex items-center">
                                                <input id="default-checkbox" type="checkbox" value=""
                                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="default-checkbox"
                                                       class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">ایتم
                                                    انتخابی 1</label>
                                            </div>
                                        </div>
                                        <div
                                            class="item w-full px-3 h-[50px] border-b-2 border-gray-200 flex items-center justify-between">
                                            <div class="flex items-center">
                                                <input id="default-checkbox" type="checkbox" value=""
                                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="default-checkbox"
                                                       class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">ایتم
                                                    انتخابی 1</label>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            {{--multiSelect--}}

                            {{--uploadFile--}}
                            <button class="uploadFile w-full h-[150px] flex items-center gap-4 justify-center my-[1rem] cursor-pointer rounded-[10px]">
                                <h2 class="text-light bolX max-[600px]:text-[16px] text-[18px]">بارگزاری فایل</h2>
                                <svg class="w-[26px] h-[26px]  max-[600px]:w-[20px] max-[600px]:h-[20px]" fill="#d4d4d4"  version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     viewBox="0 0 490.955 490.955" xml:space="preserve">
<path id="XMLID_448_" d="M445.767,308.42l-53.374-76.49v-20.656v-11.366V97.241c0-6.669-2.604-12.94-7.318-17.645L312.787,7.301
	C308.073,2.588,301.796,0,295.149,0H77.597C54.161,0,35.103,19.066,35.103,42.494V425.68c0,23.427,19.059,42.494,42.494,42.494
	h159.307h39.714c1.902,2.54,3.915,5,6.232,7.205c10.033,9.593,23.547,15.576,38.501,15.576c26.935,0-1.247,0,34.363,0
	c14.936,0,28.483-5.982,38.517-15.576c11.693-11.159,17.348-25.825,17.348-40.29v-40.06c16.216-3.418,30.114-13.866,37.91-28.811
	C459.151,347.704,457.731,325.554,445.767,308.42z M170.095,414.872H87.422V53.302h175.681v46.752
	c0,16.655,13.547,30.209,30.209,30.209h46.76v66.377h-0.255v0.039c-17.685-0.415-35.529,7.285-46.934,23.46l-61.586,88.28
	c-11.965,17.134-13.387,39.284-3.722,57.799c7.795,14.945,21.692,25.393,37.91,28.811v19.842h-10.29H170.095z M410.316,345.771
	c-2.03,3.866-5.99,6.271-10.337,6.271h-0.016h-32.575v83.048c0,6.437-5.239,11.662-11.659,11.662h-0.017H321.35h-0.017
	c-6.423,0-11.662-5.225-11.662-11.662v-83.048h-32.574h-0.016c-4.346,0-8.308-2.405-10.336-6.271
	c-2.012-3.866-1.725-8.49,0.783-12.07l61.424-88.064c2.189-3.123,5.769-4.984,9.57-4.984h0.017c3.802,0,7.38,1.861,9.568,4.984
	l61.427,88.064C412.04,337.28,412.328,341.905,410.316,345.771z"/>
</svg>
                            </button>
                            {{--uploadFile--}}

                            <div class="textarea w-full">
                                <textarea class="w-full" placeholder="متن پیام" name="" id="" cols="30"
                                          rows="10"></textarea>
                            </div>
                            <div class="flex w-full justify-center">
                                <button
                                    class="btn-base bg-black text-white hover:bg-white hover:text-black border-2 border-black mt-1 w-48 gap-5">
                                    ثبت
                                </button>
                            </div>
                        </form>
                    </div>
                    <div
                        class="box-img md:mr-6 w-1/2 max-[700px]:w-full bg-white flex justify-center items-center relative overflow-hidden">
                        <h1>Cover image ...</h1>
                        {{--                        <img class="w-full h-full object-cover" src="" alt="">--}}
                    </div>
                </div>
                <div class="row-three w-full">
                    <div class="show-desktop w-full">
                        <div class="w-full mt-12 grid lg:grid-cols-4 sm:grid-cols-2 max-[700px]:grid-cols-1 gap-2">
                            <div class="box-building  mt-8  bg-white  w-full">
                                <div class="floating-box flex flex-col items-center w-full ">
                                    <img class="img" width="80" src="/img/view/png/headphone.png"
                                         alt="">
                                    <h3 class="text-base bolX mt-4">ارتباط تلفنی (تلفن گویا)</h3>
                                    <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                        جهت ارتباط تلفنی، با شماره زیر در تماس باشید :
                                        ۰۲۱-۷۱۰۵۷۵۵۹
                                </span>
                                </div>

                            </div>
                            <div class="box-building  mt-8  bg-white  w-full">
                                <div class="floating-box flex flex-col items-center w-full ">
                                    <img class="img" width="80" src="/img/view/png/square-telgeram.png"
                                         alt="">
                                    <h3 class="text-base bolX mt-4">کانال تلگرام و پشتیبان فنی</h3>
                                    <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                  آموزش ویدیویی پنل کاربری + اطلاع رسانی ها :
                                      @mybahooosh
                                    </span>
                                </div>

                            </div>
                            <div class="box-building  mt-8  bg-white  w-full">
                                <div class="floating-box flex flex-col items-center w-full ">
                                    <img class="img" width="80" src="/img/view/png/square-instagram.png"
                                         alt="">
                                    <h3 class="text-base bolX mt-4">صفحه اینستاگرام</h3>
                                    <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                  آشنایی با باهوش و ریلز های جذاب :
                                        <br>
                                      @mybahooosh
                                    </span>
                                </div>

                            </div>
                            <div class="box-building  mt-8  bg-white  w-full">
                                <div class="floating-box flex flex-col items-center w-full ">
                                    <img class="img" width="80" src="/img/view/png/square-aprat.png"
                                         alt="">
                                    <h3 class="text-base bolX mt-4">کانال آپارات </h3>
                                    <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                  مشاهده آموزش های مدیریت فروشگاه :
                                      @mybahooosh
                                    </span>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="show-mobile w-full">
                        <div class="w-full gap-3 mt-10 max-[700px]:mt-3 mb-12 grid grid-cols-1">
                            <div class="box-building  bg-white  w-full">
                                <div class="floating-box px-3 flex flex-col gap-4 items-center w-full ">
                                    <img class="img" width="70" src="/img/view/png/headphone.png" alt="">
                                    <div class="flex flex-col items-start w-4/5">
                                        <h3 class="text-base bolX">ارتباط تلفنی (تلفن گویا)</h3>
                                        <span class="text-small text-gray w-10/12 mt-2 text-justify RaviBold">

                                            جهت ارتباط تلفنی، با شماره زیر در تماس باشید :
                                                  <br>
                                                   ۰۲۱-۷۱۰۵۷۵۵۹
                                        </span>
                                    </div>

                                </div>
                            </div>
                            <div class="box-building  bg-white  w-full">
                                <div class="floating-box px-3 flex flex-col gap-4 items-center w-full ">
                                    <img class="img" width="70" src="/img/view/png/square-telgeram.png" alt="">
                                    <div class="flex flex-col items-start w-4/5">
                                        <h3 class="text-base bolX">کانال تلگرام و پشتیبان فنی</h3>
                                        <span class="text-small text-gray w-10/12 mt-2 text-justify RaviBold">
                                            آموزش ویدیویی پنل کاربری + اطلاع رسانی ها :
                                           @mybahooosh
                                         </span>
                                    </div>

                                </div>
                            </div>
                            <div class="box-building  bg-white  w-full">
                                <div class="floating-box px-3 flex flex-col gap-4 items-center w-full ">
                                    <img class="img" width="70" src="/img/view/png/square-instagram.png" alt="">
                                    <div class="flex flex-col items-start w-4/5">
                                        <h3 class="text-base bolX">صفحه اینستاگرام</h3>
                                        <span class="text-small text-gray w-10/12 mt-2 text-justify RaviBold">
                                         آشنایی با باهوش و ریلز های جذاب :
                                         @mybahooosh
                                         </span>
                                    </div>

                                </div>
                            </div>
                            <div class="box-building  bg-white  w-full">
                                <div class="floating-box px-3 flex flex-col gap-4 items-center w-full ">
                                    <img class="img" width="70" src="/img/view/png/square-aprat.png" alt="">
                                    <div class="flex flex-col items-start w-4/5">
                                        <h3 class="text-base bolX">کانال آپارات </h3>
                                        <span class="text-small text-gray w-10/12 mt-2 text-justify RaviBold">
                                            مشاهده آموزش های مدیریت فروشگاه :
                                           @mybahooosh
                                         </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-four my-20 flex justify-center w-full">
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
