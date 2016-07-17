<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $fillable = [
        'placa', 'fecha_registro', 'tipo', 'descripcion',
    ];
    public function lavado()
    {
        return $this->hasMany(Lavado:class);
    }
}
