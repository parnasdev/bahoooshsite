<div>
    <div
        class="main-data flex-100 d-flex align-items-start m-align-items-stretch justify-content-between mx-10 mb-5 mt-13">
        <div class="flex-100" x-data="{
            tab: @entangle('tab').live
        }">
            <div class="mb-15">
                <div class="dark-theme box-design bg-white px-10 py-14">
                    <div class="c-data">
                        <!--! title  -->
                        <div class="rx-title py-10">
                            <div class="text">
                                <h6>تنظیمات</h6>
                            </div>
                            <div class="p-rx">
                                <div class="rx-border-rectangle"></div>
                                <div class="rx-border-rectangle-after"></div>
                            </div>
                        </div>
                        <div class="our-service my-10">
                            <!--? Head Cards -->
                            <div class="controller-head mb-9 scroller">
                                <!--? Header buttons -->
                                <div class="main-grid our">
                                    <div class="flex-services d-flex radius-6">
                                        <!--! Button 2 -->
                                        <div class="our-services-card  flex-15 m-flex-45 px-7"
                                            :class="{ 'selected-services': tab === 'general' }"
                                            @click="tab = 'general'">
                                            <!-- Title -->
                                            <div class="paragraph d-flex align-items-center">
                                                <svg id="Add_Menu" data-name="Add Menu"
                                                    xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                    viewBox="0 0 24 24">
                                                    <path id="Path_805" data-name="Path 805"
                                                        d="M1,5.5a12.254,12.254,0,0,0,.2,2.553,2.311,2.311,0,0,0,.56,1.188,2.311,2.311,0,0,0,1.188.56A12.254,12.254,0,0,0,5.5,10a12.254,12.254,0,0,0,2.553-.2,2.311,2.311,0,0,0,1.188-.56A2.311,2.311,0,0,0,9.8,8.053,12.254,12.254,0,0,0,10,5.5a12.254,12.254,0,0,0-.2-2.553,2.311,2.311,0,0,0-.56-1.188A2.311,2.311,0,0,0,8.053,1.2,12.254,12.254,0,0,0,5.5,1a12.255,12.255,0,0,0-2.553.2,2.311,2.311,0,0,0-1.188.56A2.311,2.311,0,0,0,1.2,2.947,12.255,12.255,0,0,0,1,5.5Z"
                                                        fill="none" stroke="#212135" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" />
                                                    <path id="Path_806" data-name="Path 806"
                                                        d="M1,18.5a12.254,12.254,0,0,0,.2,2.553,2.312,2.312,0,0,0,.56,1.188,2.312,2.312,0,0,0,1.188.56A12.26,12.26,0,0,0,5.5,23a12.26,12.26,0,0,0,2.553-.2,2.312,2.312,0,0,0,1.188-.56,2.312,2.312,0,0,0,.56-1.188A12.254,12.254,0,0,0,10,18.5a12.254,12.254,0,0,0-.2-2.553,2.312,2.312,0,0,0-.56-1.188,2.312,2.312,0,0,0-1.188-.56A12.26,12.26,0,0,0,5.5,14a12.26,12.26,0,0,0-2.553.2,2.312,2.312,0,0,0-1.188.56,2.312,2.312,0,0,0-.56,1.188A12.254,12.254,0,0,0,1,18.5Z"
                                                        fill="none" stroke="#212135" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" />
                                                    <path id="Path_807" data-name="Path 807"
                                                        d="M14,18.5a12.26,12.26,0,0,0,.2,2.553,2.312,2.312,0,0,0,.56,1.188,2.312,2.312,0,0,0,1.188.56A12.26,12.26,0,0,0,18.5,23a12.26,12.26,0,0,0,2.553-.2A1.942,1.942,0,0,0,22.8,21.053,12.26,12.26,0,0,0,23,18.5a12.26,12.26,0,0,0-.2-2.553,2.312,2.312,0,0,0-.56-1.188,2.312,2.312,0,0,0-1.188-.56A12.26,12.26,0,0,0,18.5,14a12.26,12.26,0,0,0-2.553.2,2.312,2.312,0,0,0-1.188.56,2.312,2.312,0,0,0-.56,1.188A12.26,12.26,0,0,0,14,18.5Z"
                                                        fill="none" stroke="#212135" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" />
                                                    <path id="Path_808" data-name="Path 808"
                                                        d="M18.5,2V5.5m0,3.5V5.5m0,0H15" fill="none" stroke="#212135"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" />
                                                </svg>

                                                <span class="f-14 mr-7">عمومی</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="my-10" x-show="tab == 'general'">
                            <livewire:panel.setting.public-form wire:key="general" />
                        </div>
{{--                        <div class="my-10" x-show="tab == 'filtering'">--}}
{{--                            <livewire:tenant.panel.setting.fillering-setting wire:key="filtering" />--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('title', 'تنظیمات اصلی')
