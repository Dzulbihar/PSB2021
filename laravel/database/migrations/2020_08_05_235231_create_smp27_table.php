<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmp27Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smp27', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap27');
            $table->string('status27');
            $table->string('avatar27');
            $table->string('nisn27');
            $table->string('nik27');
            $table->string('tempatlahir27');
            $table->date('tbt27');
            $table->string('jenkel27');

            $table->string('desa27');
            $table->string('kec27');
            $table->string('kab27');
            $table->string('prov27');
            $table->string('kodepos27');

            $table->string('cita27');
            $table->string('jumlahsaudara27');

            $table->string('asalsekolah27');
            $table->string('alamatasalsekolah27');

            $table->string('nokk27');
            $table->string('namaayah27');
            $table->string('nikayah27');
            $table->string('tahunlahirayah27');
            $table->string('pendidikanayah27');
            $table->string('pekerjaanayah27');

            $table->string('namaibu27');
            $table->string('nikibu27');
            $table->string('tahunlahiribu27');
            $table->string('pendidikanibu27');
            $table->string('pekerjaanibu27');
            $table->string('penghasilan27');
            
            $table->string('prestasi27');
            $table->string('nohp27');
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
        Schema::dropIfExists('smp27');
    }
}
