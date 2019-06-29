<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'paciente',
        'psicologo',
        'especialidade',
        'inicio',
        'fim',
        'paciente_obs',
        'psicologo_fbk'
    ];
}
