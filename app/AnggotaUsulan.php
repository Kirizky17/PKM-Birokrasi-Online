<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnggotaUsulan extends Model
{
    protected $table = 'anggota_usulan';
    protected $primaryKey = 'idAnggota';
    protected $keyType = 'integer';
    public $timestamps = false;
}
