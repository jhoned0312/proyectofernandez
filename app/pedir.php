<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedir extends Model
{
    protected $fillable = [
        'nombre', 'direccion','pedido', 'costo', 'tipo',
    ];
}
