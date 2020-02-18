<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    protected $primaryKey = 'NIP';
    protected $keyType = 'string';
    public $timestamps = false;
}
