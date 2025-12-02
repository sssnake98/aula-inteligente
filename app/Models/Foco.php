<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foco extends Model
{
    protected $fillable = ['codigo', 'tipo', 'intensidad', 'ubicacion'];

    public function historial()
    {
        return $this->hasMany(HistorialFoco::class, 'foco_id');
    }
}