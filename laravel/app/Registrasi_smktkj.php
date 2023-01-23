<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrasi_smktkj extends Model
{

    protected $table = 'registrasi_smktkj';
	protected $fillable = ['jalur', 'jenjang','nama','fasilitas','jenis_kelamin','status','lunas','waktu','bayar','ukuran_batik','ukuran_olahraga','ukuran_jas','created_at'];

}
