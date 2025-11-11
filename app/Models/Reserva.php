<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    public function aula()
{
    return $this->belongsTo(Aula::class);
}

public function materia()
{
    return $this->belongsTo(Materia::class);
}

public function docente()
{
    return $this->belongsTo(Docente::class);
}
}
