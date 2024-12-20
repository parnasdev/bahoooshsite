<div>
    <form wire:submit="submit">
        <div
            class="main-data flex-100 d-flex align-items-start m-align-items-stretch justify-content-between mx-10 mb-5 mt-13">
            <!--! c-right -->
            <div class="c-right flex-70 mb-15">
                <!--? row form  -->
                <div class="box-design bg-white px-5 py-15 mb-12">


                    <div class="c-data">
                        <!--! title  -->
                        <div class="rx-title pb-10 justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="text pr-7">
                                    <h6>مشخصات فرم</h6>

                                </div>
                                <div class="p-rx ">
                                    <div class="rx-border-rectangle"></div>
                                    <div class="rx-border-rectangle-after"></div>
                                </div>
                            </div>

                            <span class="f-14">کد فرم: {{ $form->code }}</span>
                        </div>

                        <!--! data form  -->
                        <div class="my-10 mx-7">

                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <!--? select -->
                                <x-inputs.panel.text  wire:model.live="form.name"
                                                      class="align-items-end flex-48 m-flex-100 mr-9 m-mr-0"
                                                      label="نام فرم"
                                                      placeholder="نام فرم خود را بنویسید"
                                />
                                <x-inputs.panel.text  wire:model.live="form.btn_text"
                                                      class="align-items-end flex-48 m-flex-100 mr-9 m-mr-0"
                                                      label="متن دکمه"
                                                      placeholder="متن دکمه خود را بنویسید"
                                />
                                <x-inputs.panel.swich
                                    wire:model.live="form.is_payable"
                                    class="align-items-end flex-93 m-flex-100 mr-9 m-mr-0"
                                    rightLabel="فعالسازی درگاه"
                                />

                                @if($form->is_payable)
                                    <x-inputs.panel.select label="نوع درگاه"
                                                           parentClass="align-items-end flex-48 m-flex-100 mr-9 m-mr-0"
                                                           wire:model="form.config.driver"
                                    >
                                        <option value="zarinpal">درگاه زرین پال</option>
                                        <option value="zibal">درگاه زیبال</option>
                                    </x-inputs.panel.select>

                                    <x-inputs.panel.text
                                        class="align-items-end flex-48 m-flex-100 mr-9 m-mr-0"
                                        wire:model="form.config.merchantId"
                                        label="مرچند"
                                        placeholder="مرچند خود را بنویسید"
                                    />

                                    <x-inputs.panel.textarea
                                        class="align-items-end flex-48 m-flex-100 mr-9 m-mr-0"
                                        wire:model="form.config.description"
                                        label="توضیحات داخل درگاه"
                                        placeholder="مرچند خود را بنویسید"
                                    />

                                    <x-inputs.panel.money
                                        class="align-items-end flex-48 m-flex-100 mr-9 m-mr-0"
                                        wire:model="form.price"
                                        label="قیمت اصلی"
                                    />

                                    <x-inputs.panel.money
                                        class="align-items-end flex-48 m-flex-100 mr-9 m-mr-0"
                                        wire:model="form.sell_price"
                                        label="قیمت فروش"
                                    />
                                @endif


                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-design bg-white px-5 py-15 mb-12">


                    <div class="c-data">
                        <!--! title  -->
                        <div class="rx-title pb-10 justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="text pr-7">
                                    <h6>فیلد ها</h6>

                                </div>
                                <div class="p-rx ">
                                    <div class="rx-border-rectangle"></div>
                                    <div class="rx-border-rectangle-after"></div>
                                </div>
                            </div>

                        </div>

                        <!--! data form  -->
                        <div class="my-10 mx-7">

                            <div class="d-flex flex-wrap align-items-center justify-content-between">

                                @foreach($form->formInputs as $block)
                                    <div class="d-flex box-design flex-93 align-items-center mt-15 py-10 px-5 mx-15">
                                        <div class="flex-5">
                                            <button type="button" wire:click="deleteComponent({{$block['id']}} , {{ $block['component_type'] }})"
                                                    class="bg-danger parnas-data d-flex align-items-center justify-content-center ml-5"
                                                    style="border-radius: 10px;width:35px;height:35px">
                                                <div class="image tooltip d-flex cursor-pointer">
                                                    <svg width="20" height="20" viewBox="0 0 31 31"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.7852 19.2988L12.7852 15.4647"
                                                              stroke="#fff" stroke-width="2"
                                                              stroke-linecap="round"/>
                                                        <path d="M17.8828 19.2988L17.8828 15.4647"
                                                              stroke="#fff" stroke-width="2"
                                                              stroke-linecap="round"/>
                                                        <path
                                                            d="M3.85938 9.07617H26.8071V9.07617C25.0914 9.07617 24.2336 9.07617 23.6689 9.56799C23.5996 9.62832 23.5346 9.69336 23.4743 9.76264C22.9824 10.3273 22.9824 11.1851 22.9824 12.9008V21.6909C22.9824 23.5765 22.9824 24.5193 22.3967 25.1051C21.8109 25.6909 20.8681 25.6909 18.9824 25.6909H11.684C9.79837 25.6909 8.85556 25.6909 8.26977 25.1051C7.68399 24.5193 7.68399 23.5765 7.68399 21.6909V12.9008C7.68399 11.1851 7.68399 10.3273 7.19217 9.76264C7.13184 9.69336 7.0668 9.62832 6.99752 9.56799C6.43283 9.07617 5.57501 9.07617 3.85938 9.07617V9.07617Z"
                                                            stroke="#fff" stroke-width="2"
                                                            stroke-linecap="round"/>
                                                        <path
                                                            d="M12.8702 4.43653C13.0155 4.30065 13.3356 4.18058 13.7809 4.09494C14.2262 4.00931 14.7718 3.96289 15.3331 3.96289C15.8944 3.96289 16.44 4.00931 16.8853 4.09494C17.3306 4.18058 17.6507 4.30065 17.7959 4.43653"
                                                            stroke="#fff" stroke-width="2"
                                                            stroke-linecap="round"/>
                                                    </svg>
                                                    <div class="s-tooltip">
                                                        <span>حذف</span>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div class="flex-25">
                                            <span class="f-13">{{ $block['input_label'] }}</span>
                                        </div>

                                        <div class="flex-60 d-flex justify-content-end">
                                            <button type="button"
                                                    wire:click="$dispatch('openModal', {component:'formbuilder::panel.utils.component-setting', arguments:{inputId:@js($block['id'])}})"
                                                    class="image flex-10 d-flex align-items-center justify-content-center py-20">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                          d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    @if(!empty($block['data']['column'] ?? 0))
                                        <div class="d-flex flex-wrap flex-100">
                                            @if($block['data']['column'] - count($block['children']) > 0)
                                                @foreach(range(1 , $block['data']['column'] - count($block['children'])) as $column)
                                                    <button type="button"
                                                            wire:click="$dispatch('openModal', {component: 'formbuilder::panel.utils.component-selector' , arguments:{formId: @js($formId) , inputId: @js($block['id'])}})"
                                                            class="image flex-25 d-flex align-items-center justify-content-center py-20 m-right-auto m-left-auto ">
                                                        <svg class="border-dashed-1 border-secondary radius-10 cursor-pointer"
                                                             width="30"
                                                             height="30" viewBox="0 0 32 32" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M15.9375 8.02344L15.9375 23.3601" stroke="#333"
                                                                  stroke-width="2" stroke-linecap="round"/>
                                                            <path d="M23.5898 15.6914L8.29139 15.6914" stroke="#333"
                                                                  stroke-width="2" stroke-linecap="round"/>
                                                        </svg>
                                                    </button>
                                                @endforeach
                                            @endif
                                            @foreach($block['children'] as $child)
                                                <div
                                                    class="d-flex box-design {{ $block['data']['column'] == 1 ? 'flex-90' : 'flex-45' }} align-items-center mt-15 py-10 px-5 mx-5">
                                                    <div class="flex-12">
                                                        <button type="button" wire:click="deleteComponent({{$child['id']}})"
                                                                class="bg-danger parnas-data d-flex align-items-center justify-content-center ml-5"
                                                                style="border-radius: 10px;width:35px;height:35px">
                                                            <div class="image tooltip d-flex cursor-pointer">
                                                                <svg width="20" height="20" viewBox="0 0 31 31"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M12.7852 19.2988L12.7852 15.4647"
                                                                          stroke="#fff" stroke-width="2"
                                                                          stroke-linecap="round"/>
                                                                    <path d="M17.8828 19.2988L17.8828 15.4647"
                                                                          stroke="#fff" stroke-width="2"
                                                                          stroke-linecap="round"/>
                                                                    <path
                                                                        d="M3.85938 9.07617H26.8071V9.07617C25.0914 9.07617 24.2336 9.07617 23.6689 9.56799C23.5996 9.62832 23.5346 9.69336 23.4743 9.76264C22.9824 10.3273 22.9824 11.1851 22.9824 12.9008V21.6909C22.9824 23.5765 22.9824 24.5193 22.3967 25.1051C21.8109 25.6909 20.8681 25.6909 18.9824 25.6909H11.684C9.79837 25.6909 8.85556 25.6909 8.26977 25.1051C7.68399 24.5193 7.68399 23.5765 7.68399 21.6909V12.9008C7.68399 11.1851 7.68399 10.3273 7.19217 9.76264C7.13184 9.69336 7.0668 9.62832 6.99752 9.56799C6.43283 9.07617 5.57501 9.07617 3.85938 9.07617V9.07617Z"
                                                                        stroke="#fff" stroke-width="2"
                                                                        stroke-linecap="round"/>
                                                                    <path
                                                                        d="M12.8702 4.43653C13.0155 4.30065 13.3356 4.18058 13.7809 4.09494C14.2262 4.00931 14.7718 3.96289 15.3331 3.96289C15.8944 3.96289 16.44 4.00931 16.8853 4.09494C17.3306 4.18058 17.6507 4.30065 17.7959 4.43653"
                                                                        stroke="#fff" stroke-width="2"
                                                                        stroke-linecap="round"/>
                                                                </svg>
                                                                <div class="s-tooltip">
                                                                    <span>حذف</span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="flex-30">
                                                        <span class="f-13">{{ $child['input_label'] }}</span>
                                                    </div>

                                                    <div class="flex-48 d-flex justify-content-end">
                                                        <button type="button"
                                                                wire:click="$dispatch('openModal', {component:'formbuilder::panel.utils.component-setting', arguments:{inputId:@js($child['id'])}})"
                                                                class="image d-flex align-items-center justify-content-center py-20">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                 fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd"
                                                                      d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"/>
                                                            </svg>
                                                        </button>
                                                    </div>


                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                @endforeach

                                    <button type="button"
                                            wire:click="$dispatch('openModal', {component: 'formbuilder::panel.utils.component-selector' , arguments: {formId: @js($formId)}})"
                                            class="image flex-10 d-flex align-items-center justify-content-center py-20 m-right-auto m-left-auto ">
                                        <svg class="border-dashed-1 border-secondary radius-10 cursor-pointer" width="30"
                                             height="30" viewBox="0 0 32 32" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.9375 8.02344L15.9375 23.3601" stroke="#333"
                                                  stroke-width="2" stroke-linecap="round"/>
                                            <path d="M23.5898 15.6914L8.29139 15.6914" stroke="#333"
                                                  stroke-width="2" stroke-linecap="round"/>
                                        </svg>
                                    </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--! c-left -->
            <div class="c-left sticky-data flex-28">
                <div>
                    <div>
                        <div class="box-design bg-white p-7 mb-10">

                            <!--? insert data  -->
                            <x-buttons.panel.button class="justify-content-end pt-8 mb-10">
                                ایجاد فرم
                            </x-buttons.panel.button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
