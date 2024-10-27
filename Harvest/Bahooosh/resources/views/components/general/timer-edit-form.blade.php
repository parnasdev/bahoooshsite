@props(['blockForm'])

<x-forms.panel.component-edit-base :title="$blockForm->title">
    <div
        class="p-component-design d-flex flex-wrap align-items-start justify-content-start flex-100 mt-15 pl-15 pr-15 scroller"
        style="height: 350px">
        <div class="flex-100 w-100">

            <x-inputs.panel.single-file-picker label="عکس" wire:model="blockForm.data.image_url" />
            <x-inputs.panel.text label="جایاب عکس" wire:model="blockForm.data.alt" />
            <x-inputs.panel.text label="عنوان" wire:model="blockForm.data.title" />
            <x-inputs.panel.text label="زیرعنوان" wire:model="blockForm.data.subtitle" />
            <x-inputs.panel.text label="متن دکمه" wire:model="blockForm.data.btn_text" />
            <x-inputs.panel.text label="لینک دکمه" wire:model="blockForm.data.btn_link" />
            <x-inputs.panel.date-picker label="تاریخ تایمر" withTime="true" wire:model="blockForm.data.count_down_date" />

        </div>
    </div>
</x-forms.panel.component-edit-base>
