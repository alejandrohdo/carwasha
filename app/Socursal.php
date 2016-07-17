<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socursal extends Model
{
    protected $fillable = [
        'nombre', 'lugar', 'direccion',
    ];
    public function user()
    {
        return $this->belongsTo(User:class);
    }
}
 