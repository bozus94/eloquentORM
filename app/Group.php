<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function users()
    {
        //Relacion muhchos a muchos
        //En las relaciones muchos a muchos se necesita una tabla intermedia
        // belongsToMany => pertenece y tiene muchos
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
