<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailUsulanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_usulan', function (Blueprint $table) {
            $table->String('bidangIlmu',40);
            $table->integer('usulanBiayaKegiatan');
            $table->integer('biayaDidanai');
            $table->String('dosenPendamping',18);
            $table->foreign('dosenPendamping')->references('NIP')->on('dosen');
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
        Schema::dropIfExists('detail_usulan');
    }
}
