<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    function category() : BelongsTo {
        return $this->belongsTo(Category::class);
    }
}