<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SizeProject extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion',
    ];

    function project(){
        return $this->hasMany('App\Project');
    }
}