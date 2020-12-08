<?php

namespace App;

use App\Post;
use App\User;
use App\Video;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function users()
    {
        //Relacion uno a muchos
        //hasMany => tiene muchos
        return $this->hasMany(User::class);
    }

    public function videos()
    {
        //Relacion uno a muchos
        //hasManyThrough => tiene muchos atraves de
        return $this->hasManyThrough(Video::class, User::class);
    }

    public function posts()
    {
        //Relacion uno a muchos
        //hasManyThrough => tiene muchos atraves de
        return $this->hasManyThrough(Post::class, User::class);
    }
}
