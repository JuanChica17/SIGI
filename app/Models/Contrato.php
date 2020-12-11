<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $fillable = [
        'id_contrato',
        'servicio_que_presta',
        'valor_comision',
        'fecha_inicio',
        'fecha_fin',
    ];
}
