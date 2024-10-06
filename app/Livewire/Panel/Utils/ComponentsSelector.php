<?php

namespace App\Livewire\Panel\Utils;

use App\Models\Block;
use App\ValueObjects\AreaValueObject;
use LivewireUI\Modal\ModalComponent;

class ComponentsSelector extends ModalComponent
{
    public $q = '';

    public $index;

    public $components = [];

    public $pageId;

    public $blockId;


    public function mount()
    {
        if (empty($this->pageId)) {
            $this->dispatch('toast-message', message: "لطفا عنوان صفحه خود را پر کنید", icon: 'danger');
            $this->closeModal();
        }
        $this->components = collect(config('ofoqbooks.components'))->when(!empty($this->blockId) , function ($collection) {
           return $collection->where('name' , '!=' , 'ofoqbooks::components.column');
        })->toArray();
    }

    public function render()
    {
        return view('livewire.panel.utils.components-selector');
    }

    public function addComponent($component)
    {

        Block::query()->create([
            'parent_id' => $this->blockId,
            'post_id' => $this->pageId,
            'component_name' => $component['name'],
            'title' => $component['title'],
            'is_livewire' => $component['is_livewire'],
            'show_desktop' => true,
            'show_tablet' => true,
            'show_mobile' => true,
            'data' => [],
            'category' => $component['category'],
            'padding' => new AreaValueObject(0, 0, 0, 0),
            'margin' => new AreaValueObject(0, 0, 0, 0),
            'order_item' => Block::query()->where('post_id' , $this->pageId)
                ->when(!empty($this->blockId) , fn($q) => $q->where('parent_id' , $this->blockId))
                ->select('id')->get()->count()
        ]);

        $this->dispatch('updateBlock');
        $this->closeModal();
    }

    public static function modalMaxWidthClass(): string
    {
        return 'w-60';
    }
}
