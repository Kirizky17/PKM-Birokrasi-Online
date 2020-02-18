<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewLaporanKemajuan extends Model
{
    protected $table = 'review_laporan_kemajuan';
    protected $primaryKey = 'idReviewLaporanKemajuan';
    protected $keyType = 'integer';
    public $timestamps = false;
}
