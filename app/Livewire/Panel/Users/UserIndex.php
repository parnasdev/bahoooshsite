<?php

namespace App\Livewire\Panel\Users;

use App\Livewire\TableComponent;
use App\Models\Role;
use App\Models\User;
use App\Services\Table\FilterOptions;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\WithPagination;
#[Layout('components.layouts.panel')]
class UserIndex extends TableComponent
{
    use WithPagination;

    public function mount()
    {
    }

    #[Title('کاربر ها')]
    public function render()
    {

        if (($this->query['trash'] ?? false) == 'true') {
            $users = User::onlyTrashed()->latest();
        } else {
            $users = User::query()->latest();
        }
        $users->when($this->query['role'] ?? false , function ($query) {
            $query->where('role_id' , $this->query['role']);
        });

        if (!empty($this->query['keyword'] ?? false)) {
            $constraints = $users; // not necessary but for better readability
            $users = User::search($this->query['keyword'])->constrain($constraints);
        }

        $users = $users->paginate($this->query['perPage'] ?? 15);

        return view('livewire.panel.users.user-index' , compact('users'));
    }

    public function updated($name , $value)
    {
        if ($name == 'action' && $value != 0) {
            $this->dispatch('message' , title: "آیا مطمئن هستید؟" , btnCText: "بله" , btnCAText: "خیر" , eventName: "runAction" , data: $value);
        }
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

    public function changePassword($id)
    {
        $this->dispatch('getData' , $id);
        $this->dispatch('open-modal');
    }

    public function filters(): array
    {

        $roles = Role::query()->pluck('label' , 'id')->toArray();
        $this->filterGroup->addFilter(new FilterOptions(
            'inputs.panel.text',
            'query.keyword',
            'flex-36 m-flex-100 pl-6 ml-10 m-ml-0',
            'flex-100 m-flex-99 search',
            'کلمه یا عبارت خود را جستجو کنید',
            'جستجو',
            'magnifier',
        ))->addFilter(new FilterOptions(
            'inputs.panel.select',
            'query.role',
            'flex-21 m-flex-48 pl-6 ml-10 m-ml-0',
            'mt-5',
            'همه',
            'براساس مقام',
            null,
            $roles
        ));


        return $this->filterGroup->toArray();
    }

    public function actions(): array
    {
        $this->actionGroup
            ->addActionSelect(($this->query['trash'] ?? false) == 'true' , 'action' , 'users.delete')
            ->addTrashBtn(($this->query['trash'] ?? false) == 'true' , can: 'users.delete')
            ->addCreateBtn(route('panel.users.create') , 'users.create');

        return $this->actionGroup->toArray();
    }

    public function links(): array
    {
        $this->linkGroup
            ->addLink('مقام ها' , route('panel.roles.index') , 'ml-7 pb-5' , 'info');

        return $this->linkGroup->toArray();
    }

    public function columns(): array
    {
        $this->column
            ->addColumn('component' , '' , 'id' , 'inputs.panel.checkbox' , 'flex-5 m-flex-15' , wireModel: 'selected')
            ->addColumn('text' , 'شناسه' , 'id' , '' , 'flex-5 m-flex-22')
            ->addColumn('text' , 'نام و نام‌خانوادگی' , 'fullName' , '' , 'flex-15 m-flex-100')
            ->addColumn('text' , 'نام‌کاربری' , 'username' , '' , 'flex-12 m-flex-100')
            ->addColumn('text' , 'شماره همراه' , 'phone' , '' , 'flex-12 m-flex-100')
            ->addColumn('text' , 'مقام' , fn(User $user) => $user->role->label , '' , 'flex-14 m-flex-70')
            ->addColumn('text' , 'تاریخ آخرین فعالیت' ,  function(User $user) {
                $lastSession = \Illuminate\Support\Facades\DB::table('sessions')->latest('last_activity')->where('user_id', '=', $user->id)->first();
                return empty($lastSession) ? '' : jdate(\Carbon\Carbon::createFromTimestamp($lastSession->last_activity))->format('Y-m-d H:i');
            } , '' , 'flex-10 m-flex-70')
            ->addColumn('text' , 'تاریخ ایجاد' ,  fn(User $user) => jdate($user->created_at)->format('Y-m-d H:i') , '' , 'flex-10 m-flex-70')
            ->addColumn('component' , 'عملیات' , '' , 'actions.panel.action-buttons' , 'sticky-table flex-16 m-flex-45' , actions: [
                array('type' => 'edit' , 'route' => fn(User $user) => route('panel.users.edit' , ['id' => $user->id]) , 'can' => 'users.edit'),
                array('type' => 'delete' , 'route' => '#4', 'showWhen' => fn(User $user) => $user->id != \user()->id , 'can' => 'users.delete'),
                array('type' => 'restore' , 'route' => '#4', 'can' => 'users.delete'),
            ])
        ;

        return $this->column->toArray();
    }

    #[On('delete')] public function destroy($id, $type = 'message'): void
    {
        if ($type == 'message') {
            $this->dispatch('deleteMessage' , id: $id , eventName: 'delete');
        } else {
            $user = $this->getUser($id);

            if ($user->trashed()) {
                $user->forceDelete();
            } else {
                $user->delete();
            }
        }
    }

    #[On('restore')] public function restore($id, $type = 'message'): void
    {
        if ($type == 'message') {
            $this->dispatch('restoreMessage' , id: $id , eventName: 'restore');
        } else {
            $user = $this->getUser($id);

            if ($user->trashed()) {
                $user->restore();
            }
        }
    }

    #[On('replicate')] public function replicate($id, $type = 'message'): void
    {
        // TODO: Implement replicate() method.
    }

    #[On('runAction')] public function runAction($data): void
    {
        if ($data == 1) {
            foreach ($this->selected as $item) {

                if ($item == \user()->id) continue;

                $this->destroy($item , 'action');
            }
        } else {
            foreach ($this->selected as $item) {
                $this->restore($item , 'action');
            }
        }


        $this->action = 0;

        $this->selected = [];
    }

    public function getUser($id)
    {
        return User::withTrashed()->findOrFail($id);
    }
}
