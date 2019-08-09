<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
     protected $fillable = ['prof_nome', 'prof_nasc'];
}
