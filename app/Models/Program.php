<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Program extends Model
{
    function watchs() : BelongsToMany {
        return $this->BelongsToMany(User::class, "watch_program");
    }
}
