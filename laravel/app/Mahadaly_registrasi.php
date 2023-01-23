<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahadaly_registrasi extends Model
{

    protected $table = 'mahadaly_registrasi';
	protected $fillable = ['jalur', 'jenjang','nama','fasilitas','jenis_kelamin','status','lunas','waktu','bayar','created_at'];
	
}
