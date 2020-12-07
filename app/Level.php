<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

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
