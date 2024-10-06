<div>
    {{--        <x-slot name="title">--}}
    {{--            <h5 class="modal-title">ویرایش تصویر</h5>--}}
    {{--        </x-slot>--}}
    <form wire:submit="submit">
        <div class="d-flex justify-content-center">
            <img src="{{ asset($file['url']) }}" width="80" alt="">
        </div>
        <x-inputs.panel.text label="متن جایگزین" class="form-control form-control-sm" id="alt" wire:model="file.alt"/>
        <x-buttons.panel.button class="justify-content-end mb-2 mt-10" target="submit">
            ویرایش
        </x-buttons.panel.button>
    </form>
</div>
