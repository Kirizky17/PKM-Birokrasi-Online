<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewLaporanKemajuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_laporan_kemajuan', function (Blueprint $table) {
            $table->increments('idReviewLaporanKemajuan');
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
        Schema::dropIfExists('review_laporan_kemajuan');
    }
}
