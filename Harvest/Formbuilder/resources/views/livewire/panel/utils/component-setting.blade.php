<div>
    @if($input->component_type == \Harvest\Formbuilder\Enums\ComponentType::BUILDER)
        @livewire($input->component_name , ['input' => $input , 'is_edit' => true] , key(rand()))
    @else
        <form wire:submit="submit">
            <div class="d-flex flex-wrap justify-content-between flex-100">
                <x-inputs.panel.text
                    class="align-items-end flex-48 m-flex-100 mr-9 m-mr-0"
                    wire:model="form.input_label"
                    label="لیبل فیلد"
                />

                <x-inputs.panel.text
                    class="align-items-end flex-48 m-flex-100 mr-9 m-mr-0"
                    wire:model="form.input_class"
                    label="کلاس فیلد"
                />

                <x-inputs.panel.swich
                    class="align-items-end flex-48 m-flex-100 mr-9 m-mr-0"
                    wire:model="form.required"
                    rightLabel="اجباری باشد!"
                />

                <x-inputs.panel.swich
                    class="align-items-end flex-48 m-flex-100 mr-9 m-mr-0"
                    wire:model="form.unique"
                    rightLabel="یکتا باشد!"
                />

            </div>
            <x-buttons.panel.button class="justify-content-end mt-15">
                ثبت
            </x-buttons.panel.button>
        </form>
    @endif
</div>
