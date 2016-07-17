<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lavado extends Model
{
    protected $fillable = [
        'precio', 'estado',
    ];
    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo:class);
    }
    public function user()
    {
        return $this->belongsTo(User:class);
    }
}
