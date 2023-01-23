<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmktkj12Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smktkj12', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap43');
            $table->string('status43');
            $table->string('avatar43');
            $table->string('nisn43');
            $table->string('nik43');
            $table->string('tempatlahir43');
            $table->date('tbt43');
            $table->string('jenkel43');

            $table->string('desa43');
            $table->string('kec43');
            $table->string('kab43');
            $table->string('prov43');
            $table->string('kodepos43');

            $table->string('cita43');
            $table->string('jumlahsaudara43');

            $table->string('asalsekolah43');
            $table->string('alamatasalsekolah43');

            $table->string('nokk43');
            $table->string('namaayah43');
            $table->string('nikayah43');
            $table->string('tahunlahirayah43');
            $table->string('pendidikanayah43');
            $table->string('pekerjaanayah43');

            $table->string('namaibu43');
            $table->string('nikibu43');
            $table->string('tahunlahiribu43');
            $table->string('pendidikanibu43');
            $table->string('pekerjaanibu43');
            $table->string('penghasilan43');
            
            $table->string('prestasi43');
            $table->string('nohp43');
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
        Schema::dropIfExists('smktkj12');
    }
}
