<?php

namespace Harvest\Bahooosh\Livewire\Components\Comments;

use App\Models\Page;
use App\Models\Post;
use Illuminate\Support\Facades\Cache;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class CommentList extends Component
{
    use WithPagination;
    public $paginationTheme = 'bahooosh';

    public Post $model;

    #[On('fetchComments')]
    public function render()
    {
        $comments = Cache::flexible('post-comments-list' , [5 , 10], function () {
          return $this->model->comments()
                ->whereNull('parent_id')
                ->where('approved', 1)
                ->with(['comments' => fn($query) => $query->where('approved' , 1)->latest()])
                ->paginate(pageName: 'commentPage');
        });

        $avgRate = Cache::flexible('post-avg-rate' , [5 , 10], function () {
          return number_format($this->model->comments()
              ->whereNull('parent_id')
              ->where('approved', 1)
              ->avg('rate'), 1);
        });

        return view('bahooosh::livewire.components.comments.comment-list' , compact('comments' , 'avgRate'));
    }
}
