<div>
    @if(!$is_edit)
        <div class="col-faq py-9 flex flex-col items-center w-full">
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
    @else

    @endif
</div>
