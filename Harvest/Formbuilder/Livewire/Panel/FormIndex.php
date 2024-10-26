<?php

namespace Harvest\Formbuilder\Livewire\Panel;

use App\Livewire\TableComponent;
use App\Models\Post;
use App\Services\Table\FilterOptions;
use Harvest\Formbuilder\Models\Form;
use Illuminate\Support\Facades\File;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.panel')]
class FormIndex extends TableComponent
{
    use WithPagination;

    #[Title('فرم ها')]
    public function render()
    {
        $forms = Form::query()->latest()->when(!empty($this->query['keyword'] ?? false) , function ($query) {
            $query->where('name', 'like', '%' . $this->query['keyword'] . '%')
            ->orWhere('code' , 'like', '%' . $this->query['keyword'] . '%');
        })->paginate($this->query['perPage'] ?? 15);

        return view('formbuilder::livewire.panel.form-index' , compact('forms'));
    }

    public function filters(): array
    {
        $this->filterGroup->addFilter(new FilterOptions(
            'inputs.panel.text',
            'query.keyword',
            'flex-48 m-flex-100 pl-6 ml-10 m-ml-0',
            'flex-100 m-flex-99 search',
            'کلمه یا عبارت خود را جستجو کنید',
            'جستجو',
            'magnifier',
        ));

        return $this->filterGroup->toArray();
    }

    public function actions(): array
    {
        $this->actionGroup
            ->addActionSelect(($this->query['trash'] ?? false) == 'true' , 'action' , 'forms.delete')
            ->addCreateBtn(route('panel.forms.create') , 'forms.create');

        return $this->actionGroup->toArray();
    }

    public function links(): array
    {
        return [];
    }

    public function columns(): array
    {
        $this->column
            ->addColumn('component' , '' , 'id' , 'inputs.panel.checkbox' , 'flex-5 m-flex-15' , wireModel: 'selected')
            ->addColumn('text' , 'شناسه' , 'id' , '' , 'flex-5 m-flex-22')
            ->addColumn('text' , 'نام فرم' , 'name' , '' , 'flex-20 m-flex-100' , href: fn(Form $form) => route('panel.forms.inboxes' , ['id' => $form->id]))
            ->addColumn('text' , 'کد فرم' , 'code' , '' , 'flex-13 m-flex-100')
            ->addColumn('text' , 'تاریخ ایجاد' ,  fn(Form $form) => jdate($form->created_at)->format('Y-m-d H:i') , '' , 'flex-20 m-flex-70')
            ->addColumn('text' , 'تعداد ارسال شده' , 'inbox_count' , '' , 'flex-20 m-flex-50')
            ->addColumn('component' , 'عملیات' , '' , 'actions.panel.action-buttons' , 'sticky-table flex-16 m-flex-45' , actions: [
                array('type' => 'edit' , 'route' => fn(Form $form) => route('panel.forms.edit' , ['id' => $form->id]) , 'can' => 'forms.edit'),
                array('type' => 'delete' , 'route' => '#4', 'can' => 'forms.delete'),
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
            $form = $this->getForm($id);
            $inboxPath = config('formbuilder.inbox.storage') . $form->code . '.sqlite';

            File::delete($inboxPath, '');

            $form->delete();
        }
    }

    #[On('restore')]
    public function restore($id, $type = 'message'): void
    {
        // TODO: Implement restore() method.
    }

    #[On('replicate')]
    public function replicate($id, $type = 'message'): void
    {
        // TODO: Implement replicate() method.
    }

    #[On('runAction')] public function runAction($data): void
    {
        if ($data == 1) {
            foreach ($this->selected as $item) {
                $this->destroy($item , 'action');
            }
        }

        $this->action = 0;

        $this->selected = [];
    }

    private function getForm($id) {
        return Form::query()->findOrFail($id);
    }
}
