@props(['title' => ''])
<div class="box-design bg-white px-5 py-15 mb-12" x-data="{
    tabName: 'info'
}">
    <div class="c-data mb-12 p-tenant-main">
        {{-- title --}}
        <div
            class="main-data d-flex m-align-items-start align-items-end justify-content-between px-15">
            <h6>{{ $title }}</h6>
            <div class="our-service flex-40 mt-10">
                <!--? Head Cards -->
                <div class="controller-head mb-9 scroller">
                    <!--? Header buttons -->
                    <div class="main-grid our">
                        <div class="flex-services d-flex radius-6">
                            <!--! button 1  -->
                            <div class="our-services-card flex-45 m-flex-45 px-7"
                                 :class="{ 'selected-services': tabName === 'info' }" @click="tabName = 'info'">
                                <!-- Title -->
                                <div class="paragraph d-flex align-items-center">
                                    <svg id="Hashtag" xmlns="http://www.w3.org/2000/svg" width="19"
                                         height="19" viewBox="0 0 24 24">
                                        <path id="Path_975" data-name="Path 975"
                                              d="M1,12a27.833,27.833,0,0,0,.462,5.827A6.193,6.193,0,0,0,3,21a6.193,6.193,0,0,0,3.172,1.54A27.838,27.838,0,0,0,12,23a27.838,27.838,0,0,0,5.827-.462A6.193,6.193,0,0,0,21,21a6.193,6.193,0,0,0,1.54-3.172A27.838,27.838,0,0,0,23,12a27.838,27.838,0,0,0-.462-5.827A6.193,6.193,0,0,0,21,3a6.193,6.193,0,0,0-3.172-1.54A27.833,27.833,0,0,0,12,1a27.833,27.833,0,0,0-5.827.462A6.193,6.193,0,0,0,3,3a6.193,6.193,0,0,0-1.54,3.172A27.833,27.833,0,0,0,1,12Z"
                                              fill="none" stroke="#212135" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="2"/>
                                        <path id="Path_976" data-name="Path 976"
                                              d="M10,7v3m0,7V10m0,0h4m3,0H14m0,0v4m0,3V14m0,0H7" fill="none"
                                              stroke="#212135" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2"/>
                                    </svg>
                                    <span class="f-14 mr-8">بلوک</span>
                                </div>
                            </div>
                            <!--! Button 2 -->
                            <div class="our-services-card flex-45 m-flex-45 px-7"
                                 :class="{ 'selected-services': tabName === 'advance' }" @click="tabName = 'advance'">
                                <!-- Title -->
                                <div class="paragraph d-flex align-items-center">
                                    <svg id="Chart" xmlns="http://www.w3.org/2000/svg" width="19"
                                         height="19" viewBox="0 0 24 24">
                                        <path id="Path_860" data-name="Path 860"
                                              d="M1,12a27.833,27.833,0,0,0,.462,5.827A6.193,6.193,0,0,0,3,21a6.193,6.193,0,0,0,3.172,1.54A27.838,27.838,0,0,0,12,23a27.838,27.838,0,0,0,5.827-.462A6.193,6.193,0,0,0,21,21a6.193,6.193,0,0,0,1.54-3.172A27.838,27.838,0,0,0,23,12a27.838,27.838,0,0,0-.462-5.827A6.193,6.193,0,0,0,21,3a6.193,6.193,0,0,0-3.172-1.54A27.833,27.833,0,0,0,12,1a27.833,27.833,0,0,0-5.827.462A6.193,6.193,0,0,0,3,3a6.193,6.193,0,0,0-1.54,3.172A27.833,27.833,0,0,0,1,12Z"
                                              fill="none" stroke="#212135" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="2"/>
                                        <path id="Path_861" data-name="Path 861" d="M12,7V17m5-6v6M7,13v4"
                                              fill="none" stroke="#212135" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="2"/>
                                    </svg>
                                    <span class="f-14 mr-8">پیشرفته</span>
                                </div>
                            </div>
                            <!--! Button 4 -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div x-show="tabName === 'info'">
            {{ $slot }}
        </div>
        <div x-show="tabName === 'advance'">
{{--            <div class="box-design bg-white mb-10 p-10 py-9">--}}
{{--                <div class="c-data">--}}
{{--                    <div class="rx-title pb-10">--}}
{{--                        <div class="text">--}}
{{--                            <h6>واکنش‌گرایی</h6>--}}
{{--                        </div>--}}
{{--                        <div class="p-rx">--}}
{{--                            <div class="rx-border-rectangle"></div>--}}
{{--                            <div class="rx-border-rectangle-after"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="d-flex align-items-start flex-wrap">--}}
{{--                        <x-inputs.panel.swich class="mr-15" rightLabel="نمایش دسکتاپ" leftLabel="عدم نمایش دسکتاپ"--}}
{{--                                              wire:model="blockForm.show_desktop"/>--}}
{{--                        <x-inputs.panel.swich class="mr-15" rightLabel="نمایش تبلت" leftLabel="عدم نمایش تبلت"--}}
{{--                                              wire:model="blockForm.show_tablet"/>--}}
{{--                        <x-inputs.panel.swich class="mr-15" rightLabel="نمایش موبایل" leftLabel="عدم نمایش موبایل"--}}
{{--                                              wire:model="blockForm.show_mobile"/>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="box-design bg-white mb-10 p-10 py-9">--}}
{{--                <div class="c-data">--}}
{{--                    <div class="rx-title pb-10">--}}
{{--                        <div class="text">--}}
{{--                            <h6>فاصله‌داخلی</h6>--}}
{{--                        </div>--}}
{{--                        <div class="p-rx">--}}
{{--                            <div class="rx-border-rectangle"></div>--}}
{{--                            <div class="rx-border-rectangle-after"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="d-flex align-items-start flex-88">--}}
{{--                        <x-inputs.panel.number class="flex-17 mr-10" wire:model="blockForm.padding.left" label="چپ"/>--}}
{{--                        <x-inputs.panel.number class="flex-17 mr-10" wire:model="blockForm.padding.right" label="راست"/>--}}
{{--                        <x-inputs.panel.number class="flex-17 mr-10" wire:model="blockForm.padding.top" label="بالا"/>--}}
{{--                        <x-inputs.panel.number class="flex-17 mr-10" wire:model="blockForm.padding.bottom"--}}
{{--                                               label="پایین"/>--}}
{{--                        <x-inputs.panel.select parentClass="flex-17 mr-10" wire:model="blockForm.padding.type" label="نوع"--}}
{{--                                               :options="['%' => '%', 'px' => 'px' , 'em' => 'em' , 'rem' => 'rem']"/>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="box-design bg-white mb-10 p-10 py-9">--}}
{{--                <div class="c-data">--}}
{{--                    <div class="rx-title pb-10">--}}
{{--                        <div class="text">--}}
{{--                            <h6>حاشیه‌خارجی</h6>--}}
{{--                        </div>--}}
{{--                        <div class="p-rx">--}}
{{--                            <div class="rx-border-rectangle"></div>--}}
{{--                            <div class="rx-border-rectangle-after"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="d-flex align-items-start  flex-88">--}}
{{--                        <x-inputs.panel.number class="flex-17 mr-10" wire:model="blockForm.margin.left" label="چپ"/>--}}
{{--                        <x-inputs.panel.number class="flex-17 mr-10" wire:model="blockForm.margin.right" label="راست"/>--}}
{{--                        <x-inputs.panel.number class="flex-17 mr-10" wire:model="blockForm.margin.top" label="بالا"/>--}}
{{--                        <x-inputs.panel.number class="flex-17 mr-10" wire:model="blockForm.margin.bottom"--}}
{{--                                               label="پایین"/>--}}
{{--                        <x-inputs.panel.select parentClass="flex-17 mr-10" wire:model="blockForm.margin.type" label="نوع"--}}
{{--                                               :options="['%' => '%', 'px' => 'px' , 'em' => 'em' , 'rem' => 'rem']"/>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <x-inputs.panel.text wire:model="blockForm.title" label="عنوان بلوک"/>
        </div>
    </div>
    <div class="w-100 mt-3 mb-2 d-flex justify-content-center align-items-center">
        <button type="button" wire:click="submitData" class="btn-base w-25">اعمال
            تغییر
        </button>
    </div>
</div>
