<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmp19Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smp19', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap19');
            $table->string('status19');
            $table->string('avatar19');
            $table->string('nisn19');
            $table->string('nik19');
            $table->string('tempatlahir19');
            $table->date('tbt19');
            $table->string('jenkel19');

            $table->string('desa19');
            $table->string('kec19');
            $table->string('kab19');
            $table->string('prov19');
            $table->string('kodepos19');

            $table->string('cita19');
            $table->string('jumlahsaudara19');

            $table->string('asalsekolah19');
            $table->string('alamatasalsekolah19');

            $table->string('nokk19');
            $table->string('namaayah19');
            $table->string('nikayah19');
            $table->string('tahunlahirayah19');
            $table->string('pendidikanayah19');
            $table->string('pekerjaanayah19');

            $table->string('namaibu19');
            $table->string('nikibu19');
            $table->string('tahunlahiribu19');
            $table->string('pendidikanibu19');
            $table->string('pekerjaanibu19');
            $table->string('penghasilan19');
            
            $table->string('prestasi19');
            $table->string('nohp19');
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
        Schema::dropIfExists('smp19');
    }
}
