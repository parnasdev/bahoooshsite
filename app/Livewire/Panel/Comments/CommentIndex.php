<?php

namespace App\Livewire\Panel\Comments;

use App\Enums\PostType;
use App\Livewire\TableComponent;
use App\Models\Comment;
use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;
#[Layout('components.layouts.panel')]
class CommentIndex extends TableComponent
{
    use WithPagination;

    public ?Post $post;

    #[Url]
    public string $type = 'post';

    #[Url]
    public $status = 3;

    #[Url]
    public $redirectBack = '';

    public $perPage = 15;

    public bool $all_comments = false;


    public function mount() {

            $this->all_comments = true;
    }

    #[On('render')]
    public function render()
    {
        if ($this->all_comments) {
            $comments = Comment::query()->whereHasMorph(
                'commentable',
                [Post::class],
                function ($query) {
                    $query->where('deleted_at' , null)->where('type' , $this->type);
                }
            );
        } else {
            $comments =
                $this->post->comments();
        }

        if ($this->status == 0) {
            $comments = $comments->where('approved' , 0)->paginate(15);
        } else if ($this->status == 1) {
            $comments = $comments->whereNull('parent_id')->where('approved' , 1)->paginate(15);
        } else {
            $comments = $comments->whereNull('parent_id')->paginate(15);
        }

        $perPages = [15 , 30 , 45 , 50];
        return view('livewire.panel.comments.comment-index' , compact('comments' , 'perPages'));
    }

    public function approvedMessage($id) {
        $this->dispatch('message' , message: 'آیا میخواهید این نظر را تایید کنید؟' , icon: 'warning' , title: 'اطمینان دارید؟' , btnCText: 'بله' , btnCAText: 'لغو' , eventName: 'approved' , data: $id);
    }

    #[On('approved')]
    public function approved($data)
    {
        $comment = Comment::query()->find($data);
        $comment->update(['approved' => 1]);
        $this->dispatch('toast-message' , message:'این نظر تایید شد.' , icon:'success');
    }

    public function replay($comment)
    {
        $this->dispatch('getData' , $comment);
        $this->dispatch('open-modal');

    }

    public function deleteMessage($id)
    {
        $this->dispatch('deleteMessage' , eventName: 'delete' , id: $id , force: true);
    }

    public function filters(): array
    {
        // TODO: Implement filters() method.
    }

    public function actions(): array
    {
        // TODO: Implement actions() method.
    }

    public function links(): array
    {
        $this->linkGroup->addLink('بازگشت' , $this->redirectBack , color: 'info');

        return $this->linkGroup->toArray();
    }

    public function columns(): array
    {
        // TODO: Implement columns() method.
    }

    #[On('delete')]
    public function destroy($id, $type = 'message'): void
    {
        if ($type == 'message')
            $this->dispatch('deleteMessage' , eventName: 'delete' , id: $id);
        else {
            $comment = Comment::query()->find($id);

            if ($comment->parent_id == null || $comment->parent_id == 0)
                $comment->comments()->delete();

            $comment->delete();
        }
    }

    #[On('restore')] public function restore($id, $type = 'message'): void
    {
        // TODO: Implement restore() method.
    }

    #[On('replicate')] public function replicate($id, $type = 'message'): void
    {
        // TODO: Implement replicate() method.
    }

    #[On('runAction')] public function runAction($data): void
    {
        // TODO: Implement runAction() method.
    }
}
