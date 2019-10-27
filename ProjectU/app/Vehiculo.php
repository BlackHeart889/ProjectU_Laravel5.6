<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $fillable = ['id_usuario', 
                           'placa', 
                           'tipo_vehiculo', 
                           'modelo_vehiculo',
                           'color_vehiculo'];
                           
    protected $table = 'vehiculos';

    protected $primaryKey = 'placa';
    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = false;
}
