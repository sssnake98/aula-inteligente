<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mueble extends Model
{
    protected $fillable = ['nombre', 'nro_inventario', 'es_proyector', 'estado'];

    protected $casts = [
        'es_proyector' => 'boolean',
    ];
}