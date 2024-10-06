<div>
    <form wire:submit="submit">
        @error('size')
        <p class="text-danger f-14 pt-7 m-left-auto alert-invalid">{{ $message }}</p>
        @enderror
        @if ($comment != null)
            <div class="row g-1">
                <div class="col-md-12">
                    <p class="mb-15">
                        متن نظر:
                    </p>
                    <p>
                        {{ $comment->body ?? '' }}
                    </p>
                </div>
                @if(empty($comment->parent_id))
                    <div class="mt-15">
                        <div class="c-input align-items-end flex-100 mr-8 mb-7">
                            <x-parnas.inputs.textarea placeholder="پاسخ نظر" wire:model="replay.body"/>
                            @error('replay.body')
                            <p class="text-danger f-14 pt-7 m-left-auto">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                @endif
            </div>
            @if(empty($comment->parent_id))
                <div class="c-ancher ml-6">
                    <x-parnas.buttons.button class="ancher radius-7 bg-success text-white">
                        ثبت
                    </x-parnas.buttons.button>
                </div>
            @endif
        @endif
    </form>
</div>
