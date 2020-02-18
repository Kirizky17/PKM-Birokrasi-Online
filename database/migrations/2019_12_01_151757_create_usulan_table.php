<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsulanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usulan', function (Blueprint $table) {
            $table->increments('idUsulan');
            $table->String('tahun',4);
            $table->String('skim',20);
            $table->text('judul');
            $table->integer('status');
            $table->text('proposal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usulan');
    }
}
