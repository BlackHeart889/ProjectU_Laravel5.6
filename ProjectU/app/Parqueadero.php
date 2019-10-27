<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parqueadero extends Model
{
    protected $fillable = ['cupos_dvehiculos', 'cupos_dmotocicletas'];
    protected $table = 'parqueaderos';

    protected $primaryKey = 'id_parqueadero';
    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = false;
}
