<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMa12Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ma12', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap63');
            $table->string('status63');
            $table->string('avatar63');
            $table->string('nisn63');
            $table->string('nik63');
            $table->string('tempatlahir63');
            $table->date('tbt63');
            $table->string('jenkel63');

            $table->string('desa63');
            $table->string('kec63');
            $table->string('kab63');
            $table->string('prov63');
            $table->string('kodepos63');

            $table->string('cita63');
            $table->string('jumlahsaudara63');

            $table->string('asalsekolah63');
            $table->string('alamatasalsekolah63');

            $table->string('nokk63');
            $table->string('namaayah63');
            $table->string('nikayah63');
            $table->string('tahunlahirayah63');
            $table->string('pendidikanayah63');
            $table->string('pekerjaanayah63');

            $table->string('namaibu63');
            $table->string('nikibu63');
            $table->string('tahunlahiribu63');
            $table->string('pendidikanibu63');
            $table->string('pekerjaanibu63');
            $table->string('penghasilan63');
            
            $table->string('prestasi63');
            $table->string('nohp63');
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
        Schema::dropIfExists('ma12');
    }
}
