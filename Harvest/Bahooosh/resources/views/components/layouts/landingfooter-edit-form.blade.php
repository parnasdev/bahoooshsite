@props(['blockForm'])

<x-forms.panel.component-edit-base :title="$blockForm->title">
    <div
        class="p-component-design d-flex flex-wrap align-items-start justify-content-start flex-100 mt-15 pl-15 pr-15 scroller">
        {{-- child over slider  --}}
        <div class="d-flex flex-wrap flex-100 justify-content-between w-100">
            <x-inputs.panel.text class="justify-content-end flex-48" label="عنوان" wire:model="blockForm.data.footer_title"/>
            <x-inputs.panel.textarea class="justify-content-end flex-48" label="متن کپی رایت" wire:model="blockForm.data.copyright_text"/>
            <x-inputs.panel.text class="justify-content-end flex-48" label="سال کپی رایت" wire:model="blockForm.data.copyright_year"/>
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

            @foreach($blockForm->data['licences'] as $index => $social_link)
                <div class="d-flex flex-wrap justify-content-between align-items-center flex-100 mb-10">
                    <div class="flex-5"><span class="f-16 f-bold">{{ $index + 1 }}</span></div>
                    <x-inputs.panel.textarea class="flex-20" label="کد نماد" wire:model="blockForm.data.licences.{{ $index }}.code" />
                    <x-buttons.panel.button type="button" class="justify-content-end flex-10" color="danger" wire:click="deleteLicence({{ $index1 }})">
                        <x-utils.icons icon="trash" fill="#fff" />
                    </x-buttons.panel.button>
                </div>
            @endforeach
        </div>

        <div class="d-flex flex-wrap flex-100 w-100 mt-15">
            <div class="d-flex justify-content-start m-left-auto pos-relative pr-5">
                <label class="d-flex f-14 text-63">
                    لینک ها
                    <div class="rx-title title-input pb-10">
                        <div class="p-rx">
                            <div class="rx-border-rectangle-after label-input"></div>
                        </div>
                    </div>
                </label>
            </div>
            <x-buttons.panel.button type="button" class="justify-content-end mb-10"  wire:click="addLink">
                <x-utils.icons icon="plus" fill="#fff" />
            </x-buttons.panel.button>

            @foreach($blockForm->data['links'] as $index1 => $link)
                <div class="d-flex flex-wrap justify-content-between align-items-center flex-100 mb-10">
                    <div class="flex-5"><span class="f-16 f-bold">{{ $index1 + 1 }}</span></div>
                    <x-inputs.panel.text class="flex-48" label="عنوان" wire:model="blockForm.data.links.{{ $index1 }}.title" />
                    <x-inputs.panel.text class="flex-48" label="لینک" wire:model="blockForm.data.links.{{ $index1 }}.link" />
                    <x-buttons.panel.button type="button" class="justify-content-end flex-10" color="danger" wire:click="deleteLink({{ $index1 }})">
                        <x-utils.icons icon="trash" fill="#fff" />
                    </x-buttons.panel.button>
                </div>
            @endforeach
        </div>


    </div>
</x-forms.panel.component-edit-base>
