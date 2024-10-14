<div>
    <div
        class="main-data flex-100 d-flex align-items-start m-align-items-stretch justify-content-between mx-10 mb-5 mt-13">
        <div class="flex-100">
            <div class="mb-15">
                <!--? row form  -->
                <div class="dark-theme box-design bg-white px-10 py-14 pos-relative">
                    <div class="c-data">
                        <!--! title  -->
                        <div class="rx-title pb-3">
                            <div class="main-data flex-100 d-flex justify-content-between">
                                <div class="title d-flex align-items-center pb-10">
                                    <div class="text">
                                        <h6>ایجاد مقام</h6>
                                    </div>
                                    <div class="p-rx">
                                        <div class="rx-border-rectangle"></div>
                                        <div class="rx-border-rectangle-after"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="my-10">
                            <form wire:submit="submit">
                                <div class="d-flex align-items-start justify-content-start flex-wrap">
                                    <x-inputs.panel.text label="نام" class="flex-48 mb-2 ml-20" wire:model="roleForm.name" />
                                    <x-inputs.panel.text label="برچسب" class="flex-48 mb-2 ml-20" wire:model="roleForm.label" />
                                    <x-inputs.panel.select-multiple label="دسترسی ها" class="flex-48 mb-2 ml-20" wire:model="permissionIds" :options="$permissions" />
                                </div>
                                <div class="d-flex flex-100 justify-content-end">
                                    <x-buttons.panel.link color="info" route="{{ route('panel.roles.index') }}" class="justify-content-end mt-10 ml-15">
                                        برگشت
                                    </x-buttons.panel.link>
                                <x-buttons.panel.button class="justify-content-end mt-10 ">
                                    ثبت مقام
                                </x-buttons.panel.button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
