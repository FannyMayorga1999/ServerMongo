<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'descripcion',
        'fechaComienzo',
        'fechaFinal',
        'estado',
        
    ];

    function priority(){
        return $this->belongsTo('App\Priority');
    }

    function poject(){
        return $this->hasOne('App\Project');
    }

    function profile(){
        return $this->hasOne('App\Profile');
    }
}
