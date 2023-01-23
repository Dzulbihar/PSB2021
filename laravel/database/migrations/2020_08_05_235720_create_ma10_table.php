<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMa10Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ma10', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap61');
            $table->string('status61');
            $table->string('avatar61');
            $table->string('nisn61');
            $table->string('nik61');
            $table->string('tempatlahir61');
            $table->date('tbt61');
            $table->string('jenkel61');

            $table->string('desa61');
            $table->string('kec61');
            $table->string('kab61');
            $table->string('prov61');
            $table->string('kodepos61');

            $table->string('cita61');
            $table->string('jumlahsaudara61');

            $table->string('asalsekolah61');
            $table->string('alamatasalsekolah61');

            $table->string('nokk61');
            $table->string('namaayah61');
            $table->string('nikayah61');
            $table->string('tahunlahirayah61');
            $table->string('pendidikanayah61');
            $table->string('pekerjaanayah61');

            $table->string('namaibu61');
            $table->string('nikibu61');
            $table->string('tahunlahiribu61');
            $table->string('pendidikanibu61');
            $table->string('pekerjaanibu61');
            $table->string('penghasilan61');
            
            $table->string('prestasi61');
            $table->string('nohp61');
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
        Schema::dropIfExists('ma10');
    }
}
