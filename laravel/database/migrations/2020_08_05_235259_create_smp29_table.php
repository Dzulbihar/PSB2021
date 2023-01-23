<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmp29Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smp29', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap29');
            $table->string('status29');
            $table->string('avatar29');
            $table->string('nisn29');
            $table->string('nik29');
            $table->string('tempatlahir29');
            $table->date('tbt29');
            $table->string('jenkel29');

            $table->string('desa29');
            $table->string('kec29');
            $table->string('kab29');
            $table->string('prov29');
            $table->string('kodepos29');

            $table->string('cita29');
            $table->string('jumlahsaudara29');

            $table->string('asalsekolah29');
            $table->string('alamatasalsekolah29');

            $table->string('nokk29');
            $table->string('namaayah29');
            $table->string('nikayah29');
            $table->string('tahunlahirayah29');
            $table->string('pendidikanayah29');
            $table->string('pekerjaanayah29');

            $table->string('namaibu29');
            $table->string('nikibu29');
            $table->string('tahunlahiribu29');
            $table->string('pendidikanibu29');
            $table->string('pekerjaanibu29');
            $table->string('penghasilan29');
            
            $table->string('prestasi29');
            $table->string('nohp29');
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
        Schema::dropIfExists('smp29');
    }
}
