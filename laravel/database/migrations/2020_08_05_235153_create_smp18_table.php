<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmp18Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smp18', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap18');
            $table->string('status18');
            $table->string('avatar18');
            $table->string('nisn18');
            $table->string('nik18');
            $table->string('tempatlahir18');
            $table->date('tbt18');
            $table->string('jenkel18');

            $table->string('desa18');
            $table->string('kec18');
            $table->string('kab18');
            $table->string('prov18');
            $table->string('kodepos18');

            $table->string('cita18');
            $table->string('jumlahsaudara18');

            $table->string('asalsekolah18');
            $table->string('alamatasalsekolah18');

            $table->string('nokk18');
            $table->string('namaayah18');
            $table->string('nikayah18');
            $table->string('tahunlahirayah18');
            $table->string('pendidikanayah18');
            $table->string('pekerjaanayah18');

            $table->string('namaibu18');
            $table->string('nikibu18');
            $table->string('tahunlahiribu18');
            $table->string('pendidikanibu18');
            $table->string('pekerjaanibu18');
            $table->string('penghasilan18');
            
            $table->string('prestasi18');
            $table->string('nohp18');
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
        Schema::dropIfExists('smp18');
    }
}
