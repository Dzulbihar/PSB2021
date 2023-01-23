<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrasiseratus extends Model
{

    protected $table = 'registrasiseratus';
    protected $fillable = ['registrasiseratus'];


	public function siswa()
	{
		return $this->belongsToMany(Siswa::class)->withPivot(['jenjang', 'nama', 'fasilitas','jenis_kelamin','waktu', 'bayar', 'upload'])->withTimeStamps();
	}	
	

}
