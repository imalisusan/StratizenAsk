<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Tag extends Model
{
    use Searchable;
    public function post()
    {
        return $this->belongsToMany(Post::class);
    }
}
