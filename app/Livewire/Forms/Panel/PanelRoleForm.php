<?php

namespace App\Livewire\Forms\Panel;

use App\Models\Role;
use Illuminate\Validation\Rule;
use Livewire\Form;

class PanelRoleForm extends Form
{
    public ?Role $role;

    public $name;
    public $label;
    public $is_access_panel = false;
    public $is_access_dashboard = false;
    public $is_custom = false;
    public $is_default = false;
    public $custom_route_name_access;


    public function rules()
    {
        return [
            'name' => ['required' , 'string' , 'max:30'],
            'label' => ['nullable', 'string' , 'max:30'],
            'is_access_panel' => ['nullable'],
            'is_access_dashboard' => ['nullable'],
            'is_custom' => ['nullable'],
            'custom_route_name_access' => [Rule::when($this->is_custom , 'required' , 'nullable')],
        ];
    }

    public function setRole($role){
        $this->role = Role::query()->find($role);
        $this->name = $this->role->name;
        $this->label = $this->role->label;
        $this->is_access_panel = $this->role->is_access_panel;
        $this->is_access_dashboard = $this->role->is_access_dashboard;
        $this->is_custom = $this->role->is_custom;
        $this->see_all_post = $this->role->see_all_post;
        $this->is_default = $this->role->is_default;
        $this->custom_route_name_access = $this->role->custom_route_name_access;


    }

    public function store()
    {
        $this->role = Role::create($this->all());
    }

    public function update()
    {
        $this->role->update(
            $this->all()
        );
    }
}
