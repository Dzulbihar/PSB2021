<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahadaly4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahadaly4', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap74');
            $table->string('avatar74');
            $table->string('nisn74');
            $table->string('nik74');
            $table->string('tempatlahir74');
            $table->date('tbt74');
            $table->string('jenkel74');

            $table->string('desa74');
            $table->string('kec74');
            $table->string('kab74');
            $table->string('prov74');
            $table->string('kodepos74');

            $table->string('cita74');
            $table->string('jumlahsaudara74');

            $table->string('asalsekolah74');
            $table->string('alamatasalsekolah74');

            $table->string('nokk74');
            $table->string('namaayah74');
            $table->string('nikayah74');
            $table->string('tahunlahirayah74');
            $table->string('pendidikanayah74');
            $table->string('pekerjaanayah74');

            $table->string('namaibu74');
            $table->string('nikibu74');
            $table->string('tahunlahiribu74');
            $table->string('pendidikanibu74');
            $table->string('pekerjaanibu74');
            $table->string('penghasilan74');
            
            $table->string('prestasi74');
            $table->string('nohp74');
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
        Schema::dropIfExists('mahadaly4');
    }
}
