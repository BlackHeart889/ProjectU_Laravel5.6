<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuariolog extends Model
{
    protected $table = 'usuarioslog';

    protected $primaryKey = 'usuario';
    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = false;
}
