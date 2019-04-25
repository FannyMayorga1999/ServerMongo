<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Profile extends Eloquent
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'apellido',
        'fechaNacimiento',
        'email',
        'celular',
    ];
    
    function user(){
        return $this->belongsTo('App\User');
    }

    function role(){
        return $this->belongsTo('App\Role');
    }
}
