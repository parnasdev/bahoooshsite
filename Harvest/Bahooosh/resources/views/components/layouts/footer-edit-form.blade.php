@props(['blockForm'])

<x-forms.panel.component-edit-base :title="$blockForm->title">
    <div
        class="p-component-design d-flex flex-wrap align-items-start justify-content-start flex-100 mt-15 pl-15 pr-15 scroller">
        {{-- child over slider  --}}
        <div class="d-flex flex-wrap flex-100 justify-content-between w-100">
            <x-inputs.panel.single-file-picker class="justify-content-end flex-48" label="لوگو فوتر" wire:model="blockForm.data.footer_logo" />
            <x-inputs.panel.text class="justify-content-end flex-48" label="آدرس" wire:model="blockForm.data.address"/>
            <x-inputs.panel.text class="justify-content-end flex-48" label="شماره تلفن" wire:model="blockForm.data.tel"/>
            <x-inputs.panel.text class="justify-content-end flex-48" label="ساعت کاری" wire:model="blockForm.data.working_hours"/>
            <x-inputs.panel.text class="justify-content-end flex-48" label="ایمیل" wire:model="blockForm.data.email"/>
            <x-inputs.panel.text class="justify-content-end flex-48" label="عنوان" wire:model="blockForm.data.footer_title"/>
            <x-inputs.panel.textarea class="justify-content-end flex-48" label="متن" wire:model="blockForm.data.footer_text"/>
            <x-inputs.panel.textarea class="justify-content-end flex-48" label="متن کپی رایت" wire:model="blockForm.data.copyright_text"/>
            <x-inputs.panel.text class="justify-content-end flex-48" label="سال کپی رایت" wire:model="blockForm.data.copyright_year"/>
        </div>

        <div class="d-flex flex-wrap flex-100 w-100">
            <x-inputs.panel.text class="justify-content-end flex-86" label="عنوان social media" wire:model="blockForm.data.social_title"/>
            <x-buttons.panel.button type="button" class="justify-content-end mb-10 mr-10"  wire:click="addSocialLink">
                <x-utils.icons icon="plus" fill="#fff" />
            </x-buttons.panel.button>

            @foreach($blockForm->data['social_links'] as $index => $social_link)
                <div class="d-flex flex-wrap justify-content-between align-items-center mb-15 flex-100">
                    <div class="flex-5"><span class="f-16 f-bold">{{ $index + 1 }}</span></div>
                    <x-inputs.panel.single-file-picker class="flex-30" label="عکس" wire:model="blockForm.data.social_links.{{ $index }}.image_url" />
                    <x-inputs.panel.text class="flex-20" label="نام کاربری" wire:model="blockForm.data.social_links.{{ $index }}.username" />
                    <x-inputs.panel.text class="flex-30" label="لینک " wire:model="blockForm.data.social_links.{{ $index }}.link" />
                    <x-inputs.panel.swich class="flex-48" rightLabel="نمایش نام کربری" wire:model="blockForm.data.social_links.{{ $index }}.show_username" />
                    <x-buttons.panel.button type="button" class="justify-content-end flex-10" color="danger" wire:click="deleteSocialLink({{ $index }})">
                        <x-utils.icons icon="trash" fill="#fff" />
                    </x-buttons.panel.button>
                </div>
            @endforeach
        </div>

        <div class="d-flex flex-wrap flex-100 w-100 mt-15">
            <div class="d-flex justify-content-start m-left-auto pos-relative pr-5">
                <label class="d-flex f-14 text-63">
                    نماد ها
                    <div class="rx-title title-input pb-10">
                        <div class="p-rx">
                            <div class="rx-border-rectangle-after label-input"></div>
                        </div>
                    </div>
                </label>
            </div>
            <x-buttons.panel.button type="button" class="justify-content-end mb-10"  wire:click="addLicence">
                <x-utils.icons icon="plus" fill="#fff" />
            </x-buttons.panel.button>

            @foreach($blockForm->data['licences'] as $index1 => $social_link)
                <div class="d-flex flex-wrap justify-content-between align-items-center flex-100 mb-10">
                    <div class="flex-5"><span class="f-16 f-bold">{{ $index + 1 }}</span></div>
                    <x-inputs.panel.textarea class="flex-20" label="کد نماد" wire:model="blockForm.data.licences.{{ $index1 }}.code" />
                    <x-buttons.panel.button type="button" class="justify-content-end flex-10" color="danger" wire:click="deleteLicence({{ $index1 }})">
                        <x-utils.icons icon="trash" fill="#fff" />
                    </x-buttons.panel.button>
                </div>
            @endforeach
        </div>


    </div>
</x-forms.panel.component-edit-base>
