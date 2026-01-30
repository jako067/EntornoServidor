<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Space extends Model
{
    public function customers(): BelongsToMany{
        return $this->belongsToMany(Space::class);
    }
}
