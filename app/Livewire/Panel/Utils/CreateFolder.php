<?php

namespace App\Livewire\Panel\Utils;

use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Rule;
use LivewireUI\Modal\ModalComponent;

class CreateFolder extends ModalComponent
{
    public $direction = '';

    public $editMode = false;

    #[Rule('required' , 'string' , 'regex:[A-Z a-z]' , 'max:100')]
    public $folder = '';

    public $old;

    public function render()
    {
        return view('livewire.panel.utils.create-folder');
    }

    public function submit()
    {
        $this->validateOnly('folder');

        $dir = "{$this->direction}/{$this->folder}";

        if (Storage::exists($dir)) {
           $this->addError('folder' , 'این فولدر قبلا ایجاد شه است');
            return;
        }


        Storage::makeDirectory($dir);

        $this->dispatch('createFolder' , direction: $dir);
        $this->closeModal();
    }

    public function edit()
    {
        $this->validateOnly('direction');

        $dir = "{$this->direction}/{$this->folder}";

        if (Storage::exists($dir)) {
            $this->addError('folder' , 'این فولدر قبلا ایجاد شه است');
            return;
        }

        Storage::move($this->old , $dir);

        $this->dispatch('createFolder' , direction: $dir );
        $this->closeModal();
    }

    public static function modalMaxWidthClass(): string
    {
        return 'w-25';
    }
}
