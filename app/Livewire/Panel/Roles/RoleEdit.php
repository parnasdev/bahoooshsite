<?php

namespace App\Livewire\Panel\Roles;

use App\Livewire\Forms\Panel\PanelRoleForm;
use App\Models\Permission;
use Livewire\Attributes\Layout;
use Livewire\Component;
#[Layout('components.layouts.panel')]
class RoleEdit extends Component
{

    // public Role $role;
    public PanelRoleForm $roleForm;
    public array $permissionIds = [];

    public function mount($id)
    {
        $this->roleForm->setRole($id);

        $this->permissionIds = $this->roleForm->role->permissions->map(function ($item)  {
            return [
                'id' => $item->id,
                'text' => $item->label,
            ];
        })->toArray();
    }

    public function render()
    {
        $permissions = Permission::query()->get()->map(function ($item)  {
            return [
                'id' => $item->id,
                'text' => $item->label,
            ];
        })->toArray();
        return view('livewire.panel.roles.role-edit' , compact('permissions'));
    }

    public function submit()
    {
        $this->validate();

        $this->roleForm->update();

        $this->roleForm->role->permissions()->sync(collect($this->permissionIds)->pluck('id')->toArray());

        return redirect(route('panel.roles.index'));
    }
}
