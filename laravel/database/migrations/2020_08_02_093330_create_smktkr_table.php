<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmktkrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smktkr', function (Blueprint $table) {
            $table->id();

            $table->string('jalur');

            $table->string('tanggal_masuk');
            $table->string('bulan');
            $table->string('status');
            $table->string('fasilitas');

            $table->string('namalengkap');
            $table->string('avatar5');
            $table->string('nisn5');
            $table->string('nik5');
            $table->string('tempatlahir5');
            $table->date('tbt5');
            $table->string('jenkel');

            $table->string('desa5');
            $table->string('kec5');
            $table->string('kab5');
            $table->string('prov5');
            $table->string('kodepos5');

            $table->string('cita5');
            $table->string('jumlahsaudara5');

            $table->string('asalsekolah5');
            $table->string('alamatasalsekolah5');

            $table->string('nokk5');
            $table->string('namaayah5');
            $table->string('nikayah5');
            $table->string('tahunlahirayah5');
            $table->string('pendidikanayah5');
            $table->string('pekerjaanayah5');

            $table->string('namaibu5');
            $table->string('nikibu5');
            $table->string('tahunlahiribu5');
            $table->string('pendidikanibu5');
            $table->string('pekerjaanibu5');
            $table->string('penghasilan5');
            
            $table->string('prestasi5');
            $table->string('nohp5');
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
        Schema::dropIfExists('smktkr');
    }
}
