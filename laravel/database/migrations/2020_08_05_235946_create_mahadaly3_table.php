<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahadaly3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahadaly3', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap73');
            $table->string('avatar73');
            $table->string('nisn73');
            $table->string('nik73');
            $table->string('tempatlahir73');
            $table->date('tbt73');
            $table->string('jenkel73');

            $table->string('desa73');
            $table->string('kec73');
            $table->string('kab73');
            $table->string('prov73');
            $table->string('kodepos73');

            $table->string('cita73');
            $table->string('jumlahsaudara73');

            $table->string('asalsekolah73');
            $table->string('alamatasalsekolah73');

            $table->string('nokk73');
            $table->string('namaayah73');
            $table->string('nikayah73');
            $table->string('tahunlahirayah73');
            $table->string('pendidikanayah73');
            $table->string('pekerjaanayah73');

            $table->string('namaibu73');
            $table->string('nikibu73');
            $table->string('tahunlahiribu73');
            $table->string('pendidikanibu73');
            $table->string('pekerjaanibu73');
            $table->string('penghasilan73');
            
            $table->string('prestasi73');
            $table->string('nohp73');
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
        Schema::dropIfExists('mahadaly3');
    }
}
