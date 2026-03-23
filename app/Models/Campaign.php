<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected function casts(): array
    {
        return [
            'articles' => 'array',
            'is_active' => 'boolean',
        ];
    }
}
