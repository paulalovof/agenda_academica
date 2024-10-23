<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public function turma() {
        return $this->belongsTo('App\Models\Turma');
    }
}
