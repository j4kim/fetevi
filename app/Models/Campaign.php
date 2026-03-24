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

    protected static function booted(): void
    {
        static::saving(function (Campaign $campaign) {
            if ($campaign->isDirty('is_active') && $campaign->is_active) {
                $oldActive = Campaign::where('id', '!=', $campaign->id)
                    ->where('is_active', true)
                    ->first();
                if (!$oldActive) {
                    return;
                }
                $oldActive->is_active = false;
                $oldActive->saveQuietly();
            }
        });
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
