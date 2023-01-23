<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmktkjTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smktkj', function (Blueprint $table) {
            $table->id();

            $table->string('jalur');

            $table->string('tanggal_masuk');
            $table->string('bulan');
            $table->string('status');
            $table->string('fasilitas');
            
            $table->string('namalengkap');
            $table->string('avatar4');
            $table->string('nisn4');
            $table->string('nik4');
            $table->string('tempatlahir4');
            $table->date('tbt4');
            $table->string('jenkel');

            $table->string('desa4');
            $table->string('kec4');
            $table->string('kab4');
            $table->string('prov4');
            $table->string('kodepos4');

            $table->string('cita4');
            $table->string('jumlahsaudara4');

            $table->string('asalsekolah4');
            $table->string('alamatasalsekolah4');

            $table->string('nokk4');
            $table->string('namaayah4');
            $table->string('nikayah4');
            $table->string('tahunlahirayah4');
            $table->string('pendidikanayah4');
            $table->string('pekerjaanayah4');

            $table->string('namaibu4');
            $table->string('nikibu4');
            $table->string('tahunlahiribu4');
            $table->string('pendidikanibu4');
            $table->string('pekerjaanibu4');
            $table->string('penghasilan4');
            
            $table->string('prestasi4');
            $table->string('nohp4');
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
        Schema::dropIfExists('smktkj');
    }
}
