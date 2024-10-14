@props(['blockForm'])

<x-forms.panel.component-edit-base :title="$blockForm->title">
    <div
        class="p-component-design d-flex flex-wrap align-items-start justify-content-start flex-100 mt-15 pl-15 pr-15 scroller"
        style="height: 350px">
        {{-- child over slider  --}}
        <div class="flex-100 w-100">
            <x-inputs.panel.select parentClass="mt-10" label="تعداد ستون" placeholder="انتخاب تعداد ستون" :options="[2 => 2 , 3 => 3 , 4 => 4 , 6 => 6]" wire:model="blockForm.data.column">
            </x-inputs.panel.select>
        </div>
    </div>
</x-forms.panel.component-edit-base>

