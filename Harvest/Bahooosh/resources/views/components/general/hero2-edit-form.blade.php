@props(['blockForm'])

<x-forms.panel.component-edit-base :title="$blockForm->title">
    <div
        class="p-component-design d-flex flex-wrap align-items-start justify-content-start flex-100 mt-15 pl-15 pr-15 scroller"
        style="height: 350px">
        <div class="flex-100 w-100">

            <x-inputs.panel.text class="justify-content-end" label="کلاس" wire:model="blockForm.data.class" />
            <x-inputs.panel.text class="justify-content-end" label="عنوان" wire:model="blockForm.data.title" />
            <x-inputs.panel.textarea class="justify-content-end" label="زیرعنوان" wire:model="blockForm.data.subtitle" />
            <x-inputs.panel.select label="نوع دکمه" wire:model="blockForm.data.btn_type">
                <option value="1">تو پر</option>
                <option value="2">تو خالی</option>
            </x-inputs.panel.select>
            <x-inputs.panel.text class="justify-content-end" label="متن دکمه" wire:model="blockForm.data.btn_text" />
            <x-inputs.panel.text class="justify-content-end" label="آیکون دکمه" wire:model="blockForm.data.btn_icon" />
            <x-inputs.panel.text class="justify-content-end" label="لینک دکمه" wire:model="blockForm.data.btn_link" />
            <x-inputs.panel.swich rightLabel="نمایش خط پایین" wire:model="blockForm.data.show_border" />
            <x-inputs.panel.single-file-picker wire:model="blockForm.data.image_url" label="آپلود عکس" />
        </div>
    </div>
</x-forms.panel.component-edit-base>
