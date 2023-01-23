<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmktkj10Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smktkj10', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap41');
            $table->string('status41');
            $table->string('avatar41');
            $table->string('nisn41');
            $table->string('nik41');
            $table->string('tempatlahir41');
            $table->date('tbt41');
            $table->string('jenkel41');

            $table->string('desa41');
            $table->string('kec41');
            $table->string('kab41');
            $table->string('prov41');
            $table->string('kodepos41');

            $table->string('cita41');
            $table->string('jumlahsaudara41');

            $table->string('asalsekolah41');
            $table->string('alamatasalsekolah41');

            $table->string('nokk41');
            $table->string('namaayah41');
            $table->string('nikayah41');
            $table->string('tahunlahirayah41');
            $table->string('pendidikanayah41');
            $table->string('pekerjaanayah41');

            $table->string('namaibu41');
            $table->string('nikibu41');
            $table->string('tahunlahiribu41');
            $table->string('pendidikanibu41');
            $table->string('pekerjaanibu41');
            $table->string('penghasilan41');
            
            $table->string('prestasi41');
            $table->string('nohp41');
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
        Schema::dropIfExists('smktkj10');
    }
}
