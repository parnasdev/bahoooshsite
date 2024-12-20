@php($listener = strtolower(\Illuminate\Support\Str::random(4)))
<div {{ $attributes->only('class') }} x-data="{
                            files: @entangle($attributes->wire('model')).live,
                            filemangerCallback(e) {
                                debugger
                                let { urls, file_type } = e.detail

                                this.files = urls[0];
                            },
                            deleteFile() {
                                this.files = '';
                            }
                        }" {{ '@' . $listener }}.window="filemangerCallback">
    <ul class="list-unstyled list-inline bg-white box-design p-7 mb-12 m-p-0"
        style="height: 150px">
        <li class="f-14 f-bold">
            <div class="d-flex justify-content-start m-left-auto pos-relative pt-5 pr-10 pb-5">
                <label for="useData" class="d-flex f-12 text-63">
                    {{ $label ?? '' }}
                    <div class="rx-title title-input pb-10">
                        <div class="p-rx">
                            <div class="rx-border-rectangle-after label-input"></div>
                        </div>
                    </div>
                </label>
            </div>
            <div class="d-flex flex-wrap align-items-center" style="height: 100px">
                <div x-show="files === ''"
                     class="flex-direction-column w-100 align-items-start flex-wrap justify-content-start ml-6">
                    <button type="button"
                            wire:click="$dispatch('openModal' ,{component: 'panel.utils.uploader-modal',arguments:{ maxItems: 1, type: 1, file_type: 'image', direction: 'settings', builder: true, eventComponent: '{{$listener}}' } })"
                            class="btn border-dotted-2 border-secondary text-white w-100 d-flex align-items-center justify-content-center p-10 radius-5 mb-4"
                            style="height: 115px;">
                        <svg width="40" height="40" viewBox="0 0 32 32" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.9375 8.02344L15.9375 23.3601" stroke="#333"
                                  stroke-width="2" stroke-linecap="round"/>
                            <path d="M23.5898 15.6914L8.29139 15.6914" stroke="#333"
                                  stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </button>
                </div>
                <div x-show="files !== ''">
                    <div
                        class="flex-98 d-flex flex-wrap align-items-start justify-content-start ml-3">
                        <div
                            class="flex-100 d-flex flex-wrap align-items-center justify-content-around bg-light text-white py-5 radius-5 mb-4 pos-relative">
                            <span class="flex-100 f-14 text-dark" x-text="files"></span>
                            <div class="flex-100 d-flex mr-3 pos-absolute left-7"
                                 style="top: -5px">
                                <button type="button" @click="deleteFile()"
                                        class="d-flex align-items-center justify-content-center bg-white radius-5 px-9 py-7 ml-3 box-shadow-pattern-1">
                                    <svg width="20" height="20" viewBox="0 0 31 31"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.7852 19.2988L12.7852 15.4647"
                                              stroke="#ff383f" stroke-width="2"
                                              stroke-linecap="round"/>
                                        <path d="M17.8828 19.2988L17.8828 15.4647"
                                              stroke="#ff383f" stroke-width="2"
                                              stroke-linecap="round"/>
                                        <path
                                            d="M3.85938 9.07617H26.8071V9.07617C25.0914 9.07617 24.2336 9.07617 23.6689 9.56799C23.5996 9.62832 23.5346 9.69336 23.4743 9.76264C22.9824 10.3273 22.9824 11.1851 22.9824 12.9008V21.6909C22.9824 23.5765 22.9824 24.5193 22.3967 25.1051C21.8109 25.6909 20.8681 25.6909 18.9824 25.6909H11.684C9.79837 25.6909 8.85556 25.6909 8.26977 25.1051C7.68399 24.5193 7.68399 23.5765 7.68399 21.6909V12.9008C7.68399 11.1851 7.68399 10.3273 7.19217 9.76264C7.13184 9.69336 7.0668 9.62832 6.99752 9.56799C6.43283 9.07617 5.57501 9.07617 3.85938 9.07617V9.07617Z"
                                            stroke="#ff383f" stroke-width="2"
                                            stroke-linecap="round"/>
                                        <path
                                            d="M12.8702 4.43653C13.0155 4.30065 13.3356 4.18058 13.7809 4.09494C14.2262 4.00931 14.7718 3.96289 15.3331 3.96289C15.8944 3.96289 16.44 4.00931 16.8853 4.09494C17.3306 4.18058 17.6507 4.30065 17.7959 4.43653"
                                            stroke="#ff383f" stroke-width="2"
                                            stroke-linecap="round"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    {{ $slot ?? '' }}
</div>
