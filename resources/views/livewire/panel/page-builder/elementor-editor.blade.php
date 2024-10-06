<div>
    <style>
                .container {
        position: relative;
        overflow: hidden;
        height: 58vh;
        width: 100%;
        padding-top: 56.25%; /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
        }

        /* Then style the iframe to fit in the container div with full height and width */
        .responsive-iframe {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
        }
    </style>
    <div class="p-parnas flex-100 m-flex-100 d-flex align-items-start justify-content-between rtl mx-10 my-10" x-data="{
        showSectionPopover: false,
        toggleSectionPopover() {
            this.showSectionPopover = !this.showSectionPopover;
        }
    }">
        <div class="r-parnas-elementor flex-18 bg-four-color radius-10 py-10" style="height:95vh">
            <div
                class="ctrl-parnas px-10 d-flex flex-direction-column align-items-stretch justify-content-between h-100">
                <div class="w-100">
                    {{-- header aside --}}
                    <div class="w-100 bg-parnas d-flex align-items-center justify-content-between py-13 radius-5 mb-7">
                        <div class="image d-flex align-items-center mx-10 cursor-pointer">
                            <svg width="25" height="25" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5Z"
                                    stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path
                                    d="M13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12Z"
                                    stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path
                                    d="M13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19Z"
                                    stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="text">
                            <span class="text-white font-bold">ویرایش {{ $post->title }}</span>
                        </div>
                        <div class="image d-flex align-items-center mx-10 cursor-pointer">
                            <svg width="25" height="25" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 8H19" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M8 12H19" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M8 16H19" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M5 8V8.00999" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M5 12V12.01" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M5 16V16.01" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    {{-- accordion Tab --}}
                    <div class="accordion-elementor d-flex align-items-center justify-content-between">
                        <div
                            class="accordion-child flex-48 d-flex justify-content-center bg-parnas py-7 radius-5 cursor-pointer">
                            <span class="f-14 font-bold text-white">کامپونت ها</span>
                        </div>
                        <div
                            class="accordion-child flex-48 d-flex justify-content-center bg-parnas py-7 radius-5 cursor-pointer">
                            <span class="f-14 font-bold text-white">تنظیمات</span>
                        </div>
                    </div>
                    {{-- detail for accoridon tab  --}}
                    <div class="detail-elementor my-10"  x-data="{
                    components: @entangle('components').live,
                    q: '',
                    search(components , keyword){
                        let searched = components.filter((component) => {
                            if (component.title.match(keyword)){
                                return component;
                            }
                        })
                        return searched;
                    },
                    makeNewContent(components , content , item , itemIndex) {
                        let newContent = [];
                        content.forEach((element , contentIndex) => {
                            if(element.componentName != item.componentName){
                                newContent.push(element);
                            }
                            else if (itemIndex != contentIndex){
                                newContent.push(element);
                            }
                        })

                        return newContent;
                    },
                }">
                        <div class="w-100">
                            <div class="c-input flex-100">
                                <input type="text" placeholder="ابزارک خود را جستجو کنید"  x-model='q'/>
                            </div>
                        </div>
                        <div
                            class="flex-100 overflow-y-auto"
                            style="height: 65vh">
                            <template x-for="(component , index) in search(components , q)" :key="index">
                                <div
                                    class="d-flex bg-white flex-80 align-items-center py-10 px-5 radius-5 mb-5 cursor-pointer">
                                    <i class="bi bi-images f-16"></i>
                                    <span x-text="component.title" class="f-13 mr-3"></span>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
                {{-- action button elementor --}}
                <div class="action-elementor">
                    <div class="p-action d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center flex-50">
                            <div
                                class="image d-flex justify-content-center align-items-center bg-primary radius-5 flex-48 py-7 mx-5 cursor-pointer">
                                <span class="f-13 text-white">موبایل</span>
                            </div>
                            <div
                                class="image d-flex justify-content-center align-items-center bg-primary radius-5 flex-48 py-7 mx-5 cursor-pointer">
                                <span class="f-13 text-white">تبلت</span>
                            </div>
                        </div>
                        <div class="c-btn justify-content-end pt-8 mb-10">
                            <button class="btn bg-success text-white radius-5"
                                    style="padding-top: 6.5px;padding-bottom: 6.5px">به روزرسانی
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="l-parnas-elementor flex-83">
            <div class="ctrl-parnas mr-10 pos-relative">
                {{-- show data --}}
                <div class="show-data flex-100 bg-white py-20 radius-10 mb-10 ml-10">
                    {{-- @dd($post->options) --}}
                    <div
                            class="container">
                        <iframe class="responsive-iframe " style="height: 95vh; width: 100%" src="{{ route("panel.pagepreview", ['page' => $post->id]) }}" >

                        </iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
