<div>
    @if(!empty($link))
        <div class="pt-6 pb-6" x-data="{show: false}">
            <div
                class="d-flex align-items-center justify-content-between bg-light box-design border-dashed-1 border-secondary radius-10 px-8 py-14 mb-7">
                {{-- right --}}
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center">
                        <div class="bg-secondary radius-10 py-4 px-6 mr-3"
                        >
                            <div
                                class="d-flex flex-direction-column align-items-center justify-content-center m-auto">
                                <button type="button"
                                        wire:click="goDown()"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8"
                                         height="8" viewBox="0 0 11.905 6.803">
                                        <path id="Down_Arrow_1" data-name="Down Arrow 1"
                                              d="M.249,1.452l5.1,5.1a.85.85,0,0,0,1.2,0l5.1-5.1a.85.85,0,1,0-1.2-1.2l-4.5,4.5-4.5-4.5a.85.85,0,0,0-1.2,1.2Z"
                                              fill="#fff"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="bg-secondary radius-10 py-4 px-6 mr-3">
                            <div
                                class="d-flex flex-direction-column align-items-center justify-content-center m-auto">
                                <button type="button"
                                        wire:click="goUp()">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8"
                                         viewBox="0 0 14.828 8.414">
                                        <path id="Up_Arrow_1" data-name="Up Arrow 1"
                                              d="M1,7,7,1l6,6" transform="translate(0.414)"
                                              fill="none" stroke="#fff" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="2"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <svg class="mt-5 mr-15" id="Attachment_2" data-name="Attachment 2"
                         xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                         viewBox="0 0 18 25">
                        <path id="Path_819" data-name="Path 819"
                              d="M7.821,9.042a1.017,1.017,0,0,0-1.247.721C4.7,17,5.233,18.837,9.123,19.87c4.06,1.079,5.4-.416,7.573-8.47S18.467,1.388,14.407.309C12-.331,10.549-.065,9.314,1.937A.931.931,0,0,0,9.919,3.31l.033.009a1.14,1.14,0,0,0,1.218-.5,3.328,3.328,0,0,1,.271-.352,1.079,1.079,0,0,1,.693-.418,4.509,4.509,0,0,1,1.743.22A4.492,4.492,0,0,1,15.5,2.94a1.066,1.066,0,0,1,.39.706,7.389,7.389,0,0,1-.081,2.471,45.876,45.876,0,0,1-1.085,4.76,45.909,45.909,0,0,1-1.46,4.66,7.431,7.431,0,0,1-1.175,2.18,1.079,1.079,0,0,1-.693.418,4.51,4.51,0,0,1-1.744-.22A4.493,4.493,0,0,1,8.03,17.24a1.066,1.066,0,0,1-.39-.706,7.388,7.388,0,0,1,.081-2.471c.156-1.013.429-2.25.826-3.78A1.02,1.02,0,0,0,7.821,9.042Z"
                              fill="#212135"/>
                        <path id="Path_820" data-name="Path 820"
                              d="M4.121,22.735a4.511,4.511,0,0,0,1.744.22,1.079,1.079,0,0,0,.693-.418,3.336,3.336,0,0,0,.271-.352,1.139,1.139,0,0,1,1.218-.5l.033.009a.931.931,0,0,1,.605,1.373c-1.235,2-2.685,2.267-5.093,1.627C-.467,23.612-.871,21.654,1.3,13.6S4.817,4.051,8.877,5.13C12.767,6.163,13.3,8,11.426,15.237a1.02,1.02,0,0,1-1.973-.52c.4-1.53.67-2.767.826-3.78a7.386,7.386,0,0,0,.081-2.471,1.066,1.066,0,0,0-.39-.706,4.493,4.493,0,0,0-1.621-.674,4.509,4.509,0,0,0-1.744-.22,1.079,1.079,0,0,0-.693.418,7.43,7.43,0,0,0-1.175,2.18,45.9,45.9,0,0,0-1.46,4.66,45.864,45.864,0,0,0-1.085,4.76,7.388,7.388,0,0,0-.081,2.471,1.066,1.066,0,0,0,.39.706A4.493,4.493,0,0,0,4.121,22.735Z"
                              fill="#212135"/>
                    </svg>
                    <span class="f-15 px-7">{{ $linkForm->title }}</span>
                </div>
                {{-- left --}}
                <div class="d-flex align-items-center">
                    <div class="ml-3">
                        {{-- add menu --}}
                        <div
                            class="d-flex flex-direction-column align-items-center justify-content-center m-auto">
                            <button type="button"
                                    @click="show = true;$nextTick(() => {$dispatch('openModal' ,{component: 'panel.links.link-select-modal' ,arguments: {'link_type': @js($link->type->value) , 'index': @js($link->id)}});} )"
                                    class="btn d-flex align-items-center justify-content-center text-white radius-5">
                                <svg width="21" height="21" viewBox="0 0 32 32"
                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.9375 8.02344L15.9375 23.3601" stroke="#008b40"
                                          stroke-width="2" stroke-linecap="round"/>
                                    <path d="M23.5898 15.6914L8.29139 15.6914" stroke="#008b40"
                                          stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="ml-3">
                        {{-- sub menu --}}
                        <div
                            class="d-flex flex-direction-column align-items-center justify-content-center m-auto">
                            <button type="button"
                                    @click="show = !show">
                                <svg xmlns="http://www.w3.org/2000/svg" width="11.905"
                                     height="6.803" viewBox="0 0 11.905 6.803">
                                    <path id="Down_Arrow_1" data-name="Down Arrow 1"
                                          d="M.249,1.452l5.1,5.1a.85.85,0,0,0,1.2,0l5.1-5.1a.85.85,0,1,0-1.2-1.2l-4.5,4.5-4.5-4.5a.85.85,0,0,0-1.2,1.2Z"
                                          fill="#007bff"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="ml-3">
                        {{-- delete --}}
                        @can('links.delete')
                        <button class="btn d-flex align-items-center text-white"
                                type="button"
                                wire:click="destroy()">
                            <svg width="20" height="20" viewBox="0 0 31 31"
                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.7852 19.2988L12.7852 15.4647" stroke="#ea4141"
                                      stroke-width="2" stroke-linecap="round"/>
                                <path d="M17.8828 19.2988L17.8828 15.4647" stroke="#ea4141"
                                      stroke-width="2" stroke-linecap="round"/>
                                <path
                                    d="M3.85938 9.07617H26.8071V9.07617C25.0914 9.07617 24.2336 9.07617 23.6689 9.56799C23.5996 9.62832 23.5346 9.69336 23.4743 9.76264C22.9824 10.3273 22.9824 11.1851 22.9824 12.9008V21.6909C22.9824 23.5765 22.9824 24.5193 22.3967 25.1051C21.8109 25.6909 20.8681 25.6909 18.9824 25.6909H11.684C9.79837 25.6909 8.85556 25.6909 8.26977 25.1051C7.68399 24.5193 7.68399 23.5765 7.68399 21.6909V12.9008C7.68399 11.1851 7.68399 10.3273 7.19217 9.76264C7.13184 9.69336 7.0668 9.62832 6.99752 9.56799C6.43283 9.07617 5.57501 9.07617 3.85938 9.07617V9.07617Z"
                                    stroke="#ea4141" stroke-width="2" stroke-linecap="round"/>
                                <path
                                    d="M12.8702 4.43653C13.0155 4.30065 13.3356 4.18058 13.7809 4.09494C14.2262 4.00931 14.7718 3.96289 15.3331 3.96289C15.8944 3.96289 16.44 4.00931 16.8853 4.09494C17.3306 4.18058 17.6507 4.30065 17.7959 4.43653"
                                    stroke="#ea4141" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </button>
                        @endcan
                    </div>
                </div>
            </div>
            <div x-show="show">
                <div
                    class="flex-100 m-flex-100 d-flex flex-wrap bg-light box-design border-dashed-1 border-secondary radius-10 mb-10 mz-10 mb-7">
                    {{-- part menu detail --}}
                    <div class="w-100 py-17 px-10">
                        <form wire:submit="submit">
                            <div class="d-flex flex-wrap align-items-center pr-10">
                                {{-- input --}}
                                <x-inputs.panel.text class="flex-32 mr-9 m-mr-0 mb-10" label="عنوان"
                                                     wire:model="linkForm.title"/>

                                @if(empty($link->linktable))
                                    <x-inputs.panel.text class="flex-32 mr-9 m-mr-0 mb-10" label="پیوند"
                                                         wire:model="linkForm.href"
                                                         :disabled="!$linkForm->is_link"
                                    />
                                @endif

                                {{-- input --}}
                                {{-- <x-parnas.inputs.icon-selector x-model="link1.icon" /> --}}
                                {{--                            <x-utils.icons :icon="$linkForm->icon['name'] ?? ''" :width="$linkForm->icon['width'] ?? '20'" :height="$linkForm->icon['height'] ?? '20'" />--}}
                                {{--                        <x-inputs.panel.file-picker wire:model="files" />--}}
                                <x-inputs.panel.checkbox class="flex-32 mr-9 m-mr-0 mb-10"
                                                         wire:model.live="linkForm.is_link" label="فعالسازی پیوند"/>

                                <x-inputs.panel.select class="flex-32 mr-9 m-mr-0 mb-10" class="flex-48" label="وضعیت"
                                                       wire:model="linkForm.status" :options="$statuses"/>
                                @can('links.edit')
                                    <x-buttons.panel.button class="flex-99 justify-content-end mt-9" color="primary">
                                        بروزرسانی
                                    </x-buttons.panel.button>
                                @endcan
                            </div>
                        </form>
                    </div>
                </div>
                {{-- child to child level 2 --}}
               <div class="flex-90 pr-40">
                   @foreach($children as $child)
                       <livewire:panel.links.link-item :link="$child" :key="$child->id"/>
                   @endforeach
               </div>
            </div>
        </div>
    @endif
</div>
