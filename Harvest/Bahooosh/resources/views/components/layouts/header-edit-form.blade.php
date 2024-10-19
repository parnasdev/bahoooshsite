@props(['blockForm'])

<x-forms.panel.component-edit-base :title="$blockForm->title">
    <div
        class="p-component-design d-flex flex-wrap align-items-start justify-content-start flex-100 mt-15 pl-15 pr-15 scroller">
        {{-- child over slider  --}}
        <div class="d-flex flex-wrap justify-content-between flex-100 w-100">
            <x-inputs.panel.text class="justify-content-end flex-48" label="متن پشتیبانی" wire:model="blockForm.data.support_text"/>
            <x-inputs.panel.text class="justify-content-end flex-48" label="شماره تلفن پشتیبانی" wire:model="blockForm.data.support_tel"/>
            <x-inputs.panel.text class="justify-content-end flex-48" label="لینک شماره تلفن پشتیبانی" wire:model="blockForm.data.support_tel_link"/>
            <x-inputs.panel.text class="justify-content-end flex-48" label="متن دکمه" wire:model="blockForm.data.btn_text"/>
            <x-inputs.panel.text class="justify-content-end flex-48" label="لینک دکمه" wire:model="blockForm.data.btn_link"/>
        </div>
    </div>
</x-forms.panel.component-edit-base>
