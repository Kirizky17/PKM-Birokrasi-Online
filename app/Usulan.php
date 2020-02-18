<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usulan extends Model
{
    protected $table = 'usulan';
    protected $primaryKey = 'idUsulan';
    protected $keyType = 'integer';
    public $timestamps = false;
}
