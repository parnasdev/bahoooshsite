<?php

namespace App\Livewire\Panel\Comments;

use App\Livewire\Forms\Panel\CommentForm;
use App\Models\Comment;
use LivewireUI\Modal\ModalComponent;

class CommentReplay extends ModalComponent
{
    public ?Comment $comment;

    public CommentForm $replay;

    protected $listeners = ['getData' , 'closeModal'];

    public $size = 0;

    public function render()
    {
        return view('livewire.panel.comments.comment-replay');
    }

    public static function modalMaxWidthClass(): string
    {
        return 'w-40';
    }

    public function mount(Comment $incomment)
    {
        $this->comment = $incomment;
    }

    public function submit() {
        $this->replay->name = user()->name;
        $this->validate();
        $this->replay->parent_id = $this->comment->id;
        $this->replay->commentable_id = $this->comment->commentable_id;
        $this->replay->commentable_type = $this->comment->commentable_type;
        $this->replay->user_id = user()->id;
        $this->replay->approved = 1;

        Comment::query()->create($this->replay->all());

        $this->comment->approved = 1;

        $this->comment->save();

        $this->dispatch('toastMessage' , message:'پاسخ برای این نظر ثبت شد.' , icon:'success');

        $this->dispatch('close-modal');

        $this->dispatch('render');

        $this->closeModal();
    }
}
