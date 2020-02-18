<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewLaporanAkhir extends Model
{
    protected $table = 'review_laporan_akhir';
    protected $primaryKey = 'idReviewLaporanAkhir';
    protected $keyType = 'integer';
    public $timestamps = false;
}
