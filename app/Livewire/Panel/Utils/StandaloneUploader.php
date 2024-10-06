<?php

namespace App\Livewire\Panel\Utils;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

class StandaloneUploader extends Component
{

    use WithFileUploads;

    #[Rule(['files.*' => ['required' , 'file' , 'max:5120']])]
    public $files = [];

    public $maxItems = 1;

    public $direction = '';

    public $selectedFiles = [];

    public $builder = false;

    public $eventComponent = '';

    protected $listeners = ['getData_fileManager'];

    public $model = '';

    public $type = 1;

    public $route = '';

    public function mount()
    {
        $this->route = Route::currentRouteName();
    }

    #[Title('فایل ها')]
    public function render()
    {
        $directories = collect(Storage::allDirectories())->map(function ($item) {
            return [
                'path' => $item
            ];
        })->whereNotIn('path' , ['livewire-tmp' , 'uploads']);

        $dir = "{$this->direction}";

        if (!Storage::exists($dir)) {
            Storage::makeDirectory($dir);
        }

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
        })->whereNotIn('path' , ['.gitignore'])->values();

        return view('livewire.panel.utils.standalone-uploader'  , compact('directories' , 'uploads'))
            ->layout($this->route == 'panel.fileManger.tinymce5' ? 'components.layouts.no-layout-panel' : 'components.layouts.panel');
    }

    #[On('createFolder')]
    public function change($direction)
    {
        $this->direction = $direction;

        $this->dispatch('toast-message', message: 'فولدر شما ویرایش شد.' , icon: 'success');

    }

    public function uploads()
    {
        foreach ($this->files as $file)  {

            $file->storeAs($this->direction, $file->getClientOriginalName() , 'public');
        }
    }

    public function submit() {
        $this->validate([
            'selectedFiles' => [
                'required' , 'array' , 'min:1' , 'max:'. $this->maxItems
            ]
        ]);

        $this->dispatch('prs-file-manager-editor' , urls: $this->selectedFiles , file_type: $this->type);

        $this->selectedFiles = [];

    }

    #[On('delete')]
    public function deleteFolder($id = '' ,$type = 'message')
    {
        if ($type == 'message') {
            $this->dispatch('deleteMessage' , id: $this->direction , eventName: 'delete');
        } else {
            if (Storage::exists($this->direction) && $this->direction != '') {
                Storage::deleteDirectory($this->direction);
                $this->direction = '';
                $this->dispatch('toast-message', message: 'فولدر شما پاک شد.' , icon: 'success');
            }
        }
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
