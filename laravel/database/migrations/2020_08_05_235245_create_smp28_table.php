<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmp28Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smp28', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap28');
            $table->string('status28');
            $table->string('avatar28');
            $table->string('nisn28');
            $table->string('nik28');
            $table->string('tempatlahir28');
            $table->date('tbt28');
            $table->string('jenkel28');

            $table->string('desa28');
            $table->string('kec28');
            $table->string('kab28');
            $table->string('prov28');
            $table->string('kodepos28');

            $table->string('cita28');
            $table->string('jumlahsaudara28');

            $table->string('asalsekolah28');
            $table->string('alamatasalsekolah28');

            $table->string('nokk28');
            $table->string('namaayah28');
            $table->string('nikayah28');
            $table->string('tahunlahirayah28');
            $table->string('pendidikanayah28');
            $table->string('pekerjaanayah28');

            $table->string('namaibu28');
            $table->string('nikibu28');
            $table->string('tahunlahiribu28');
            $table->string('pendidikanibu28');
            $table->string('pekerjaanibu28');
            $table->string('penghasilan28');
            
            $table->string('prestasi28');
            $table->string('nohp28');
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
        Schema::dropIfExists('smp28');
    }
}
