<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
use Mokhosh\FilamentKanban\Concerns\IsKanbanStatus;

enum PostStatus: string implements HasLabel
{
    use IsKanbanStatus;

    case Verified = 'Verified';
    case Published = 'Published';
    case Rejected = 'Rejected';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Verified => 'Verified',
            self::Published => 'Published',
            self::Rejected => 'Rejected',
        };
    }
}
