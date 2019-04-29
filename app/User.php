<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 
        'email', 
        'contraseña',
        'apellido',
        'celular'

    ];

    function profile(){
        return $this->hasOne('App\Profile');
    }
}
