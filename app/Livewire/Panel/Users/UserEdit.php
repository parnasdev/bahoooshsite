<?php

namespace App\Livewire\Panel\Users;


use App\Livewire\Forms\Panel\PanelUserForm;
use App\Models\Role;
use App\Traits\WithFilesLivewire;
use Livewire\Attributes\Layout;
use Livewire\Component;
#[Layout('components.layouts.panel')]
class UserEdit extends Component
{
    use WithFilesLivewire;
    // public User $user;
    public PanelUserForm $user;

    public $size = 0;


    public function mount($id)
    {
        $this->user->setUser($id);
        $this->files =$this->user->user->files()->get()->toArray();
    }

    public function render()
    {
        $roles = Role::query()->pluck('label' , 'id')->toArray();
        return view('livewire.panel.users.user-edit' , compact('roles'));
    }

    public function submit()
    {
        $this->validate();

        $this->user->update();

        $this->deleteFiles();

        $this->syncFiles($this->files , $this->user->user);

        session()->flash('message' , ['title' =>  'کاربر شما با موفقیت ثبت شد.' , 'icon' => 'success']);

        return redirect(route('panel.users.index'));
    }

    public function openFileManager($file_type , $maxItems , $type = 'all')
    {
        $this->dispatch('getData_fileManager' , ['maxItems' => $maxItems , 'file_type' => $file_type , 'direction' => 'categories' , 'type' => $type]);
        $this->dispatch('open-modal', ['name' => 'uploader']);
    }
    public function removeDBFiles($index)
    {
        if ($this->files[$index]['id'] != null) {
            $this->deletedFiles[] = $this->files[$index]['id'];
        }
    }
}
