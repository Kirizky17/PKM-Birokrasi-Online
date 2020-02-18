<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting', function (Blueprint $table) {
            $table->increments('idSetting');
            $table->String('tahunPelaksanaan',4)->unique();
            $table->String('status',12);
            $table->dateTime('mulaiUnggahProposal');
            $table->dateTime('mulaiPenilaianProposal');
            $table->dateTime('mulaiUnggahLaporanKemajuan');
            $table->dateTime('mulaiPenilaianLaporanKemajuan');
            $table->dateTime('mulaiUnggahLaporanAkhir');
            $table->dateTime('mulaiPenilaianLaporanAkhir');
            $table->dateTime('akhirUnggahProposal');
            $table->dateTime('akhirPenilaianProposal');
            $table->dateTime('akhirUnggahLaporanKemajuan');
            $table->dateTime('akhirPenilaianLaporanKemajuan');
            $table->dateTime('akhirUnggahLaporanAkhir');
            $table->dateTime('akhirPenilaianLaporanAkhir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setting');
    }
}
