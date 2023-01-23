<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{

    protected $table = 'registrasi';
    protected $fillable = ['biayaawalmasuk'];


//SMA
	public function santrikeluar()
	{
		return $this->belongsToMany(Santrikeluar::class)->withPivot(['jalur', 'jenjang', 'nama', 'status', 'fasilitas', 'jenis_kelamin', 'lunas', 'waktu', 'bayar', 'ukuran_batik', 'ukuran_olahraga', 'ukuran_jas','created_at'])->withTimeStamps();
	}
//SMA

	public function smp1()
	{
		return $this->belongsToMany(Smp1::class)->withPivot(['jalur', 'jenjang', 'nama', 'status', 'fasilitas', 'jenis_kelamin', 'lunas', 'waktu', 'bayar', 'ukuran_batik', 'ukuran_olahraga', 'ukuran_jas','created_at'])->withTimeStamps();
	}

	public function smp2()
	{
		return $this->belongsToMany(Smp2::class)->withPivot(['jalur', 'jenjang', 'nama', 'status', 'fasilitas', 'jenis_kelamin', 'lunas', 'waktu', 'bayar', 'ukuran_batik', 'ukuran_olahraga', 'ukuran_jas','created_at'])->withTimeStamps();
	}

	public function mts()
	{
		return $this->belongsToMany(Mts::class)->withPivot(['jalur', 'jenjang', 'nama', 'status', 'fasilitas', 'jenis_kelamin', 'lunas', 'waktu', 'bayar', 'ukuran_batik', 'ukuran_olahraga', 'ukuran_jas','created_at'])->withTimeStamps();
	}

	public function smktkj()
	{
		return $this->belongsToMany(Smktkj::class)->withPivot(['jalur', 'jenjang', 'nama', 'status', 'fasilitas','jenis_kelamin', 'lunas', 'waktu', 'bayar', 'ukuran_batik', 'ukuran_olahraga', 'ukuran_jas','created_at'])->withTimeStamps();
	}

	public function smktkr()
	{
		return $this->belongsToMany(Smktkr::class)->withPivot(['jalur', 'jenjang', 'nama', 'status', 'fasilitas', 'jenis_kelamin', 'lunas', 'waktu', 'bayar', 'ukuran_batik', 'ukuran_olahraga', 'ukuran_jas','created_at'])->withTimeStamps();
	}

	public function ma()
	{
		return $this->belongsToMany(Ma::class)->withPivot(['jalur', 'jenjang', 'nama', 'status', 'fasilitas', 'jenis_kelamin', 'lunas', 'waktu', 'bayar','ukuran_batik', 'ukuran_olahraga', 'ukuran_jas','created_at'])->withTimeStamps();
	}	

	public function mahadaly()
	{
		return $this->belongsToMany(Mahadaly::class)->withPivot(['jalur', 'jenjang', 'nama', 'status', 'fasilitas', 'jenis_kelamin', 'lunas', 'waktu', 'bayar','created_at'])->withTimeStamps();
	}	

	public function siswa()
	{
		return $this->belongsToMany(Siswa::class)->withPivot(['jalur', 'jenjang', 'nama', 'status', 'fasilitas', 'jenis_kelamin','lunas', 'waktu', 'bayar', 'upload', 'ukuran_batik', 'ukuran_olahraga', 'ukuran_jas','created_at'])->withTimeStamps();
	}	

	public function salaf()
	{
		return $this->belongsToMany(Salaf::class)->withPivot(['waktu', 'bayar'])->withTimeStamps();
	}		

}
