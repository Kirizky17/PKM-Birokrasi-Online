<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewProposalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_proposal', function (Blueprint $table) {
            $table->increments('idReviewProposal');
            $table->integer('nilai');
            $table->text('komentar');
            $table->integer('persetujuaanBiaya');
            $table->String('reviewer',18);
            $table->foreign('reviewer')->references('NIP')->on('dosen');
            $table->integer('usulan')->unsigned();
            $table->foreign('usulan')->references('idUsulan')->on('usulan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('review_proposal');
    }
}
