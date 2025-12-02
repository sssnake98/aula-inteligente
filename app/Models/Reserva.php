<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = [
        'fecha', 'hora_inicio', 'hora_fin', 'tipo_origen',
        'materia_id', 'docente_id', 'aula_id'
    ];

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