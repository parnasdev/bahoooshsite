<div>
    @if(!$is_edit)
        <div class="box-single bg-white flex justify-center items-center">
            <img class="w-full h-full object-cover" src="{{ asset($block->data['image_url']) }}"
                 alt="{{ $block->data['alt'] }}">
        </div>
    @else
        <x-bahooosh::general.singleimage-edit-form :$blockForm/>
    @endif
</div>
