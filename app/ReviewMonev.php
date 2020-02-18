<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewMonev extends Model
{
    protected $table = 'review_monev';
    protected $primaryKey = 'idReviewMonev';
    protected $keyType = 'integer';
    public $timestamps = false;
}
