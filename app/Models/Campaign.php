<?php

namespace App\Models;

use Illuminate\Container\Attributes\Storage;
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

    public static function themeOptions(): array
    {
        $themePath = resource_path('views/themes');
        return collect(scandir($themePath))
            ->filter(fn($path) => is_dir("$themePath/$path") && !str_starts_with($path, '.'))
            ->mapWithKeys(fn($path) => [$path => $path])
            ->toArray();
    }
}
