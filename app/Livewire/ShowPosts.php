<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPosts extends Component
{
    use WithPagination;

    public $amount = 10;

    public function loadMore(): void
    {
        $this->amount += 10;
    }

    public function render(): View
    {
        $posts = Post::take($this->amount)->where('status', 'Published')->get();
        return view('livewire.show-posts', [
            'posts' => $posts,
        ]);
    }
}
