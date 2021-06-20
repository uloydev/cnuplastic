<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait ByUserId
{
    public function scopeByUserId(Builder $query, $userId = null)
    {
        if (is_null($userId) and auth()->check()) {
            $userId = auth()->id();
        }
        return $query->where('user_id', $userId);
    }
}
