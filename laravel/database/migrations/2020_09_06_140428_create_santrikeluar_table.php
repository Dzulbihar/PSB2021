<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSantrikeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('santrikeluar', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap00');

            $table->string('jenjang00');
            $table->string('tahunajaran00');
            $table->string('alasan00');

            $table->string('avatar00');
            $table->string('nisn00');
            $table->string('nik00');
            $table->string('tempatlahir00');
            $table->date('tbt00');
            $table->string('jenkel00');

            $table->string('desa00');
            $table->string('kec00');
            $table->string('kab00');
            $table->string('prov00');
            $table->string('kodepos00');

            $table->string('cita00');
            $table->string('jumlahsaudara00');

            $table->string('asalsekolah00');
            $table->string('alamatasalsekolah00');

            $table->string('nokk00');
            $table->string('namaayah00');
            $table->string('nikayah00');
            $table->string('tahunlahirayah00');
            $table->string('pendidikanayah00');
            $table->string('pekerjaanayah00');

            $table->string('namaibu00');
            $table->string('nikibu00');
            $table->string('tahunlahiribu00');
            $table->string('pendidikanibu00');
            $table->string('pekerjaanibu00');
            $table->string('penghasilan00');
            
            $table->string('prestasi00');
            $table->string('nohp00');
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
        Schema::dropIfExists('santrikeluar');
    }
}
