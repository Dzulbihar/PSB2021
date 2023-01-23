<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrasi_siswa extends Model
{

    protected $table = 'registrasi_siswa';
	protected $fillable = ['jalur', 'jenjang','nama','fasilitas','jenis_kelamin','status','lunas','waktu','bayar','ukuran_batik','ukuran_olahraga','ukuran_jas','created_at'];

}
