@props(['blockForm'])

<x-forms.panel.component-edit-base :title="$blockForm->title">
    <div
        class="p-component-design d-flex flex-wrap align-items-start justify-content-start flex-100 mt-15 pl-15 pr-15 scroller"
        style="height: 350px">
        <div class="flex-100 w-100">
            <x-inputs.panel.text class="justify-content-end" label="عنوان" wire:model="blockForm.data.title" />
            <x-inputs.panel.text class="justify-content-end" label="زیرعنوان" wire:model="blockForm.data.subtitle" />
            <x-inputs.panel.text class="justify-content-end" label="متن دکمه" wire:model="blockForm.data.btn_text" />
            <x-inputs.panel.text class="justify-content-end" label="لینک دکمه" wire:model="blockForm.data.btn_link" />
            <x-inputs.panel.textarea class="justify-content-end" label="ویژگی ها" placeholder="با '|' از هم جدا کنید." wire:model="blockForm.data.spec" />
            <x-inputs.panel.single-file-picker wire:model="blockForm.data.video_url" label="آپلود ویدیو" />
        </div>
    </div>
</x-forms.panel.component-edit-base>
