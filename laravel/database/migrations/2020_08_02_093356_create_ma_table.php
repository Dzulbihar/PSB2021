<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ma', function (Blueprint $table) {
            $table->id();

            $table->string('jalur');

            $table->string('tanggal_masuk');
            $table->string('bulan');
            $table->string('status');
            $table->string('fasilitas');
            
            $table->string('namalengkap');
            $table->string('avatar6');
            $table->string('nisn6');
            $table->string('nik6');
            $table->string('tempatlahir6');
            $table->date('tbt6');
            $table->string('jenkel');

            $table->string('desa6');
            $table->string('kec6');
            $table->string('kab6');
            $table->string('prov6');
            $table->string('kodepos6');

            $table->string('cita6');
            $table->string('jumlahsaudara6');

            $table->string('asalsekolah6');
            $table->string('alamatasalsekolah6');

            $table->string('nokk6');
            $table->string('namaayah6');
            $table->string('nikayah6');
            $table->string('tahunlahirayah6');
            $table->string('pendidikanayah6');
            $table->string('pekerjaanayah6');

            $table->string('namaibu6');
            $table->string('nikibu6');
            $table->string('tahunlahiribu6');
            $table->string('pendidikanibu6');
            $table->string('pekerjaanibu6');
            $table->string('penghasilan6');
            
            $table->string('prestasi6');
            $table->string('nohp6');
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
        Schema::dropIfExists('ma');
    }
}
