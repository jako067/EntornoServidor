<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Anime extends Model
{
    protected $hidden = ["created_at","updated_at"];
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function characters(): BelongsToMany
    {
        return $this->belongsToMany(Character::class);
    }
    public function studio(): BelongsTo
    {
        return $this->belongsTo(Studio::class);
    }
}
