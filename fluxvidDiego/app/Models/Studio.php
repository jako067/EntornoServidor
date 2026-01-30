<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Studio extends Model
{
    public function animes ():  hasMany
    {
        return $this->hasMany(Anime::class);
    }
}
