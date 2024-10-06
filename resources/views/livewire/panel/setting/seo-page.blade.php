<div>
    <form wire:submit="submit" x-data="{tab: 'seo-setting', robotTab: 'allowed'}">
        <div
            class="main-data flex-100 d-flex align-items-start m-align-items-stretch justify-content-between mx-10 mb-5 mt-13">
            <div class="flex-100">
                <div class="box-design bg-white px-5 py-15 mb-12">
                    <div class="rx-title pb-10 mt-10">
                        <div class="text pr-7">
                            <h6>سئو</h6>
                        </div>
                        <div class="p-rx">
                            <div class="rx-border-rectangle"></div>
                            <div class="rx-border-rectangle-after"></div>
                        </div>
                    </div>
                    <div class="c-group-btn d-flex flex-wrap justify-content-start mt-10">
                        <div class="c-btn ml-7 pb-5">
                            <button type="button" @click="tab = 'seo-setting'"
                                    :class="tab === 'seo-setting' ? 'bg-secondary' : 'bg-info'"
                                    class="ancher btn-effect text-white radius-5">
                                <div class="circle-solid top-right bg-white"></div>
                                تنظیمات سئو
                            </button>
                        </div>
                        <div class="c-btn ml-7 pb-5">
                            <button type="button" @click="tab = 'robots.txt'"
                                    :class="tab === 'robots.txt' ? 'bg-secondary' : 'bg-info'"
                                    class="ancher btn-effect text-white radius-5">
                                <div class="circle-solid top-right bg-white"></div>
                                robots.txt
                            </button>
                        </div>
{{--                        <div class="c-btn ml-7 pb-5">--}}
{{--                            <button type="button" @click="tab = 'redirection'"--}}
{{--                                    :class="tab === 'redirection' ? 'bg-secondary' : 'bg-info'"--}}
{{--                                    class="ancher btn-effect text-white radius-5">--}}
{{--                                <div class="circle-solid top-right bg-white"></div>--}}
{{--                                تغییر مسیرها--}}
{{--                            </button>--}}
{{--                        </div>--}}
                    </div>
                    <div x-show="tab === 'seo-setting'">
                        <div class="d-flex flex-wrap justify-content-between pr-10 m-pr-0 mt-20">
                            <x-inputs.panel.text label="عنوان سایت" class="flex-48 m-flex-100 ml-10" wire:model="setting.siteTitle" />
                            <x-inputs.panel.text label="جداکننده" class="flex-48 m-flex-100 ml-10" wire:model="setting.separator" />
                            <x-inputs.panel.textarea label="کلمات کلیدی" placeholder="کلمات مدنظر خود را با '|' جدا کنید." class="flex-48 m-flex-100 ml-10" wire:model="setting.keywords" />
                        </div>
                    </div>
                    <div x-show="tab === 'robots.txt'">
                        <div class="d-flex flex-wrap pr-10 m-pr-0 mt-20">
                            <div class="flex-49 justify-content-start m-flex-100 ml-10">
                                @if(!$isAdvancedSettingEnabled)
                                    <x-inputs.panel.select wire:model.live="selectBoxAction"
                                                           label="ربات های مورد نظر را انتخاب کنید"
                                                           class="flex-23"
                                                           placeholder="-"
                                                           :options="$allRobots"
                                    />
                                    <div style="display: inline-flex">
                                        @foreach($setting['robots']['selectedRobots'] ?? [] as $key => $robot)
                                            <div class="d-flex pos-relative tag-label ml-5">
                                        <span wire:click="removeRobot('{{ $key }}')"
                                              class="text-white bg-secondary radius-5 f-14 px-4 px-10 mb-5 cursor-pointer">
                                            {{ $robot == '*' ? 'همه ربات ها' : $robot }}
                                        </span>
                                                <svg width="14" height="14" viewBox="0 0 47 47" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     wire:click="removeRobot('{{ $key }}')">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M40.4293 23.0799C40.4293 32.6089 32.7238 40.3337 23.2186 40.3337C13.7133 40.3337 6.00781 32.6089 6.00781 23.0799C6.00781 13.5509 13.7133 5.82617 23.2186 5.82617C32.7238 5.82617 40.4293 13.5509 40.4293 23.0799ZM23.2185 24.4957L16.2753 31.4562L14.8629 30.0403L21.8061 23.0797L14.8633 16.1196L16.2757 14.7036L23.2185 21.6638L30.1613 14.7036L31.5738 16.1196L24.631 23.0797L31.5742 30.0403L30.1617 31.4562L23.2185 24.4957Z"
                                                          fill="#CCD2E3"></path>
                                                </svg>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="align-items-center">
                                        <span style="color: red;">نکته: در صورت فعال کردن تنظیمات پیشرفته، تنظیمات ساده اعمال نمی شود.</span>
                                    </div>
                                @endif
                            </div>
                            <div class="flex-49 d-flex justify-content-end align-items-top c-switch">
                                <div class="flex-35 m-flex-100 mr-10">
                                    <x-inputs.panel.swich rightLabel="پیشرفته" leftLabel="ساده" wire:model.live="isAdvancedSettingEnabled" class="mb-2"  />
                                </div>
                            </div>
                        </div>
                        @if(count($setting['robots']['selectedRobots'] ?? []) > 0 && !$isAdvancedSettingEnabled)
                            <div class="c-group-btn d-flex flex-wrap justify-content-center mt-30 mb-30">
                                <div class="c-btn ml-7 pb-5">
                                    <button type="button" @click="robotTab = 'allowed'"
                                            :class="robotTab === 'allowed' ? 'bg-secondary' : 'bg-info'"
                                            class="ancher btn-effect text-white radius-5">
                                        <div class="circle-solid top-right bg-white"></div>
                                        مسیرهای مجاز
                                    </button>
                                </div>
                                <div class="c-btn ml-7 pb-5">
                                    <button type="button" @click="robotTab = 'disallowed'"
                                            :class="robotTab === 'disallowed' ? 'bg-secondary' : 'bg-info'"
                                            class="ancher btn-effect text-white radius-5">
                                        <div class="circle-solid top-right bg-white"></div>
                                        مسیرهای غیرمجاز
                                    </button>
                                </div>
                            </div>
                            <div x-show="robotTab === 'allowed'">
                                <div class="d-flex flex-wrap justify-content-center pr-10 m-pr-0 mt-20">
                                    <div class="flex-60 m-flex-100 ml-10">
                                        <div class="c-input mb-2">
                                            <div class="d-flex justify-content-start m-left-auto pos-relative pr-5">
                                                <label for="useData" class="d-flex f-14 text-63">
                                                    <span class="f-14">مسیرهای مجاز (مسیرهای مورد نظر را با زدن یک فاصله ( space ) بین هر مسیر وارد کنید)</span>
                                                    <div class="rx-title title-input pb-10">
                                                        <div class="p-rx">
                                                            <div class="rx-border-rectangle-after label-input"></div>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <textarea
                                                class="form-control" dir="ltr"
                                                wire:model="setting.robots.allowedRoutes"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div x-show="robotTab === 'disallowed'">
                                <div class="d-flex flex-wrap justify-content-center pr-10 m-pr-0 mt-20">
                                    <div class="flex-60 m-flex-100 ml-10">
                                        <div class="c-input mb-2">
                                            <div class="d-flex justify-content-start m-left-auto pos-relative pr-5">
                                                <label for="useData" class="d-flex f-14 text-63">
                                                    <span class="f-14">مسیرهای غیرمجاز (مسیرهای مورد نظر را با زدن یک فاصله ( space ) بین هر مسیر وارد کنید)</span>
                                                    <div class="rx-title title-input pb-10">
                                                        <div class="p-rx">
                                                            <div class="rx-border-rectangle-after label-input"></div>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <textarea
                                                class="form-control" dir="ltr"
                                                wire:model="setting.robots.disallowedRoutes"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @elseif($isAdvancedSettingEnabled)
                            <div class="d-flex flex-wrap justify-content-between pr-10 m-pr-0 mt-20">
                                <div class="flex-48 m-flex-100 mr-10">
                                    <div class="c-input mb-2">
                                        <div class="d-flex justify-content-start m-left-auto pos-relative pr-5">
                                            <label for="useData" class="d-flex f-14 text-63">
                                                <span class="f-14">پیش نمایش</span>
                                                <div class="rx-title title-input pb-10">
                                                    <div class="p-rx">
                                                        <div class="rx-border-rectangle-after label-input"></div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <textarea
                                            class="form-control" readonly dir="ltr" wire:model.live="livePreview"
                                            style="height: 300px;"></textarea>
                                    </div>
                                </div>
                                <div class="flex-48 m-flex-100 ml-20">
                                    <div class="c-input mb-2">
                                        <div class="d-flex justify-content-start m-left-auto pos-relative pr-5">
                                            <label for="useData" class="d-flex f-14 text-63">
                                                <span class="f-14">robots.txt</span>
                                                <div class="rx-title title-input pb-10">
                                                    <div class="p-rx">
                                                        <div class="rx-border-rectangle-after label-input"></div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <textarea
                                            class="form-control" dir="ltr" wire:model.live="advancedSetting"
                                            style="height: 300px;"></textarea>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
{{--                    <div x-show="tab === 'redirection'">--}}
{{--                        <div class="c-data mt-30">--}}
{{--                            <div class="p-table p-0">--}}
{{--                                <div--}}
{{--                                    class="main-data d-flex align-items-center m-align-items-stretch justify-content-between pb-3">--}}
{{--                                    <div class="rx-title">--}}
{{--                                        <div class="title d-flex align-items-center pb-10 pr-7">--}}
{{--                                            <div class="text">--}}
{{--                                                <h4>لیست تغییر مسیرها</h4>--}}
{{--                                            </div>--}}
{{--                                            <div class="result pos-relative right-4">--}}
{{--                                                <span--}}
{{--                                                    class="d-flex align-items-center justify-content-center f-15 bg-parnas text-white px-8"--}}
{{--                                                    style="border-radius:5px;">{{ count($allRedirects) }}</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="p-rx">--}}
{{--                                                <div class="rx-border-rectangle"></div>--}}
{{--                                                <div class="rx-border-rectangle-after"></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div--}}
{{--                                        class="flex-75 m-flex-100 d-flex align-items-center justify-content-end m-justify-content-start">--}}
{{--                                        <div class="c-btn ml-7 pb-5 m-pb-0">--}}
{{--                                            <button type="button"--}}
{{--                                                    class="ancher btn-effect bg-success text-white radius-5"--}}
{{--                                                    @click="$dispatch('openModal', {component: 'tenant.panel.setting.create-redirect-modal'})">--}}
{{--                                                <div class="circle-solid top-right bg-white"></div>--}}
{{--                                                <svg width="25" height="25" viewBox="0 0 32 32" fill="none"--}}
{{--                                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                    <path d="M15.9375 8.02344L15.9375 23.3601" stroke="#fff"--}}
{{--                                                          stroke-width="2" stroke-linecap="round"></path>--}}
{{--                                                    <path d="M23.5898 15.6914L8.29139 15.6914" stroke="#fff"--}}
{{--                                                          stroke-width="2" stroke-linecap="round"></path>--}}
{{--                                                </svg>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!--! table  -->--}}
{{--                                <div class="controller-table scroller pr-3 my-15">--}}
{{--                                    <!--? thead -->--}}
{{--                                    <div class="d-thead">--}}
{{--                                        <div class="head flex-8 m-flex-22">--}}
{{--                                            <span class="f-14 f-bold">شناسه</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="head flex-40 m-flex-50">--}}
{{--                                            <span class="f-14 f-bold">مسیر قدیمی</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="head flex-40 m-flex-70">--}}
{{--                                            <span class="f-14 f-bold">مسیر جدید</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="head sticky-table flex-11 m-flex-30">--}}
{{--                                            <span class="f-14 f-bold">عملیات</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!--? tdetail  -->--}}
{{--                                    <div class="data">--}}
{{--                                        @forelse($allRedirects as $redirect)--}}
{{--                                            <div class="d-detail">--}}
{{--                                                <div class="detail flex-8 m-flex-22">--}}
{{--                                                    <span class="f-14">{{ $redirect->id }}</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="detail flex-40 m-flex-50">--}}
{{--                                                    <span class="f-14">--}}
{{--                                                        {{ empty($redirect->old_url) ? '/' : $redirect->old_url . '/' }}--}}
{{--                                                    </span>--}}
{{--                                                </div>--}}
{{--                                                <div class="detail flex-40 m-flex-70">--}}
{{--                                                    <span class="f-14">--}}
{{--                                                        {{ empty($redirect->new_url) ? '/' : $redirect->new_url . '/' }}--}}
{{--                                                    </span>--}}
{{--                                                </div>--}}
{{--                                                <div class="detail d-flex flex-wrap sticky-table flex-11 m-flex-30">--}}
{{--                                                    <button wire:click="deleteRedirectRoute({{ $redirect->id }})"--}}
{{--                                                            class="bg-danger parnas-data d-flex align-items-center justify-content-center ml-5"--}}
{{--                                                            style="border-radius: 10px;width:35px;height:35px"--}}
{{--                                                            type="button">--}}
{{--                                                        <div class="image tooltip d-flex cursor-pointer">--}}
{{--                                                            <svg width="20" height="20" viewBox="0 0 31 31" fill="none"--}}
{{--                                                                 xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                                <path d="M12.7852 19.2988L12.7852 15.4647" stroke="#fff"--}}
{{--                                                                      stroke-width="2" stroke-linecap="round"></path>--}}
{{--                                                                <path d="M17.8828 19.2988L17.8828 15.4647" stroke="#fff"--}}
{{--                                                                      stroke-width="2" stroke-linecap="round"></path>--}}
{{--                                                                <path--}}
{{--                                                                    d="M3.85938 9.07617H26.8071V9.07617C25.0914 9.07617 24.2336 9.07617 23.6689 9.56799C23.5996 9.62832 23.5346 9.69336 23.4743 9.76264C22.9824 10.3273 22.9824 11.1851 22.9824 12.9008V21.6909C22.9824 23.5765 22.9824 24.5193 22.3967 25.1051C21.8109 25.6909 20.8681 25.6909 18.9824 25.6909H11.684C9.79837 25.6909 8.85556 25.6909 8.26977 25.1051C7.68399 24.5193 7.68399 23.5765 7.68399 21.6909V12.9008C7.68399 11.1851 7.68399 10.3273 7.19217 9.76264C7.13184 9.69336 7.0668 9.62832 6.99752 9.56799C6.43283 9.07617 5.57501 9.07617 3.85938 9.07617V9.07617Z"--}}
{{--                                                                    stroke="#fff" stroke-width="2"--}}
{{--                                                                    stroke-linecap="round"></path>--}}
{{--                                                                <path--}}
{{--                                                                    d="M12.8702 4.43653C13.0155 4.30065 13.3356 4.18058 13.7809 4.09494C14.2262 4.00931 14.7718 3.96289 15.3331 3.96289C15.8944 3.96289 16.44 4.00931 16.8853 4.09494C17.3306 4.18058 17.6507 4.30065 17.7959 4.43653"--}}
{{--                                                                    stroke="#fff" stroke-width="2"--}}
{{--                                                                    stroke-linecap="round"></path>--}}
{{--                                                            </svg>--}}
{{--                                                            <div class="s-tooltip">--}}
{{--                                                                <span>حذف</span>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        @empty--}}
{{--                                            <div class="empty-data">--}}
{{--                                                <div--}}
{{--                                                    class="main-empty d-flex flex-direction-column align-items-center">--}}
{{--                                                    <div class="image">--}}
{{--                                                        <svg width="250" height="250" viewBox="0 0 250 200"--}}
{{--                                                             fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                            <path fill-rule="evenodd" clip-rule="evenodd"--}}
{{--                                                                  d="M207 65C210.866 65 214 68.134 214 72C214 75.866 210.866 79 207 79H167C170.866 79 174 82.134 174 86C174 89.866 170.866 93 167 93H189C192.866 93 196 96.134 196 100C196 103.866 192.866 107 189 107H178.826C173.952 107 170 110.134 170 114C170 116.577 172 118.911 176 121C179.866 121 183 124.134 183 128C183 131.866 179.866 135 176 135H93C89.134 135 86 131.866 86 128C86 124.134 89.134 121 93 121H54C50.134 121 47 117.866 47 114C47 110.134 50.134 107 54 107H94C97.866 107 101 103.866 101 100C101 96.134 97.866 93 94 93H69C65.134 93 62 89.866 62 86C62 82.134 65.134 79 69 79H109C105.134 79 102 75.866 102 72C102 68.134 105.134 65 109 65H207ZM207 93C210.866 93 214 96.134 214 100C214 103.866 210.866 107 207 107C203.134 107 200 103.866 200 100C200 96.134 203.134 93 207 93Z"--}}
{{--                                                                  fill="#f5f5f5"/>--}}
{{--                                                            <path fill-rule="evenodd" clip-rule="evenodd"--}}
{{--                                                                  d="M153.672 64L162.974 131.843L163.809 138.649C164.079 140.842 162.519 142.837 160.327 143.107L101.766 150.297C99.5738 150.566 97.578 149.007 97.3088 146.814L88.2931 73.3868C88.1584 72.2904 88.9381 71.2925 90.0344 71.1579C90.0413 71.1571 90.0483 71.1563 90.0552 71.1555L94.9136 70.6105M98.8421 70.1698L103.429 69.6553L98.8421 70.1698Z"--}}
{{--                                                                  fill="white"/>--}}
{{--                                                            <path--}}
{{--                                                                d="M154.91 63.8302C154.816 63.1463 154.186 62.6678 153.502 62.7616C152.818 62.8554 152.34 63.4859 152.433 64.1698L154.91 63.8302ZM162.974 131.843L164.214 131.69C164.214 131.685 164.213 131.679 164.212 131.673L162.974 131.843ZM97.3088 146.814L98.5495 146.662L97.3088 146.814ZM88.2931 73.3868L89.5337 73.2344L88.2931 73.3868ZM90.0552 71.1555L89.9159 69.9133L90.0552 71.1555ZM95.0529 71.8527C95.739 71.7758 96.2327 71.1572 96.1558 70.4712C96.0788 69.7851 95.4603 69.2913 94.7742 69.3683L95.0529 71.8527ZM98.7028 68.9276C98.0167 69.0046 97.5229 69.6231 97.5999 70.3092C97.6768 70.9952 98.2954 71.489 98.9814 71.412L98.7028 68.9276ZM103.568 70.8975C104.255 70.8205 104.748 70.202 104.671 69.5159C104.594 68.8299 103.976 68.3361 103.29 68.4131L103.568 70.8975ZM152.433 64.1698L161.735 132.013L164.212 131.673L154.91 63.8302L152.433 64.1698ZM161.733 131.995L162.569 138.801L165.05 138.497L164.214 131.69L161.733 131.995ZM162.569 138.801C162.754 140.309 161.682 141.681 160.174 141.866L160.479 144.347C163.357 143.994 165.403 141.375 165.05 138.497L162.569 138.801ZM160.174 141.866L101.614 149.056L101.919 151.538L160.479 144.347L160.174 141.866ZM101.614 149.056C100.107 149.241 98.7346 148.169 98.5495 146.662L96.0681 146.967C96.4215 149.845 99.0409 151.891 101.919 151.538L101.614 149.056ZM98.5495 146.662L89.5337 73.2344L87.0524 73.5391L96.0681 146.967L98.5495 146.662ZM89.5337 73.2344C89.4833 72.8233 89.7756 72.4491 90.1867 72.3986L89.8821 69.9173C88.1005 70.136 86.8336 71.7576 87.0524 73.5391L89.5337 73.2344ZM90.1867 72.3986C90.1893 72.3983 90.1919 72.398 90.1945 72.3977L89.9159 69.9133C89.9046 69.9145 89.8933 69.9159 89.8821 69.9173L90.1867 72.3986ZM90.1945 72.3977L95.0529 71.8527L94.7742 69.3683L89.9159 69.9133L90.1945 72.3977ZM98.9814 71.412L103.568 70.8975L103.29 68.4131L98.7028 68.9276L98.9814 71.412ZM103.29 68.4131L98.7028 68.9276L98.9814 71.412L103.568 70.8975L103.29 68.4131Z"--}}
{{--                                                                fill="#ca7e65"/>--}}
{{--                                                            <path fill-rule="evenodd" clip-rule="evenodd"--}}
{{--                                                                  d="M151.14 68.2692L159.56 129.753L160.317 135.921C160.561 137.908 159.167 139.715 157.203 139.956L104.761 146.395C102.798 146.636 101.008 145.22 100.764 143.233L92.6141 76.8568C92.4795 75.7605 93.2591 74.7626 94.3555 74.628L100.843 73.8314"--}}
{{--                                                                  fill="#fff"/>--}}
{{--                                                            <path--}}
{{--                                                                d="M107.922 54C107.922 52.4812 109.153 51.25 110.672 51.25H156.229C156.958 51.25 157.657 51.5395 158.173 52.0549L171.616 65.4898C172.132 66.0056 172.422 66.7053 172.422 67.4349V130C172.422 131.519 171.191 132.75 169.672 132.75H110.672C109.153 132.75 107.922 131.519 107.922 130V54Z"--}}
{{--                                                                fill="white" stroke="#ca7e65"--}}
{{--                                                                stroke-width="2.5"/>--}}
{{--                                                            <path--}}
{{--                                                                d="M156.672 52.4028V64C156.672 65.6569 158.015 67 159.672 67H167.605"--}}
{{--                                                                stroke="#ca7e65" stroke-width="2.5"--}}
{{--                                                                stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                                            <path--}}
{{--                                                                d="M118 118H144M118 67H144H118ZM118 79H161H118ZM118 92H161H118ZM118 105H161H118Z"--}}
{{--                                                                stroke="#ca7e65" stroke-width="2.5"--}}
{{--                                                                stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                                        </svg>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        @endforelse--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!--! pagination  -->--}}
{{--                                <div--}}
{{--                                    class="main-data p-pagination d-flex m-direction-column-reverse justify-content-between py-2 px-2">--}}
{{--                                    <!-- perpage  -->--}}
{{--                                    <div class="perpage m-mt-10">--}}
{{--                                        <div class="select c-s h-2percent-3rem mt-5 mr-3">--}}
{{--                                            <x-parnas.inputs.select wire:model.live="perPage" class="radius-7">--}}
{{--                                                @foreach ([15, 30, 45, 50] as $count)--}}
{{--                                                    <x-parnas.inputs.option>--}}
{{--                                                        {{ $count }}--}}
{{--                                                    </x-parnas.inputs.option>--}}
{{--                                                @endforeach--}}
{{--                                            </x-parnas.inputs.select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- ul pagination -->--}}
{{--                                    {{ count($allRedirects) > 0 ? $allRedirects->links() : '' }}--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="c-btn justify-content-end pt-10 pl-10">
                        <button class="btn bg-primary justify-content-end text-white radius-5">
                            اعمال تغییرات
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@push('title', 'تنظیمات سئو')