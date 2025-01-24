<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Program extends Model implements HasMedia
{
    use InteractsWithMedia;
    function watchs() : BelongsToMany {
        return $this->BelongsToMany(User::class, "watch_program");
    }
}
