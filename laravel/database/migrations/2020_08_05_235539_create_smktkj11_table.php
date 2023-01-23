<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmktkj11Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smktkj11', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap42');
            $table->string('status42');
            $table->string('avatar42');
            $table->string('nisn42');
            $table->string('nik42');
            $table->string('tempatlahir42');
            $table->date('tbt42');
            $table->string('jenkel42');

            $table->string('desa42');
            $table->string('kec42');
            $table->string('kab42');
            $table->string('prov42');
            $table->string('kodepos42');

            $table->string('cita42');
            $table->string('jumlahsaudara42');

            $table->string('asalsekolah42');
            $table->string('alamatasalsekolah42');

            $table->string('nokk42');
            $table->string('namaayah42');
            $table->string('nikayah42');
            $table->string('tahunlahirayah42');
            $table->string('pendidikanayah42');
            $table->string('pekerjaanayah42');

            $table->string('namaibu42');
            $table->string('nikibu42');
            $table->string('tahunlahiribu42');
            $table->string('pendidikanibu42');
            $table->string('pekerjaanibu42');
            $table->string('penghasilan42');
            
            $table->string('prestasi42');
            $table->string('nohp42');
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
        Schema::dropIfExists('smktkj11');
    }
}
