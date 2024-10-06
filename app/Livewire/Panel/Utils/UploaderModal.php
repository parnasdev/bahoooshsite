<?php

namespace App\Livewire\Panel\Utils;


use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class UploaderModal extends ModalComponent
{
    use WithFileUploads;

    public $files;

    public $maxItems = 1;

    public $direction = 'photos';

    public $selectedFiles = [];

    public $builder = false;

    public $componentTo = '';

    protected $listeners = ['getData_fileManager'];

    public $model = '';

    public $type = 1;

    public $state = 'panel';

    public $extention_type = null;

    public function mount()
    {

    }

    public function render()
    {


        $dir = "{$this->direction}";

        if (!Storage::exists($dir)) {
            Storage::makeDirectory($dir);
        }

        $directories = collect(Storage::directories())->map(function ($item) {
            return [
                'path' => $item
            ];
        })->whereNotIn('path' , ['tmp' , 'uploads']);

        $uploads = collect(Storage::files($dir))->sortByDesc(function ($file) {
            return Storage::lastModified($file);
        })->map(function ($item) {
            $size = Storage::size($item) / 1000;
            $sizeType = 'کیلوبایت';

            if ($size >= 1000) {
                $size = $size / 1000;
                $sizeType = 'مگابایت';
            }

            if ($size >= 1000) {
                $size = $size / 1000;
                $sizeType = 'گیگابایت';
            }


            return [
                'url' => Storage::url($item),
                'path' => $item,
                'size' => round($size , 2),
                'sizeType' => $sizeType,
                'filename' => File::basename($item),
                'type' => Storage::mimeType($item)
            ];
        })->values();

        if (!empty($this->extention_type)) {
            $uploads = $uploads->filter(function ($item) {
                return str_starts_with($this->extention_type , $item['type']);
            });
        }
        return view('livewire.panel.utils.uploader-modal' , compact('directories' , 'uploads'));
    }

    public function uploads()
    {
        foreach ($this->files as $file)  {
            $file->storeAs($this->direction, $file->getClientOriginalName());
        }
    }

    public function submit() {
        $this->validate([
            'selectedFiles' => [
                'required' , 'array' , 'min:1' , 'max:'. $this->maxItems
            ]
        ]);

        if (!empty($this->componentTo)) {
            $this->dispatch('prs-file-manager' , urls: $this->selectedFiles , file_type: $this->type)->to($this->componentTo);
        }else {
            $this->dispatch('prs-file-manager' , urls: $this->selectedFiles , file_type: $this->type);
        }

        $this->selectedFiles = [];

        $this->closeModal();

    }
    public function deleteFile($path) {
        if (Storage::exists($path)) {
            Storage::delete($path);
            $this->dispatch('toast-message', message: 'فایل شما پاک شد.' , icon: 'success');
        } else {
            $this->dispatch('toast-message', message: 'فایل شما پیدا نشد.' , icon: 'danger');
        }
    }
}
