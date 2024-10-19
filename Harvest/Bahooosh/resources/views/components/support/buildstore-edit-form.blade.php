@props(['blockForm'])

<x-forms.panel.component-edit-base :title="$blockForm->title">
    <div
        class="p-component-design d-flex flex-wrap align-items-start justify-content-start flex-100 mt-15 pl-15 pr-15 scroller"
        style="height: 350px">
        {{--        3 => 3 , 4 => 4 , 6 => 6--}}
        <div class="flex-100 w-100">

            <div class="d-flex flex-wrap justify-content-between flex-100">
                <x-inputs.panel.text class="flex-48" label="عنوان" wire:model="blockForm.data.title" />
                <x-inputs.panel.text class="flex-48" label="عنوان داخل باکس" wire:model="blockForm.data.box_title" />
                <x-inputs.panel.text class="flex-48" label="متن دکمه داخل باکس" wire:model="blockForm.data.box_btn_text" />
                <x-inputs.panel.text class="flex-48" label="لینک دکمه داخل باکس" wire:model="blockForm.data.box_btn_link" />
            </div>

            <x-buttons.panel.button class="justify-content-end"  wire:click="addItem">
                <x-utils.icons icon="plus" fill="#fff" />
            </x-buttons.panel.button>

            @foreach($blockForm->data['services'] as $index => $service)
                <div class="d-flex flex-wrap justify-content-between align-items-center flex-100">
                    <div class="flex-5"><span class="f-16 f-bold">{{ $index + 1 }}</span></div>
                    <x-inputs.panel.single-file-picker class="flex-30" label="عکس" wire:model="blockForm.data.services.{{ $index }}.image_url" />
                    <x-inputs.panel.text class="flex-20" label="عنوان" wire:model="blockForm.data.services.{{ $index }}.title" />
                    <x-inputs.panel.textarea class="flex-30" label="متن " wire:model="blockForm.data.services.{{ $index }}.description" />
                    <x-buttons.panel.button class="justify-content-end flex-10" color="danger" wire:click="deleteItem({{ $index }})">
                        <x-utils.icons icon="trash" fill="#fff" />
                    </x-buttons.panel.button>
                </div>
            @endforeach

        </div>
    </div>
</x-forms.panel.component-edit-base>