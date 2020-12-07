<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {
        //relacion polimorfica muchos a muchos
        //morphedByMany => tiene y pertence a muchos => tabla madre
        return $this->morphedByMany(Post::class, 'taggable');
    }
    public function videos()
    {
        //relacion polimorfica muchos a muchos
        //morphedByMany => tiene y pertence a muchos => tabla madre
        return $this->morphedByMany(Video::class, 'taggable');
    }
}
