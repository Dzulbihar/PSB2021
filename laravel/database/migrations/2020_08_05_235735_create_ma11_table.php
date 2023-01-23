<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMa11Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ma11', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap62');
            $table->string('status62');
            $table->string('avatar62');
            $table->string('nisn62');
            $table->string('nik62');
            $table->string('tempatlahir62');
            $table->date('tbt62');
            $table->string('jenkel62');

            $table->string('desa62');
            $table->string('kec62');
            $table->string('kab62');
            $table->string('prov62');
            $table->string('kodepos62');

            $table->string('cita62');
            $table->string('jumlahsaudara62');

            $table->string('asalsekolah62');
            $table->string('alamatasalsekolah62');

            $table->string('nokk62');
            $table->string('namaayah62');
            $table->string('nikayah62');
            $table->string('tahunlahirayah62');
            $table->string('pendidikanayah62');
            $table->string('pekerjaanayah62');

            $table->string('namaibu62');
            $table->string('nikibu62');
            $table->string('tahunlahiribu62');
            $table->string('pendidikanibu62');
            $table->string('pekerjaanibu62');
            $table->string('penghasilan62');
            
            $table->string('prestasi62');
            $table->string('nohp62');
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
        Schema::dropIfExists('ma11');
    }
}
