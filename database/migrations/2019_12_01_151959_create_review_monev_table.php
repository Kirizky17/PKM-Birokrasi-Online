<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewMonevTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_monev', function (Blueprint $table) {
            $table->increments('idReviewMonev');
            $table->text('nilai');
            $table->integer('totalNilai');
            $table->text('komentar');
            $table->String('reviewer',20);
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
        Schema::dropIfExists('review_monev');
    }
}
