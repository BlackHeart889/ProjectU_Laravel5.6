<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingresovisitante extends Model
{
    protected $fillable = ['id_operario',
                            'n_visitante',
                            'id_visitante',
                            'tipo_id',
                            'tipo_vehiculo',  
                            'placa', 
                            'motivo',
                            'hora', 
                            'fecha', 
                            'id_parqueadero'];

    protected $table = 'ingreso_visitantes';

    protected $primaryKey = ['id_operario',
                            'id_visitante',
                            'placa',  
                            'hora', 
                            'fecha'];
    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = false;
}
