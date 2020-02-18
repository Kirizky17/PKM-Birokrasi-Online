<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewProposal extends Model
{
    protected $table = 'review_proposal';
    protected $primaryKey = 'idReviewProposal';
    protected $keyType = 'integer';
    public $timestamps = false;
}
