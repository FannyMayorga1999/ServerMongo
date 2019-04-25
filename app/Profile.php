<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
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
