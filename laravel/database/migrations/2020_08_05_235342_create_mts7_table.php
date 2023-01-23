<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMts7Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mts7', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap37');
            $table->string('status37');
            $table->string('avatar37');
            $table->string('nisn37');
            $table->string('nik37');
            $table->string('tempatlahir37');
            $table->date('tbt37');
            $table->string('jenkel37');

            $table->string('desa37');
            $table->string('kec37');
            $table->string('kab37');
            $table->string('prov37');
            $table->string('kodepos37');

            $table->string('cita37');
            $table->string('jumlahsaudara37');

            $table->string('asalsekolah37');
            $table->string('alamatasalsekolah37');

            $table->string('nokk37');
            $table->string('namaayah37');
            $table->string('nikayah37');
            $table->string('tahunlahirayah37');
            $table->string('pendidikanayah37');
            $table->string('pekerjaanayah37');

            $table->string('namaibu37');
            $table->string('nikibu37');
            $table->string('tahunlahiribu37');
            $table->string('pendidikanibu37');
            $table->string('pekerjaanibu37');
            $table->string('penghasilan37');
            
            $table->string('prestasi37');
            $table->string('nohp37');
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
        Schema::dropIfExists('mts7');
    }
}
