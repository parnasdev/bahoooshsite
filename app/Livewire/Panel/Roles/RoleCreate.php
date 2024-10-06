<?php

namespace App\Livewire\Panel\Roles;

use App\Livewire\Forms\Panel\PanelRoleForm;
use App\Models\Permission;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Layout('components.layouts.panel')]
class RoleCreate extends Component
{
    public PanelRoleForm $roleForm;

    public array $permissionIds = [];



    public function mount()
    {
    }

    public function updated($name , $value)
    {
    }

    #[Title('ایجاد مقام')]
    public function render()
    {
        $permissions = Permission::query()->get()->map(function ($item)  {
            return [
                'id' => $item->id,
                'text' => $item->label,
            ];
        })->toArray();

        return view('livewire.panel.roles.role-create' , compact('permissions'));
    }

    public function submit()
    {
        $this->validate();

        $this->roleForm->store();

        $this->roleForm->role->permissions()->sync(collect($this->permissionIds)->pluck('id')->toArray());

        return redirect(route('panel.roles.index'));
    }
}
