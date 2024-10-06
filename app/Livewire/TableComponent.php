<?php

namespace App\Livewire;

use App\Services\Table\ActionGroup;
use App\Services\Table\Column;
use App\Services\Table\FilterGroup;
use App\Services\Table\LinkGroup;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;

abstract class TableComponent extends Component
{
    #[Url]
    public array $query = [];

    public int $action = 0;

    public array $selected = [];

    protected FilterGroup $filterGroup;

    protected ActionGroup $actionGroup;

    protected LinkGroup $linkGroup;


    protected Column $column;

    public $paginationTheme = 'panel-paginate';


    public function boot()
    {
        $this->filterGroup = new FilterGroup();
        $this->actionGroup = new ActionGroup();
        $this->linkGroup = new LinkGroup();

        $this->column = new Column();
    }

    public function updated($name , $value)
    {
        if ($name == 'action' && $value != 0) {
            $this->dispatch('message' , title: "آیا مطمئن هستید؟" , btnCText: "بله" , btnCAText: "خیر" , eventName: "runAction" , data: $value);
        }
    }

    abstract public function filters() : array;

    abstract public function actions() : array;


    abstract public function links() : array;

    abstract public function columns() : array;

    #[On('delete')]
    abstract public function destroy($id , $type = 'message') : void;

    #[On('restore')]
    abstract public function restore($id , $type = 'message') : void;

    #[On('replicate')]
    abstract public function replicate($id , $type = 'message') : void;

    #[On('runAction')]
    abstract public function runAction($data) : void;

    #[On('showTrash')]
    public function showTrash()
    {
        $this->query['trash'] = !($this->query['trash'] ?? false);
    }

    public function selectAll($json)
    {
        $array = json_decode($json);
        if ($array == $this->selected) {
            $this->selected = [];
        } else {
            $this->selected = $array;
        }
    }
}
