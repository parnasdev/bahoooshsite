<?php

namespace App\Livewire\Panel\Roles;

use App\Livewire\TableComponent;
use App\Models\Role;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
#[Layout('components.layouts.panel')]
class RoleIndex extends TableComponent
{

    #[Title('مقام ها')]
    public function render()
    {
        $roles = Role::query()->latest()->paginate($this->query['perPage'] ?? 15);

        return view('livewire.panel.roles.role-index' , compact('roles'));
    }

    public function updated($name , $value)
    {
        if ($name == 'action' && $value != 0) {
            $this->dispatch('message' , title: "آیا مطمئن هستید؟" , btnCText: "بله" , btnCAText: "خیر" , eventName: "runAction" , data: $value);
        }
    }


    public function filters(): array
    {

        return $this->filterGroup->toArray();
    }

    public function actions(): array
    {
        $this->actionGroup
            ->addCreateBtn(route('panel.roles.create') , 'posts.create');

        return $this->actionGroup->toArray();
    }

    public function links(): array
    {
        $this->linkGroup
            ->addLink('برگشت' , route('panel.users.index') , 'ml-7 pb-5' , 'info');

        return $this->linkGroup->toArray();
    }

    public function columns(): array
    {

        $this->column
            ->addColumn('text' , 'شناسه' , 'id' , '' , 'flex-5 m-flex-22')
            ->addColumn('text' , 'نام' , 'name' , '' , 'flex-38 m-flex-100')
            ->addColumn('text' , 'برچسپ' ,'label' , '' , 'flex-40 m-flex-70')
            ->addColumn('component' , 'عملیات' , '' , 'actions.panel.action-buttons' , 'sticky-table flex-16 m-flex-45' , actions: [
                array('type' => 'edit' , 'route' => fn(Role $role) => route('panel.roles.edit' , ['id' => $role->id]) , 'can' => 'posts.edit'),
                array('type' => 'delete' , 'route' => '#4', 'showWhen' => fn(Role $role) => !$role->is_default,  'can' => 'posts.delete'),
            ])
        ;

        return $this->column->toArray();

    }

    #[On('delete')]
    public function destroy($id, $type = 'message'): void
    {
        if ($type == 'message') {
            $this->dispatch('deleteMessage' , id: $id , eventName: 'delete');
        } else {
            $role = $this->getRole($id);

            $role->delete();
        }
    }

    #[On('restore')]
    public function restore($id, $type = 'message'): void
    {
    }

    #[On('replicate')]
    public function replicate($id, $type = 'message'): void
    {

    }

    #[On('runAction')]
    public function runAction($data) : void
    {
    }

    #[On('showTrash')]
    public function showTrash()
    {
        $this->query['trash'] = !($this->query['trash'] ?? false);
    }

    private function getRole($id) {
        return Role::query()->findOrFail($id);
    }
}
