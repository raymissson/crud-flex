<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['curso_nome', 'prof_id'];

    public function aluno()
    {
        return $this->belongsTo('App\Aluno', 'aluno_id');
    }
}
