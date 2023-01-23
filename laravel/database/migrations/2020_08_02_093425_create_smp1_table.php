<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmp1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smp1', function (Blueprint $table) {
            $table->id();

            $table->string('jalur');

            $table->string('tanggal_masuk');
            $table->string('bulan');
            $table->string('status');
            $table->string('fasilitas');

            $table->string('namalengkap');
            $table->string('avatar1');
            $table->string('nisn1');
            $table->string('nik1');
            $table->string('tempatlahir1');
            $table->date('tbt1');
            $table->string('jenkel');

            $table->string('desa1');
            $table->string('kec1');
            $table->string('kab1');
            $table->string('prov1');
            $table->string('kodepos1');

            $table->string('cita1');
            $table->string('jumlahsaudara1');

            $table->string('asalsekolah1');
            $table->string('alamatasalsekolah1');

            $table->string('nokk1');
            $table->string('namaayah1');
            $table->string('nikayah1');
            $table->string('tahunlahirayah1');
            $table->string('pendidikanayah1');
            $table->string('pekerjaanayah1');

            $table->string('namaibu1');
            $table->string('nikibu1');
            $table->string('tahunlahiribu1');
            $table->string('pendidikanibu1');
            $table->string('pekerjaanibu1');
            $table->string('penghasilan1');
            
            $table->string('prestasi1');
            $table->string('nohp1');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('smp1');
    }
}
