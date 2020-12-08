<?php

namespace App;

use App\Post;
use App\User;
use App\Video;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user()
    {
        //relacion uno a uno
        //belongsTo => pertence a uno
        return $this->belongsTo(User::class);
    }

    public function commentable()
    {
        //MorphTo => transformar a
        return $this->MorphTo();
    }

    public function post()
    {
        //relacion uno a uno
        //belongsTo => pertence a uno
        return $this->belongsTo(Post::class);
    }

    public function video()
    {
        //relacion uno a uno
        //belongsTo => pertence a uno
        return $this->belongsTo(Video::class);
    }
}
