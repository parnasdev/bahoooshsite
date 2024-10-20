<div>
    @if(!$is_edit)
        <div class="item bg-white rounded-3xl h-72 w-full flex flex-col items-center p-3">
            <div class="img w-full flex items-end mt-2 justify-center  h-20">
                <img width="70" src="{{ asset($block->data['image_url'] ?? '') }}" alt="">
            </div>
            <h3 class="text-base text-sm  mt-3 bolX">{{ $block->data['title'] ?? '' }}</h3>
            @if(($block->data['subtitle_type'] ?? 1) == 1)
                <div class="label w-3/5 flex justify-center text-gray text-small bolX items-center h-10 mt-4">
                    {{ number_format($block->data['subtitle'] ?? 0 , thousands_separator: '/') }} تومان
                </div>
            @else
                <a href="{{$block->data['subtitle_url'] ?? ''}}"
                   class="label w-3/5 flex justify-center text-gray text-small bolX items-center h-10 mt-4">
                    {{$block->data['subtitle'] ?? ''}}
                </a>
            @endif

            <p class="text-center leading-5	text-gray mt-3 text-small medium">
                {{ $block->data['description'] ?? '' }}
            </p>
        </div>
    @else
        <x-bahooosh::support.packagethumb-edit-form :$blockForm />
    @endif
</div>
