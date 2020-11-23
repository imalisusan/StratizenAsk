<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Tag extends Model
{
    use Searchable;
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
    public function searchableAs()
    {
        return 'tags';
    }
    public function getScoutKey()
    {
        return $this->name;
    }

    /**
     * Get the key name used to index the model.
     *
     * @return mixed
     */
    public function getScoutKeyName()
    {
        return 'name';
    }
    public function getRouteKeyName()
    {
    return 'name';
    }
}
