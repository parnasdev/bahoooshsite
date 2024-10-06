<div>
    <form wire:submit="submit">
        <div
            class="main-data flex-100 d-flex align-items-start m-align-items-stretch justify-content-between mx-10 mb-5 mt-13">
            <div class="flex-100">
                <div class="mb-15">
                    {{-- row form --}}
                    <div class="dark-theme box-design bg-white px-10 py-14 pos-relative">
                        <div class="c-data">
                            <div class="rx-title pb-3">
                                <div class="main-data flex-100 d-flex justify-content-between">
                                    <div class="title d-flex align-items-center pb-10">
                                        <div class="text">
                                            <h6>اطلاعات کاربر</h6>
                                        </div>
                                        <div class="p-rx">
                                            <div class="rx-border-rectangle"></div>
                                            <div class="rx-border-rectangle-after"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-10">
                                <div class="flex-100 d-flex justify-content-between flex-wrap">
                                    <x-inputs.panel.text class="flex-49 m-flex-100 mb-10" label="نام"
                                                         wire:model="user.name"/>
                                    <x-inputs.panel.text class="flex-49 m-flex-100 mb-10" label="نام خانوادگی"
                                                         wire:model="user.family"/>
                                    <x-inputs.panel.text class="flex-49 m-flex-100 mb-10" label="نام کاربری"
                                                         wire:model="user.username"/>
                                    <x-inputs.panel.text class="flex-49 m-flex-100 mb-10" label="شماره تلفن"
                                                         wire:model="user.phone"/>
                                    <x-inputs.panel.select class="flex-49 m-flex-100 mb-10" label="مقام"
                                                           placeholder="-"
                                                           :disabled="user()->id == $user->user->id"
                                                           :options="$roles" wire:model="user.role_id"/>
                                    <div class="flex-49 m-flex-100 mb-10 d-flex align-items-center">
                                        <p class="f-14 text-danger">یکی از موارد (شماره همراه ، نام کاربری)
                                            الزامی میباشد.</p>
                                    </div>
                                    <div class="flex-49 m-flex-100 mb-10">
                                        {{-- data form --}}
                                        <x-inputs.panel.file-picker wire:model.live="files" :files="$files"
                                                                    direction="users"/>
                                    </div>
                                </div>
                                <x-buttons.panel.button class="justify-content-end mb-2">
                                    ثبت کاربر
                                </x-buttons.panel.button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
