<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mts', function (Blueprint $table) {
            $table->id();

            $table->string('jalur');

            $table->string('tanggal_masuk');
            $table->string('bulan');
            $table->string('status');
            $table->string('fasilitas');

            $table->string('namalengkap');
            $table->string('avatar3');
            $table->string('nisn3');
            $table->string('nik3');
            $table->string('tempatlahir3');
            $table->date('tbt3');
            $table->string('jenkel');

            $table->string('desa3');
            $table->string('kec3');
            $table->string('kab3');
            $table->string('prov3');
            $table->string('kodepos3');

            $table->string('cita3');
            $table->string('jumlahsaudara3');

            $table->string('asalsekolah3');
            $table->string('alamatasalsekolah3');

            $table->string('nokk3');
            $table->string('namaayah3');
            $table->string('nikayah3');
            $table->string('tahunlahirayah3');
            $table->string('pendidikanayah3');
            $table->string('pekerjaanayah3');

            $table->string('namaibu3');
            $table->string('nikibu3');
            $table->string('tahunlahiribu3');
            $table->string('pendidikanibu3');
            $table->string('pekerjaanibu3');
            $table->string('penghasilan3');
            
            $table->string('prestasi3');
            $table->string('nohp3');
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
        Schema::dropIfExists('mts');
    }
}
