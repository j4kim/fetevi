<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\View\View;

class Campaign extends Model
{
    protected function casts(): array
    {
        return [
            'articles' => 'array',
            'is_active' => 'boolean',
        ];
    }

    public function view(): View
    {
        return view("themes.$this->theme.index", $this);
    }

    public static function getActive(): ?self
    {
        return self::where('is_active', true)->first();
    }
}
