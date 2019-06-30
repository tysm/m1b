<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psicologo extends Model
{
    protected $fillable = [
        'name',
        'id',
        'cpf',
        'email',
        'epsi',
        'especialidade'
    ];
}
