<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmp17Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smp17', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap17');
            $table->string('status17');
            $table->string('avatar17');
            $table->string('nisn17');
            $table->string('nik17');
            $table->string('tempatlahir17');
            $table->date('tbt17');
            $table->string('jenkel17');

            $table->string('desa17');
            $table->string('kec17');
            $table->string('kab17');
            $table->string('prov17');
            $table->string('kodepos17');

            $table->string('cita17');
            $table->string('jumlahsaudara17');

            $table->string('asalsekolah17');
            $table->string('alamatasalsekolah17');

            $table->string('nokk17');
            $table->string('namaayah17');
            $table->string('nikayah17');
            $table->string('tahunlahirayah17');
            $table->string('pendidikanayah17');
            $table->string('pekerjaanayah17');

            $table->string('namaibu17');
            $table->string('nikibu17');
            $table->string('tahunlahiribu17');
            $table->string('pendidikanibu17');
            $table->string('pekerjaanibu17');
            $table->string('penghasilan17');
            
            $table->string('prestasi17');
            $table->string('nohp17');
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
        Schema::dropIfExists('smp17');
    }
}
