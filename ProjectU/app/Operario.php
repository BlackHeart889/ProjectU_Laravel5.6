<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operario extends Model
{
    protected $table = 'operarios';

    protected $fillable = ['id_operario', 'nom_operario', 'cargo_operario', 'sesion_activa'];
    protected $primaryKey = 'id_operario';
    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = false;
}
