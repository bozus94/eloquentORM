<?php

namespace App;

use App\Location;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function location()
    {
        //Relacion uno a uno
        //hasOne => tiene uno 
        return $this->hasOne(Location::class);
    }
}
