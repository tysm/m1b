<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psicologo extends Model
{
    protected $fillable = [
        'nome',
        'cpf',
        'telefone',
        'email',
        'epsi',
        'especialidade'
    ];
}
