<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salidausuario extends Model
{
    protected $fillable = ['id_operario',
                            'tipo_vehiculo',  
                            'placa', 
                            'hora', 
                            'fecha', 
                            'id_parqueadero'];

    protected $table = 'salida_usuarios';

    protected $primaryKey = ['id_operario',
                            'tipo_vehiculo',  
                            'placa', 
                            'hora', 
                            'fecha'];
    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = false;
}
