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
                @foreach($errors->all() as $error)
                    {{ $error }}
                @endforeach
                @if(empty($comment->parent_id))
                    <div class="mt-15">
                        <x-inputs.panel.textarea placeholder="پاسخ نظر" wire:model="replay.body"/>
                    </div>
                @endif
            </div>
            @if(empty($comment->parent_id))
                    <x-buttons.panel.button class="justify-content-end">
                        ثبت
                    </x-buttons.panel.button>
            @endif
        @endif
    </form>
</div>
