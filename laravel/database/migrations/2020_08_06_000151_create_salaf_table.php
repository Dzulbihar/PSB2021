<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalafTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaf', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap0');
            $table->string('status0');
            $table->string('avatar0');
            $table->string('nisn0');
            $table->string('nik0');
            $table->string('tempatlahir0');
            $table->date('tbt0');
            $table->string('jenkel0');

            $table->string('desa0');
            $table->string('kec0');
            $table->string('kab0');
            $table->string('prov0');
            $table->string('kodepos0');

            $table->string('cita0');
            $table->string('jumlahsaudara0');

            $table->string('asalsekolah0');
            $table->string('alamatasalsekolah0');

            $table->string('nokk0');
            $table->string('namaayah0');
            $table->string('nikayah0');
            $table->string('tahunlahirayah0');
            $table->string('pendidikanayah0');
            $table->string('pekerjaanayah0');

            $table->string('namaibu0');
            $table->string('nikibu0');
            $table->string('tahunlahiribu0');
            $table->string('pendidikanibu0');
            $table->string('pekerjaanibu0');
            $table->string('penghasilan0');
            
            $table->string('prestasi0');
            $table->string('nohp0');
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
        Schema::dropIfExists('salaf');
    }
}
