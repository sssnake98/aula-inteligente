<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disponibilidad extends Model
{
    protected $table = 'disponibilidades';
    protected $fillable = ['fecha', 'hora', 'estado', 'aula_id'];
public function aula() { return $this->belongsTo(Aula::class); }
}
