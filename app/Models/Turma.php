<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    public function aluno() {
        return $this->hasManyTo('\App\Models\Aluno'); 
    }

    public function nivel() {
        return $this->belongsTo('App\Models\Nivel');
    }
}