<div>
    @if(!$is_edit)
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
    @else

    @endif
</div>
