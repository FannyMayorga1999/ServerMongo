<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombreProyecto', 
        'justificacion',
        'descripcion',
        'objetivoGeneral',
        'estrategiaProyecto',
        'beneficiarios',
        'codigoProyecto',
        'fechaComienzo',
        'fechaFinal',
    ];

    function sizeProject(){
        return $this->belongsTo('App\SizeProject');
    }
}