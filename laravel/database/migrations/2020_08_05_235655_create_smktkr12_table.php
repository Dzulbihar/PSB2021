<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmktkr12Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smktkr12', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap53');
            $table->string('status53');
            $table->string('avatar53');
            $table->string('nisn53');
            $table->string('nik53');
            $table->string('tempatlahir53');
            $table->date('tbt53');
            $table->string('jenkel53');

            $table->string('desa53');
            $table->string('kec53');
            $table->string('kab53');
            $table->string('prov53');
            $table->string('kodepos53');

            $table->string('cita53');
            $table->string('jumlahsaudara53');

            $table->string('asalsekolah53');
            $table->string('alamatasalsekolah53');

            $table->string('nokk53');
            $table->string('namaayah53');
            $table->string('nikayah53');
            $table->string('tahunlahirayah53');
            $table->string('pendidikanayah53');
            $table->string('pekerjaanayah53');

            $table->string('namaibu53');
            $table->string('nikibu53');
            $table->string('tahunlahiribu53');
            $table->string('pendidikanibu53');
            $table->string('pekerjaanibu53');
            $table->string('penghasilan53');
            
            $table->string('prestasi53');
            $table->string('nohp53');
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
        Schema::dropIfExists('smktkr12');
    }
}
