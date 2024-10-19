@props(['blockForm'])

<x-forms.panel.component-edit-base :title="$blockForm->title">
    <div
        class="p-component-design d-flex flex-wrap align-items-start justify-content-start flex-100 mt-15 pl-15 pr-15 scroller"
        style="height: 350px">
        {{--        3 => 3 , 4 => 4 , 6 => 6--}}
        <div class="flex-100 w-100">

            <div class="d-flex flex-wrap justify-content-between flex-100">
                <x-inputs.panel.text class="flex-48" label="عنوان" wire:model="blockForm.data.title" />
            </div>

            <x-buttons.panel.button class="justify-content-end"  wire:click="addItem">
                <x-utils.icons icon="plus" fill="#fff" />
            </x-buttons.panel.button>

            @foreach($blockForm->data['comments'] as $index => $service)
                <div class="d-flex flex-wrap justify-content-between align-items-center flex-100">
                    <x-inputs.panel.single-file-picker class="flex-25" label="عنوان" wire:model="blockForm.data.comments.{{ $index }}.image_url" />
                    <x-inputs.panel.text class="flex-25" label="عنوان" wire:model="blockForm.data.comments.{{ $index }}.title" />
                    <x-inputs.panel.text class="flex-25" label="لینک سایت" wire:model="blockForm.data.comments.{{ $index }}.referer_url" />
                    <x-inputs.panel.textarea class="flex-30" label="متن دکمه داخل باکس" wire:model="blockForm.data.comments.{{ $index }}.description" />
                    <x-buttons.panel.button class="justify-content-end flex-10" color="danger" wire:click="deleteItem({{ $index }})">
                        <x-utils.icons icon="trash" fill="#fff" />
                    </x-buttons.panel.button>
                </div>
            @endforeach

        </div>
    </div>
</x-forms.panel.component-edit-base>
