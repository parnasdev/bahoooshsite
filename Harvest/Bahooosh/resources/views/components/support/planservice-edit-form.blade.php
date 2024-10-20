@props(['blockForm'])

<x-forms.panel.component-edit-base :title="$blockForm->title">
    <div
        class="p-component-design d-flex flex-wrap align-items-start justify-content-start flex-100 mt-15 pl-15 pr-15 scroller"
        style="height: 350px">
        <div class="flex-100 w-100">

            <div class="d-flex flex-wrap justify-content-between flex-100">
                <x-inputs.panel.textarea class="flex-100" label="ایکون" wire:model="blockForm.data.icon" />
                <x-inputs.panel.text class="flex-48" label="عنوان" wire:model="blockForm.data.title" />
                <x-inputs.panel.text class="flex-48" label="متن دکمه" wire:model="blockForm.data.btn_text" />
                <x-inputs.panel.text class="flex-48" label="لینک دکمه" wire:model="blockForm.data.btn_link" />
            </div>

            <x-buttons.panel.button class="justify-content-end"  wire:click="addItem">
                <x-utils.icons icon="plus" fill="#fff" />
            </x-buttons.panel.button>

            @foreach($blockForm->data['faqs'] as $index => $faq)
                <div class="d-flex flex-wrap justify-content-between align-items-center flex-100">
                    <div class="flex-5"><span class="f-16 f-bold">{{ $index + 1 }}</span></div>
                    <x-inputs.panel.text class="flex-48" label="عنوان" wire:model="blockForm.data.faqs.{{ $index }}.title" />
                    <x-inputs.panel.textarea class="flex-43" label="ویژگی ها" placeholder="با '|' از هم جدا کنید" wire:model="blockForm.data.faqs.{{ $index }}.description" />
                    <x-buttons.panel.button class="justify-content-end flex-10" color="danger" wire:click="deleteItem({{ $index }})">
                        <x-utils.icons icon="trash" fill="#fff" />
                    </x-buttons.panel.button>
                </div>
            @endforeach

        </div>
    </div>
</x-forms.panel.component-edit-base>
