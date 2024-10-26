<div>
    @if(!$is_edit)
        <div class="row-two sm:mt-28 max-[700px]:gap-4 flex max-[700px]:flex-col justify-between items-start">
            <div class="box-start w-1/2 max-[700px]:w-full flex flex-col items-start">
                <livewire:formbuilder::components.form-generator class="form py-5 flex flex-wrap w-full gap-3" code="{{ $block->data['code'] }}" />
            </div>
            <div
                class="box-img md:mr-6 w-1/2 max-[700px]:w-full bg-white flex justify-center items-center relative overflow-hidden">
                <img class="w-full h-full object-cover" src="{{ asset($block->data['image_url'] ?? '') }}" alt="{{ $block->data['alt'] ?? '' }}">
            </div>
        </div>
    @else
        <x-bahooosh::general.formimage-edit-form :$blockForm />
    @endif
</div>
