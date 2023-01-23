<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahadalyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahadaly', function (Blueprint $table) {
            $table->id();

            $table->string('jalur');

            $table->string('tanggal_masuk');
            $table->string('bulan');
            $table->string('status');
            $table->string('fasilitas');
            
            $table->string('namalengkap');
            $table->string('avatar7');
            $table->string('nisn7');
            $table->string('nik7');
            $table->string('tempatlahir7');
            $table->date('tbt7');
            $table->string('jenkel');

            $table->string('desa7');
            $table->string('kec7');
            $table->string('kab7');
            $table->string('prov7');
            $table->string('kodepos7');

            $table->string('cita7');
            $table->string('jumlahsaudara7');

            $table->string('asalsekolah7');
            $table->string('alamatasalsekolah7');

            $table->string('nokk7');
            $table->string('namaayah7');
            $table->string('nikayah7');
            $table->string('tahunlahirayah7');
            $table->string('pendidikanayah7');
            $table->string('pekerjaanayah7');

            $table->string('namaibu7');
            $table->string('nikibu7');
            $table->string('tahunlahiribu7');
            $table->string('pendidikanibu7');
            $table->string('pekerjaanibu7');
            $table->string('penghasilan7');
            
            $table->string('prestasi7');
            $table->string('nohp7');
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
        Schema::dropIfExists('mahadaly');
    }
}
