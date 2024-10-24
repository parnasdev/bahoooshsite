<div>
    @if(!$is_edit)
        <div class="show-desktop w-full">
            <div class="row-filter mt-6 w-full flex justify-between items-center">
                <div class="start grid grid-cols-5 gap-2">
                    <button class="btn-filter bg-white w-full text-gray text-small bolX" wire:click="$set('category' , '')">
                       همه
                    </button
                    @foreach($categories as $item)
                        <button class="btn-filter bg-white w-full text-gray text-small bolX" wire:click="$set('category' , '{{$item->slug}}')">
                            {{ $item->name }}
                        </button>
                    @endforeach
                </div>
                <div class="end flex justify-end">
                    <x-inputs.home.search class="flex justify-between items-center px-3" placeholder="جست‌و‌جو نتایج"
                                          wire:model.live="search"/>
                </div>
            </div>
        </div>
        <div class="show-mobile w-full">
            <div class="row-filter mt-6 w-full flex justify-between items-center">
                <div class="end flex w-100 justify-end">
                    <x-inputs.home.search class="flex w-100 justify-between items-center px-3"
                                          placeholder="جست‌و‌جو نتایج" wire:model.live="search"/>
                </div>
            </div>
        </div>
        <div class="list-blogs my-5 w-full max-[600px]:px-3 grid grid-cols-3 gap-2 max-[600px]:grid-cols-1">
            @forelse($posts as $post)
                <livewire:bahooosh::thumbnails.blog-thumbnail :$post :key="'post-' . $post->id"/>
            @empty
            @endforelse
        </div>
        {{ $posts->links() }}
    @else

    @endif
</div>
