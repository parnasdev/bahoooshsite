@props(['blockForm'])

<x-forms.panel.component-edit-base :title="$blockForm->title">
    <div
        class="p-component-design d-flex flex-wrap align-items-start justify-content-start flex-100 mt-15 pl-15 pr-15 scroller"
        style="height: 350px">
        <div class="flex-100 w-100">
            <x-inputs.panel.text class="justify-content-end" label="عنوان" wire:model="blockForm.data.title" />
            <x-inputs.panel.select parentClass="justify-content-end" label="نوع زیرعنوان" wire:model.live="blockForm.data.subtitle_type">
                <option value="1">مبلغ</option>
                <option value="2">لینک</option>
            </x-inputs.panel.select>
            @if($blockForm->data['subtitle_type'] == 1)
                <x-inputs.panel.money class="justify-content-end" label="زیرعنوان" wire:model="blockForm.data.subtitle" />
            @else
                <x-inputs.panel.text class="justify-content-end" label="زیرعنوان" wire:model="blockForm.data.subtitle" />
                <x-inputs.panel.text class="justify-content-end" label="لینک زیرعنوان" wire:model="blockForm.data.subtitle_url" />
            @endif

            <x-inputs.panel.textarea class="justify-content-end" label="توضیحات" wire:model="blockForm.data.description" />
            <x-inputs.panel.single-file-picker wire:model="blockForm.data.image_url" label="آپلود عکس" />
        </div>
    </div>
</x-forms.panel.component-edit-base>
