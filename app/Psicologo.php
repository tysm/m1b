<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psicologo extends Model
{
    protected $fillable = [
        'name',
        'cpf',
        'email',
        'epsi',
        'especialidades'
    ];
}
