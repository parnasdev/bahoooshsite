@props(['blockForm'])

<x-forms.panel.component-edit-base :title="$blockForm->title">
    <div
        class="p-component-design d-flex flex-wrap align-items-start justify-content-start flex-100 mt-15 pl-15 pr-15 scroller"
        style="height: 350px">
        <div class="flex-100 w-100">

            <x-inputs.panel.single-file-picker class="flex-48" label="عکس" wire:model="blockForm.data.image_url" />
            <x-inputs.panel.text class="flex-48" label="جایاب عکس" wire:model="blockForm.data.alt" />

        </div>
    </div>
</x-forms.panel.component-edit-base>
