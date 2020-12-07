<?php

namespace App;

use App\Group;
use App\Level;
use App\Profile;
use App\Location;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
        //Relacion uno a uno
        //hasOne => tiene uno 
        return $this->hasOne(Profile::class);
    }

    public function level()
    {
        //relacion uno a uno
        //belongsTo => pertence a uno
        return $this->belongsTo(Level::class);
    }

    public function groups()
    {
        //Relacion muhchos a muchos
        //En las relaciones muchos a muchos se necesita una tabla intermedia
        // belongsToMany => pertenece y tiene muchos
        return $this->belongsToMany(Group::class)->withTimestamps();
    }

    public function Location()
    {
        //Relacion uno a uno
        //hasOneThrough => tiene uno atraves de
        return $this->hasOneThrough(Location::class, Profile::class);
    }
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
        return $this->hasMany(Post::class);
    }
}
