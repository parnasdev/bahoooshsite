@props(['blockForm' , 'oldSelected' => null])
<x-forms.panel.component-edit-base :title="$blockForm->title">
    <div
        class="p-component-design d-flex flex-wrap align-items-start justify-content-start flex-100 mt-15 pl-15 pr-15 scroller"
        style="height: 350px">
        <div class="flex-100 w-100">

            <div class="d-flex flex-wrap justify-content-between flex-100">
                <x-inputs.panel.text class="flex-48" label="عنوان" wire:model="blockForm.data.title" />
                <x-inputs.panel.text class="flex-48" label="متن دکمه" wire:model="blockForm.data.btn_text" />
                <x-inputs.panel.text class="flex-48" label="لینک دکمه" wire:model="blockForm.data.btn_link" />
                <x-inputs.panel.select label="نوع نمایش" wire:model.live="blockForm.data.fetch_type" >
                    <option value="A">سیستمی</option>
                    <option value="M">انتخابی</option>
                    <option value="C">براساس دسته‌بندی</option>
                </x-inputs.panel.select>
            </div>

            @if($blockForm->data['fetch_type'] == 'M')
                <x-inputs.panel.select-ajax :multiple="true" :oldSelected="$oldSelected" label="بلاگ های خود را انتخاب کنید" route="{{ route('select_post' , ['post_type' => 'post']) }}" wire:model="blockForm.data.post_ids" />

            @endif

            @if($blockForm->data['fetch_type'] == 'C')
                <x-inputs.panel.select-ajax :multiple="true" :oldSelected="$oldSelected" label="دسته‌بندی خود را انتخاب کنید" route="{{ route('select_category' , ['post_type' => 'post' , 'type' => 'category']) }}" wire:model="blockForm.data.category_ids" />
            @endif

        </div>
    </div>
</x-forms.panel.component-edit-base>
