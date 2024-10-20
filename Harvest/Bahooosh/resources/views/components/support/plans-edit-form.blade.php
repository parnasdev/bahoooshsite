@props(['blockForm'])

<x-forms.panel.component-edit-base :title="$blockForm->title">
    <div
        class="p-component-design d-flex flex-wrap align-items-start justify-content-start flex-100 mt-15 pl-15 pr-15 scroller"
        style="height: 350px">
        <div class="flex-100 w-100">

            <div class="d-flex flex-wrap justify-content-between flex-100">
                <x-inputs.panel.textarea class="flex-100" label="ایکون" wire:model="blockForm.data.icon" />
                <x-inputs.panel.text class="flex-48" label="عنوان" wire:model="blockForm.data.title" />
                <x-inputs.panel.textarea class="flex-100" label="عنوان" wire:model="blockForm.data.description" />
                <x-inputs.panel.text class="flex-48" label="متن لینک" wire:model="blockForm.data.link_text" />
                <x-inputs.panel.text class="flex-48" label="لینک" wire:model="blockForm.data.link_url" />
            </div>

            <x-buttons.panel.button class="justify-content-end"  wire:click="addItem">
                <x-utils.icons icon="plus" fill="#fff" />
            </x-buttons.panel.button>

            @foreach($blockForm->data['plans'] as $index => $plan)
                <div class="d-flex flex-wrap justify-content-between align-items-center flex-100">
                    <div class="flex-5"><span class="f-16 f-bold">{{ $index + 1 }}</span></div>
                    <x-inputs.panel.single-file-picker class="flex-30" label="عکس" wire:model="blockForm.data.plans.{{ $index }}.image_url" />
                    <x-inputs.panel.text class="flex-48" label="عنوان" wire:model="blockForm.data.plans.{{ $index }}.title" />
                    <x-inputs.panel.text class="flex-48" label="زیرعنوان" wire:model="blockForm.data.plans.{{ $index }}.subtitle" />
                    <x-inputs.panel.swich class="flex-48" rightLabel="پیشنهادی" wire:model="blockForm.data.plans.{{ $index }}.is_special" />
                    <x-inputs.panel.money class="flex-48" label="قیمت اصلی" wire:model="blockForm.data.plans.{{ $index }}.price"/>
                    <x-inputs.panel.money class="flex-48" label="قیمت فروش" wire:model="blockForm.data.plans.{{ $index }}.sell_price"/>
                    @foreach($plan['facilities'] as $index2 => $facility)
                        <x-inputs.panel.checkbox class="justify-content-start" label="{{ $facility['title'] }}" wire:model="blockForm.data.plans.{{ $index }}.facilities.{{$index2}}.is_active" />
                    @endforeach
                    <x-inputs.panel.text class="flex-48" label="متن دکمه" wire:model="blockForm.data.plans.{{ $index }}.btn_text"/>
                    <x-inputs.panel.text class="flex-48" label="لینک دکمه" wire:model="blockForm.data.plans.{{ $index }}.btn_link" />
                    <x-buttons.panel.button class="justify-content-end flex-10" color="danger" wire:click="deleteItem({{ $index }})">
                        <x-utils.icons icon="trash" fill="#fff" />
                    </x-buttons.panel.button>
                </div>
            @endforeach

        </div>
    </div>
</x-forms.panel.component-edit-base>
