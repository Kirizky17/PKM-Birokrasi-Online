<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'setting';
    protected $primaryKey = 'idSetting';
    protected $keyType = 'integer';
    public $timestamps = false;
}
