<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahadaly2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahadaly2', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap72');
            $table->string('avatar72');
            $table->string('nisn72');
            $table->string('nik72');
            $table->string('tempatlahir72');
            $table->date('tbt72');
            $table->string('jenkel72');

            $table->string('desa72');
            $table->string('kec72');
            $table->string('kab72');
            $table->string('prov72');
            $table->string('kodepos72');

            $table->string('cita72');
            $table->string('jumlahsaudara72');

            $table->string('asalsekolah72');
            $table->string('alamatasalsekolah72');

            $table->string('nokk72');
            $table->string('namaayah72');
            $table->string('nikayah72');
            $table->string('tahunlahirayah72');
            $table->string('pendidikanayah72');
            $table->string('pekerjaanayah72');

            $table->string('namaibu72');
            $table->string('nikibu72');
            $table->string('tahunlahiribu72');
            $table->string('pendidikanibu72');
            $table->string('pekerjaanibu72');
            $table->string('penghasilan72');
            
            $table->string('prestasi72');
            $table->string('nohp72');
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
        Schema::dropIfExists('mahadaly2');
    }
}
