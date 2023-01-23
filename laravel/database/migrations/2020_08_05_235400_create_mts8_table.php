<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMts8Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mts8', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap38');
            $table->string('status38');
            $table->string('avatar38');
            $table->string('nisn38');
            $table->string('nik38');
            $table->string('tempatlahir38');
            $table->date('tbt38');
            $table->string('jenkel38');

            $table->string('desa38');
            $table->string('kec38');
            $table->string('kab38');
            $table->string('prov38');
            $table->string('kodepos38');

            $table->string('cita38');
            $table->string('jumlahsaudara38');

            $table->string('asalsekolah38');
            $table->string('alamatasalsekolah38');

            $table->string('nokk38');
            $table->string('namaayah38');
            $table->string('nikayah38');
            $table->string('tahunlahirayah38');
            $table->string('pendidikanayah38');
            $table->string('pekerjaanayah38');

            $table->string('namaibu38');
            $table->string('nikibu38');
            $table->string('tahunlahiribu38');
            $table->string('pendidikanibu38');
            $table->string('pekerjaanibu38');
            $table->string('penghasilan38');
            
            $table->string('prestasi38');
            $table->string('nohp38');
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
        Schema::dropIfExists('mts8');
    }
}
