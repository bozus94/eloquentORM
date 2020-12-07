<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
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
