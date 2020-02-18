<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->String('NIM',9)->primary();
            $table->String('nama',50);
            $table->String('angkatan',4);
            $table->String('jurusan',50);
            $table->String('prodi',50);
            $table->String('email',50);
            $table->String('username',20);
            $table->String('password',32);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}
