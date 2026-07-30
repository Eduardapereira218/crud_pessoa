<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    // Campos permitidos para cadastro
    protected $fillable = [
        'nome',
        'email',
        'curso'
    ];
}