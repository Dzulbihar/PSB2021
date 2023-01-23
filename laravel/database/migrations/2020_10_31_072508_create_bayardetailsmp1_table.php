<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBayardetailsmp1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bayardetailsmp1', function (Blueprint $table) {
            $table->id();
            $table->integer('registrasismp1_id');
            $table->integer('bayarsmp1_id');
            $table->string('bayar_registrasi');
            $table->integer('jumlah_bayar');
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
        Schema::dropIfExists('bayardetailsmp1');
    }
}
