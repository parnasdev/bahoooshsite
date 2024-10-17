@props(['blockForm'])

<x-forms.panel.component-edit-base :title="$blockForm->title">
    <div
        class="p-component-design d-flex flex-wrap align-items-start justify-content-start flex-100 mt-15 pl-15 pr-15 scroller"
        style="height: 350px">
        <div class="flex-100 w-100">

            <div class="d-flex flex-wrap justify-content-between flex-100">
                <x-inputs.panel.text class="flex-48" label="عنوان" wire:model="blockForm.data.title" />
                <x-inputs.panel.textarea class="flex-48" label="توضیحات" wire:model="blockForm.data.description" />
                <x-inputs.panel.text class="flex-48" label="زیر عنوان" wire:model="blockForm.data.subtitle" />
                <x-inputs.panel.text class="flex-48" label="لینک یک متن" wire:model="blockForm.data.link1_text" />
                <x-inputs.panel.text class="flex-48" label="لینک یک" wire:model="blockForm.data.link1_url" />
                <x-inputs.panel.text class="flex-48" label="لینک دو متن" wire:model="blockForm.data.link2_text" />
                <x-inputs.panel.text class="flex-48" label="لینک دو" wire:model="blockForm.data.link2_url" />
            </div>
        </div>
    </div>
</x-forms.panel.component-edit-base>
