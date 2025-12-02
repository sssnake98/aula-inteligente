<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AireAcondicionado extends Model
{
    protected $fillable = ['estado', 'mantenimiento'];

    public function historial()
    {
        return $this->hasMany(HistorialUsoAire::class, 'aire_acondicionado_id');
    }
}