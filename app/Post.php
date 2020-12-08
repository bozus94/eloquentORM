<?php

namespace App;

use App\Tag;
use App\User;
use App\Image;
use App\Comment;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        //relacion uno a uno
        //belongsTo => pertence a uno
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        //relacion uno a uno
        //belongsTo => pertence a uno
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        //relacion polimorfica uno a muchos
        //morphMany => tiene muchos
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function image()
    {
        //relacion polimorfica uno a uno
        //morphOne => tiene uno
        return $this->morphOne(Image::class, 'imageable');
    }

    public function tags()
    {
        //relacion polimorfica muchos a muchos
        //morphToMany => tiene y pertence a muchos
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
