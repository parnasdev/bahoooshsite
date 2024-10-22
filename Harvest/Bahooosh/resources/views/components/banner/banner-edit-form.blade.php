@props(['blockForm'])

<x-forms.panel.component-edit-base :title="$blockForm->title">
    <div
        class="p-component-design d-flex flex-wrap align-items-start justify-content-start flex-100 mt-15 pl-15 pr-15 scroller"
        style="height: 350px">
        <div class="flex-100 w-100">

            <x-buttons.panel.button class="justify-content-end"  wire:click="addItem">
                <x-utils.icons icon="plus" fill="#fff" />
            </x-buttons.panel.button>

            @foreach($blockForm->data['banners'] as $index => $faq)
                <div class="d-flex flex-wrap justify-content-between align-items-center flex-100">
                    <div class="flex-5"><span class="f-16 f-bold">{{ $index + 1 }}</span></div>
                    <x-inputs.panel.single-file-picker class="flex-30" label="عکس" wire:model="blockForm.data.banners.{{ $index }}.image_url" />
                    <x-inputs.panel.text class="flex-20" label="جایاب عکس" wire:model="blockForm.data.banners.{{ $index }}.alt" />
                    <x-inputs.panel.text class="flex-30" label="لینک" wire:model="blockForm.data.banners.{{ $index }}.link" />
                    <x-buttons.panel.button class="justify-content-end flex-10" color="danger" wire:click="deleteItem({{ $index }})">
                        <x-utils.icons icon="trash" fill="#fff" />
                    </x-buttons.panel.button>
                </div>
            @endforeach

        </div>
    </div>
</x-forms.panel.component-edit-base>
