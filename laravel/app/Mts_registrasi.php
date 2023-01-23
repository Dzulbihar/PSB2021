<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mts_registrasi extends Model
{

    protected $table = 'mts_registrasi';
	protected $fillable = ['jalur', 'jenjang','nama','fasilitas','jenis_kelamin','status','lunas','waktu','bayar','ukuran_batik','ukuran_olahraga','ukuran_jas','created_at'];

}
