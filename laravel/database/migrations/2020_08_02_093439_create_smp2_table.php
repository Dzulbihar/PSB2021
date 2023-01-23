<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmp2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smp2', function (Blueprint $table) {
            $table->id();

            $table->string('jalur');

            $table->string('tanggal_masuk');
            $table->string('bulan');
            $table->string('status');
            $table->string('fasilitas');
            
            $table->string('namalengkap');
            $table->string('avatar2');
            $table->string('nisn2');
            $table->string('nik2');
            $table->string('tempatlahir2');
            $table->date('tbt2');
            $table->string('jenkel');

            $table->string('desa2');
            $table->string('kec2');
            $table->string('kab2');
            $table->string('prov2');
            $table->string('kodepos2');

            $table->string('cita2');
            $table->string('jumlahsaudara2');

            $table->string('asalsekolah2');
            $table->string('alamatasalsekolah2');

            $table->string('nokk2');
            $table->string('namaayah2');
            $table->string('nikayah2');
            $table->string('tahunlahirayah2');
            $table->string('pendidikanayah2');
            $table->string('pekerjaanayah2');

            $table->string('namaibu2');
            $table->string('nikibu2');
            $table->string('tahunlahiribu2');
            $table->string('pendidikanibu2');
            $table->string('pekerjaanibu2');
            $table->string('penghasilan2');
            
            $table->string('prestasi2');
            $table->string('nohp2');
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
        Schema::dropIfExists('smp2');
    }
}
