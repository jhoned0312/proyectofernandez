<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    protected $fillable = [
        'nombre', 'direccion','pedido', 'costo', 'tipo',
    ];
}
