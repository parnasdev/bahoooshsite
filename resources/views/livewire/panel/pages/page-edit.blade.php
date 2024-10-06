<div>
    <div x-data="{
                init() {
                    for (item of @js($errors->all()))
                        $dispatch('toast-message' , {message: item , icon: 'danger'})
                }
            }">
    </div>
    <form wire:submit="submit">
        <div
            class="main-data flex-100 d-flex align-items-start m-align-items-stretch justify-content-between mx-10 mb-5 mt-13">
            <!--! c-right -->
            <div class="c-right flex-70 mb-15">
                <!--? row form  -->
                <div class="box-design bg-white px-5 py-15 mb-12">


                    <div class="c-data">
                        <!--! title  -->
                        <div class="rx-title pb-10">
                            <div class="text pr-7">
                                <h6>مشخصات صفحه</h6>
                            </div>
                            <div class="p-rx ">
                                <div class="rx-border-rectangle"></div>
                                <div class="rx-border-rectangle-after"></div>
                            </div>
                        </div>

                        <!--! data form  -->
                        <div class="my-10 mx-7">
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <!--? select -->
                                <x-inputs.panel.text wire:model="post.title"
                                                     class="align-items-end flex-48 m-flex-100 mr-9 m-mr-0"
                                                     label="عنوان"
                                                     placeholder="عنوان خود را بنویسید"
                                                     wire:change="generateSlug"
                                />
                                <x-inputs.panel.text wire:model="post.slug"
                                                     class="align-items-end flex-48 m-flex-100 mr-9 m-mr-0"
                                                     label=" لینک صفحه"
                                                     placeholder="لینک صفحه خود را بنویسید"
                                                     wire:change="generateSlug"
                                />

                                <x-inputs.panel.textarea wire:model="post.description"
                                                         class="align-items-end flex-100 mr-9 m-mr-0"
                                                         label="توضیحات کوتاه"
                                                         placeholder="توضیحات کوتاه خود را بنویسید"
                                />
                                <div class="align-items-end flex-99 mr-9 m-mr-0 mb-2">
                                    <div wire:ignore>
                                        <x-inputs.panel.tag wire:model="post.selectedTag"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-design bg-white mb-10 p-10 py-9">
                    <div class="c-data">
                        <div class="rx-title pb-10">
                            <div class="text">
                                <h6>تنظیمات پیشرفته</h6>
                            </div>
                            <div class="p-rx">
                                <div class="rx-border-rectangle"></div>
                                <div class="rx-border-rectangle-after"></div>
                            </div>
                        </div>
                        <x-inputs.panel.checkbox wire:model="post.pin" class="flex-50 justify-content-start pr-10"
                                                 label=" نمایش در بالای لیست"/>
                        <x-inputs.panel.select class="flex-50 mb-10"
                                               label="نوع صفحه"
                                               :options="$pageTypes"
                                               wire:model.live="post.options.page_type">
                        </x-inputs.panel.select>
                    </div>
                </div>


                @if($post->options['page_type'] == \App\Enums\PageType::TEXT_MODE->value)
                    <div class="box-design bg-white px-5 py-15 mb-12" wire:ignore>
                        <x-inputs.panel.editor id="{{ \Illuminate\Support\Str::random(4) }}" label="متن"
                                               wire:model="post.body"/>
                    </div>
                @endif
                @if($post->options['page_type'] == \App\Enums\PageType::BUILDER_MODE->value)
                    <div
                        class="show-data flex-100 bg-white py-20 radius-10 mb-10"
                        x-data="{
                            components: @entangle('components'),
                            addComponent(e) {
                                let { component } = e.detail
                                this.components.push(component);
                            },
                            deleteComponent(index) {
                                this.components.splice(index , 1)
                            },
                            goUp(index) {
                                let temp = this.components[index];
                                this.components.splice(index, 1);
                                this.components.splice(index-1, 0, temp);
                             },
                             goDown(index) {
                                let temp = this.components[index];
                                this.components.splice(index, 1);
                                this.components.splice(index+1, 0, temp);
                             }
                        }" @add-component.window="addComponent">

                        <div class="rx-title pb-10">
                            <div class="text pr-7">
                                <h6>کامپوننت های صفحه</h6>
                            </div>
                            <div class="p-rx ">
                                <div class="rx-border-rectangle"></div>
                                <div class="rx-border-rectangle-after"></div>
                            </div>
                        </div>
                        <template x-for="(item , index) in components" :key="'component' + index">
                            <div class="d-flex box-design flex-100 align-items-center mt-15 py-10 px-5 mx-15">
                                <div class="flex-5">
                                    <button type="button" @click="deleteComponent(index)"
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
                                <div class="d-flex flex-10 align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-secondary radius-10 py-4 px-6 mr-3"
                                             x-show="index < components.length - 1"
                                        >
                                            <div
                                                class="d-flex flex-direction-column align-items-center justify-content-center m-auto">
                                                <button type="button"
                                                        @click="goDown(index)"
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
                                        <div class="bg-secondary radius-10 py-4 px-6 mr-3" x-show="index > 0">
                                            <div
                                                class="d-flex flex-direction-column align-items-center justify-content-center m-auto">
                                                <button type="button"
                                                        @click="goUp(index)"
                                                >

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
                                </div>
                                <div class="flex-25">
                                    <span class="f-13" x-text="item.title"></span>
                                </div>

                                <div class="flex-60 d-flex justify-content-end">

                                    <button type="button"
                                            @click="$dispatch('openModal', {component:'tenant.panel.page-builder.component-preview-modal', arguments: { component:item.name , data: item.data} })"
                                            class="image flex-10 d-flex align-items-center justify-content-center py-20">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-binoculars" viewBox="0 0 16 16">
                                            <path
                                                d="M3 2.5A1.5 1.5 0 0 1 4.5 1h1A1.5 1.5 0 0 1 7 2.5V5h2V2.5A1.5 1.5 0 0 1 10.5 1h1A1.5 1.5 0 0 1 13 2.5v2.382a.5.5 0 0 0 .276.447l.895.447A1.5 1.5 0 0 1 15 7.118V14.5a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 14.5v-3a.5.5 0 0 1 .146-.354l.854-.853V9.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v.793l.854.853A.5.5 0 0 1 7 11.5v3A1.5 1.5 0 0 1 5.5 16h-3A1.5 1.5 0 0 1 1 14.5V7.118a1.5 1.5 0 0 1 .83-1.342l.894-.447A.5.5 0 0 0 3 4.882V2.5zM4.5 2a.5.5 0 0 0-.5.5V3h2v-.5a.5.5 0 0 0-.5-.5h-1zM6 4H4v.882a1.5 1.5 0 0 1-.83 1.342l-.894.447A.5.5 0 0 0 2 7.118V13h4v-1.293l-.854-.853A.5.5 0 0 1 5 10.5v-1A1.5 1.5 0 0 1 6.5 8h3A1.5 1.5 0 0 1 11 9.5v1a.5.5 0 0 1-.146.354l-.854.853V13h4V7.118a.5.5 0 0 0-.276-.447l-.895-.447A1.5 1.5 0 0 1 12 4.882V4h-2v1.5a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V4zm4-1h2v-.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5V3zm4 11h-4v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V14zm-8 0H2v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V14z"/>
                                        </svg>
                                    </button>

                                    <div class="c-switch ml-10">
                                    <span class="f-13 pb-5">
                                        نمایش
                                    </span>
                                        <label for="" class="f-12 mt-5">
                                            <input class='ios-switch __custom' type="checkbox" value="1"
                                                   x-model="item.show"/>
                                        </label>
                                        <span class="f-13 pb-5">
                                        عدم نمایش
                                    </span>
                                    </div>
                                    <button type="button"
                                            @click="$dispatch('openModal', {component:'tenant.panel.component-setting', arguments:{loadComponent:item.name, data:item.data, show:item.show , index:index}})"
                                            class="image flex-10 d-flex align-items-center justify-content-center py-20">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                  d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </template>
                        <div
                            class="image flex-10 d-flex align-items-center justify-content-center py-20 m-right-auto m-left-auto">

                        </div>
                        <button type="button"
                                wire:click="$dispatch('openModal', {component: 'panel.utils.components-selector'})"
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
                @endif
            </div>
            <!--! c-left -->
            <div class="c-left sticky-data flex-28">
                <div>
                    <x-inputs.panel.file-picker wire:model="files"
                                                :files="$files" direction="posts"/>
                    <div>
                        <div class="box-design bg-white p-7 mb-10">
                            <!--? select -->
                            <x-inputs.panel.select class="mb-10"
                                                   label="وضعیت"
                                                   :options="$statuses"
                                                   wire:model="post.status">
                            </x-inputs.panel.select>
                        </div>
                        <div class="box-design bg-white p-7 mb-10">

                            <!--? insert data  -->
                            <x-buttons.panel.button class="justify-content-end pt-8 mb-10" color="primary">
                                ویرایش صفحه ها
                            </x-buttons.panel.button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
