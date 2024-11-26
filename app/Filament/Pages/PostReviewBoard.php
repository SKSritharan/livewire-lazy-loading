<?php

namespace App\Filament\Pages;

use App\Enums\PostStatus;
use App\Models\Post;
use Mokhosh\FilamentKanban\Pages\KanbanBoard;

class PostReviewBoard extends KanbanBoard
{
    protected static string $model = Post::class;
    protected static string $statusEnum = PostStatus::class;
    public $amount = 10;

    public function loadMore(): void
    {
        $this->amount += 10;
    }

    protected function records(): \Illuminate\Support\Collection
    {
        return Post::latest()->take($this->amount)->get();
    }
}
