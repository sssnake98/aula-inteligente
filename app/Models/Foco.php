<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foco extends Model
{
    public function historial()
{
    return $this->hasMany(HistorialFoco::class, 'foco_id');
}
}
