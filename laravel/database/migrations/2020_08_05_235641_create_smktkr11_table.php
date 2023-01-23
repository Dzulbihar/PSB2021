<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmktkr11Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smktkr11', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap52');
            $table->string('status52');
            $table->string('avatar52');
            $table->string('nisn52');
            $table->string('nik52');
            $table->string('tempatlahir52');
            $table->date('tbt52');
            $table->string('jenkel52');

            $table->string('desa52');
            $table->string('kec52');
            $table->string('kab52');
            $table->string('prov52');
            $table->string('kodepos52');

            $table->string('cita52');
            $table->string('jumlahsaudara52');

            $table->string('asalsekolah52');
            $table->string('alamatasalsekolah52');

            $table->string('nokk52');
            $table->string('namaayah52');
            $table->string('nikayah52');
            $table->string('tahunlahirayah52');
            $table->string('pendidikanayah52');
            $table->string('pekerjaanayah52');

            $table->string('namaibu52');
            $table->string('nikibu52');
            $table->string('tahunlahiribu52');
            $table->string('pendidikanibu52');
            $table->string('pekerjaanibu52');
            $table->string('penghasilan52');
            
            $table->string('prestasi52');
            $table->string('nohp52');
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
        Schema::dropIfExists('smktkr11');
    }
}
