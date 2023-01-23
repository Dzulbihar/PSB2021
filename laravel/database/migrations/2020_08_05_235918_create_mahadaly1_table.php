<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahadaly1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahadaly1', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap71');
            $table->string('avatar71');
            $table->string('nisn71');
            $table->string('nik71');
            $table->string('tempatlahir71');
            $table->date('tbt71');
            $table->string('jenkel71');

            $table->string('desa71');
            $table->string('kec71');
            $table->string('kab71');
            $table->string('prov71');
            $table->string('kodepos71');

            $table->string('cita71');
            $table->string('jumlahsaudara71');

            $table->string('asalsekolah71');
            $table->string('alamatasalsekolah71');

            $table->string('nokk71');
            $table->string('namaayah71');
            $table->string('nikayah71');
            $table->string('tahunlahirayah71');
            $table->string('pendidikanayah71');
            $table->string('pekerjaanayah71');

            $table->string('namaibu71');
            $table->string('nikibu71');
            $table->string('tahunlahiribu71');
            $table->string('pendidikanibu71');
            $table->string('pekerjaanibu71');
            $table->string('penghasilan71');
            
            $table->string('prestasi71');
            $table->string('nohp71');
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
        Schema::dropIfExists('mahadaly1');
    }
}
