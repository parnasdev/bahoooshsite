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
                                <h6>مشخصات نوشته</h6>
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
                                <div class="flex-99 m-flex-100 mr-9 m-mr-0 mb-10">
                                    <x-inputs.panel.category-select label="دسته‌بندی" :categories="$categories" wire:model="post.categoryIds"/>
                                </div>
                                <x-inputs.panel.text  wire:model="post.title"
                                                      class="align-items-end flex-48 m-flex-100 mr-9 m-mr-0"
                                                      label="عنوان"
                                                      placeholder="عنوان خود را بنویسید"
                                                      wire:change="generateSlug"
                                />
                                <x-inputs.panel.text  wire:model="post.slug"
                                                      class="align-items-end flex-48 m-flex-100 mr-9 m-mr-0"
                                                      label=" لینک صفحه"
                                                      placeholder="لینک صفحه خود را بنویسید"
                                                      wire:change="generateSlug"
                                />

                                <x-inputs.panel.textarea  wire:model="post.description"
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
                        <x-inputs.panel.checkbox  wire:model="post.pin" class="flex-50 justify-content-start pr-10" label=" نمایش در بالای لیست" />
                    </div>
                </div>


                <div class="box-design bg-white px-5 py-15 mb-12" wire:ignore>
                    <x-inputs.panel.editor id="body" label="متن" wire:model.live="post.body" />
                </div>

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
                                ویرایش نوشته
                            </x-buttons.panel.button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
