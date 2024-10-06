<?php

namespace App\Traits;

use App\Livewire\Forms\Panel\CommentForm;
use App\Models\Comment;
use App\Models\Post;

trait WithComments
{
    public CommentForm $commentForm;

    public function getComments()
    {
        return ($this->post ?? $this->product)->comments()->whereNull('parent_id')->where('approved', 1)->paginate(20, ['*'], 'commentsPage');
    }

    public function getAggregateRating()
    {
        $reviewCount = ($this->post ?? $this->product)->comments()->whereNull('parent_id')->where('approved', 1)->get()->count();
        $ratingValue = ($this->post ?? $this->product)->comments()->whereNull('parent_id')->where('approved', 1)->get()->avg('rate');

        return [$reviewCount , $ratingValue];
    }

    public function submit()
    {
        $this->commentForm->validate();
        $this->commentForm->commentable_type = get_class(($this->post ?? $this->product));
        $this->commentForm->commentable_id = ($this->post ?? $this->product)->id;
        $this->commentForm->approved = auth()->check() ? user()?->role_id == 1 : 0;
        $this->commentForm->parent_id = null;
        Comment::query()->create($this->commentForm->all());
        $this->commentForm->reset();
        $this->dispatch('toastMessage', message:'نظر شما ثبت شد. منتظر تایید ادمین باشید', icon:'success');
    }
}
