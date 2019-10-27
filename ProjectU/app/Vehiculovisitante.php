<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculovisitante extends Model
{
    protected $fillable = ['tipo_vehiculo', 'placa'];

    protected $table = 'vehiculos_visitantes';

    protected $primaryKey = 'placa';

    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = false;
}
