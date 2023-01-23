<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap99');

            $table->string('jenjang99');
            $table->string('tahunlulus99');
            $table->string('pendidikanlanjut99');

            $table->string('avatar99');
            $table->string('nisn99');
            $table->string('nik99');
            $table->string('tempatlahir99');
            $table->date('tbt99');
            $table->string('jenkel99');

            $table->string('desa99');
            $table->string('kec99');
            $table->string('kab99');
            $table->string('prov99');
            $table->string('kodepos99');

            $table->string('cita99');
            $table->string('jumlahsaudara99');

            $table->string('asalsekolah99');
            $table->string('alamatasalsekolah99');

            $table->string('nokk99');
            $table->string('namaayah99');
            $table->string('nikayah99');
            $table->string('tahunlahirayah99');
            $table->string('pendidikanayah99');
            $table->string('pekerjaanayah99');

            $table->string('namaibu99');
            $table->string('nikibu99');
            $table->string('tahunlahiribu99');
            $table->string('pendidikanibu99');
            $table->string('pekerjaanibu99');
            $table->string('penghasilan99');
            
            $table->string('prestasi99');
            $table->string('nohp99');
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
        Schema::dropIfExists('alumni');
    }
}
