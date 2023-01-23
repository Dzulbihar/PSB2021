<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();

            $table->string('jalur');
            $table->string('tes');

            $table->string('tanggal_masuk');
            $table->string('bulan');
            
            $table->string('status');
            $table->string('namalengkap');
            $table->string('nisn');
            $table->string('nik');
            $table->string('tempatlahir');
            $table->date('tbt');
            $table->string('jenkel');

            $table->string('desa');
            $table->string('kec');
            $table->string('kab');
            $table->string('prov');
            $table->string('kodepos');

            $table->string('cita');
            $table->string('jumlahsaudara');

            $table->string('asalsekolah');
            $table->string('alamatasalsekolah');

            $table->string('nokk');
            $table->string('namaayah');
            $table->string('nikayah');
            $table->string('tahunlahirayah');
            $table->string('pendidikanayah');
            $table->string('pekerjaanayah');

            $table->string('namaibu');
            $table->string('nikibu');
            $table->string('tahunlahiribu');
            $table->string('pendidikanibu');
            $table->string('pekerjaanibu');
            $table->string('penghasilan');
            
            $table->string('prestasi');
            $table->string('nohp');

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
        Schema::dropIfExists('siswa');
    }
}
