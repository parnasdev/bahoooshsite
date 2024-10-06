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
                        <div class="rx-title pb-10">
                            <div class="text">
                                <h6>مشخصات</h6>
                            </div>
                            <div class="p-rx ">
                                <div class="rx-border-rectangle"></div>
                                <div class="rx-border-rectangle-after"></div>
                            </div>
                        </div>
                        <!--! data form  -->
                        <div class="my-10 ml-5">
                            @if($cat_type != 'tag')
                                <x-inputs.panel.select
                                    placeholder="نوع {{ __($cat_type) }}"
                                    :options="$categories"
                                    wire:model="category.parent_id">
                                </x-inputs.panel.select>
                            @endif
                            <x-inputs.panel.text label="نام" wire:model="category.name" wire:change="generateSlug" />
                            <x-inputs.panel.text label="لینک صفحه" wire:model="category.slug" wire:change="generateSlug" />
                            <x-inputs.panel.textarea label="توضیحات کوتاه" wire:model="category.description" />
                        </div>
                    </div>
                </div>
            </div>
            <!--! c-left -->
            <div class="c-left sticky-data flex-28">
                @if($cat_type != 'tag')
                    <x-inputs.panel.file-picker wire:model.live="files" :files="$files" direction="categories"/>
                @endif
                <div class="box-design bg-white py-10 mt-10">
                    <div class="mx-8">
                        <!--? insert data  -->
                        <div class="c-btn justify-content-end py-8 pr-8">
                            <button class="btn bg-success text-white radius-5">ثبت
                                {{ __($cat_type)  }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
