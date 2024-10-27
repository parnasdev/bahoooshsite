<?php

namespace Harvest\Bahooosh\Livewire\Components\Comments;

use App\Enums\PostType;
use App\Models\Comment;
use App\Models\Page;
use App\Models\Post;
use Harvest\Bahooosh\Livewire\Forms\CommentForm;
use LivewireUI\Modal\ModalComponent;

class CommentModal extends ModalComponent
{
    public Post $model;

    public int | null $commentId = null;

    public CommentForm $form;

    public function mount(int $modelId)
    {
        $this->model = Post::query()->withoutGlobalScopes()->findOrFail($modelId);
        $this->form->commentable_id = $this->model->id;
        $this->form->commentable_type = $this->model->type == PostType::POST ? Post::class : Page::class;
        if (auth()->check()) {
            $this->form->user_id = auth()->id();
        }

        if (!empty($this->commentId)) {
            $this->form->parent_id = $this->commentId;
        }
    }

    public function render()
    {
        return view('bahooosh::livewire.components.comments.comment-modal');
    }

    public function submit()
    {
        $this->validate();

        Comment::query()->create($this->form->all());

        $this->dispatch('toastMessage' ,  message: "کامنت شما ثبت شد لطفا منتظر تایید ادمین باشید" , icon: "success");

        $this->closeModalWithEvents([
            CommentList::class => 'fetchComments'
        ]);
    }
}
