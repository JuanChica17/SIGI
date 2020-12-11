<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facturacion extends Model
{
    protected $fillable = [
        'id_facturacion',
        'mes_a_pagar',
        'concepto',
        'valor',
        'deducciones',
        'total_pagar',
    ];
}
