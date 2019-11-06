<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operariolog extends Model
{
    protected $table = 'operarioslog';

    protected $fillable = ['usuario','pass', 'id_operario'];
    protected $primaryKey = 'usuario';
    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = false;
}
