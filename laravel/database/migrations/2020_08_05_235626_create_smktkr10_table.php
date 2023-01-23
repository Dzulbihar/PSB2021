<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmktkr10Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smktkr10', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap51');
            $table->string('status51');
            $table->string('avatar51');
            $table->string('nisn51');
            $table->string('nik51');
            $table->string('tempatlahir51');
            $table->date('tbt51');
            $table->string('jenkel51');

            $table->string('desa51');
            $table->string('kec51');
            $table->string('kab51');
            $table->string('prov51');
            $table->string('kodepos51');

            $table->string('cita51');
            $table->string('jumlahsaudara51');

            $table->string('asalsekolah51');
            $table->string('alamatasalsekolah51');

            $table->string('nokk51');
            $table->string('namaayah51');
            $table->string('nikayah51');
            $table->string('tahunlahirayah51');
            $table->string('pendidikanayah51');
            $table->string('pekerjaanayah51');

            $table->string('namaibu51');
            $table->string('nikibu51');
            $table->string('tahunlahiribu51');
            $table->string('pendidikanibu51');
            $table->string('pekerjaanibu51');
            $table->string('penghasilan51');
            
            $table->string('prestasi51');
            $table->string('nohp51');
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
        Schema::dropIfExists('smktkr10');
    }
}
