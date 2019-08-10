<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['aluno_nome', 'aluno_nasc','aluno_logra', 'aluno_cep', 'aluno_bairro', 'aluno_cidade', 'aluno_estado', 'aluno_num', 'curso_id'];
}
