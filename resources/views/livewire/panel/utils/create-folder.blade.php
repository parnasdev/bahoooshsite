<div>
    @if(!$editMode)
        <form wire:submit="submit">
            <x-inputs.panel.text label="نام فولدر" wire:model="folder" />
            <x-buttons.panel.button class="justify-content-end">
                ایجاد
            </x-buttons.panel.button>
        </form>
    @else
        <form wire:submit="edit">
            <x-inputs.panel.text label="نام فولدر" wire:model="folder" />
            <x-buttons.panel.button class="justify-content-end">
                ویرایش
            </x-buttons.panel.button>
        </form>
    @endif
</div>
