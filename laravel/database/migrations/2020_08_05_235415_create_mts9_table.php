<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMts9Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mts9', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap39');
            $table->string('status39');
            $table->string('avatar39');
            $table->string('nisn39');
            $table->string('nik39');
            $table->string('tempatlahir39');
            $table->date('tbt39');
            $table->string('jenkel39');

            $table->string('desa39');
            $table->string('kec39');
            $table->string('kab39');
            $table->string('prov39');
            $table->string('kodepos39');

            $table->string('cita39');
            $table->string('jumlahsaudara39');

            $table->string('asalsekolah39');
            $table->string('alamatasalsekolah39');

            $table->string('nokk39');
            $table->string('namaayah39');
            $table->string('nikayah39');
            $table->string('tahunlahirayah39');
            $table->string('pendidikanayah39');
            $table->string('pekerjaanayah39');

            $table->string('namaibu39');
            $table->string('nikibu39');
            $table->string('tahunlahiribu39');
            $table->string('pendidikanibu39');
            $table->string('pekerjaanibu39');
            $table->string('penghasilan39');
            
            $table->string('prestasi39');
            $table->string('nohp39');
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
        Schema::dropIfExists('mts9');
    }
}
