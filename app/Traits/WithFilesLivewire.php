<?php

namespace App\Traits;

use App\Models\PostFile;
use Livewire\Attributes\On;

trait WithFilesLivewire
{
    public array $files = [];
    public array $deletedFiles = [];
    public bool $single = false;

    public function deleteFile($index = null)
    {
        // dd($this->files);
        $beforeDeletedFileMethod = 'removeDBFiles';

        if (method_exists($this, $beforeDeletedFileMethod)) {
            $this->{$beforeDeletedFileMethod}($index);
        }
        // PostFile::query()->where('id', $file)->delete();
        array_splice($this->files, $index, 1);
    }

    #[On('changeFile')]
    public function changeFile($file)
    {
        $index = collect($this->files)
            ->where('type', $file['type'])
            ->where('path' , $file['path'])->keys()[0];

        $this->files = collect($this->files)->put($index, $file)->toArray();

        $this->dispatch('toast-message', message: 'فایل شما آپدیت شد.', icon: 'success');
    }


    public function syncFiles($files, $model)
    {
        $files = collect($files);

        foreach ($files->whereNull('id') as $item) {
            PostFile::query()->create([
                'path' => $item['path'],
                'alt' => $item['alt'] ?? null,
                'type' => $item['type'],
                'post_filetable_id' => $model->id,
                'post_filetable_type' => get_class($model),
            ]);
        }

        foreach ($files->whereNotNull('id') as $item) {
            PostFile::query()->find($item['id'])->update([
                'path' => $item['path'],
                'alt' => $item['alt'] ?? null,
                'type' => $item['type']
            ]);
        }
    }

    public function deleteFiles()
    {
        PostFile::query()->whereIn('id', $this->deletedFiles)->delete();
    }

}
