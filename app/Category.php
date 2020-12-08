<?php

namespace App;

use App\Post;
use App\Video;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts()
    {
        //Relacion uno a muchos
        //hasMany => tiene muchos
        return $this->hasMany(Post::class);
    }

    public function videos()
    {
        //Relacion uno a muchos
        //hasMany => tiene muchos
        return $this->hasMany(Video::class);
    }
}
