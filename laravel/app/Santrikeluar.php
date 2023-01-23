<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Santrikeluar extends Model
{

    protected $table = 'santrikeluar';
	protected $fillable = ['user_id','jalur','tanggal_masuk','bulan','status','fasilitas','namalengkap','avatar00','nisn00','nik00','tempatlahir00','tbt00','jenkel','desa','kec','kab','prov','kodepos00','cita00','jumlahsaudara00','asalsekolah00','alamatasalsekolah00','nokk00','namaayah00','nikayah00','tahunlahirayah00','pendidikanayah00','pekerjaanayah00','namaibu00','nikibu00','tahunlahiribu00','pendidikanibu00','pekerjaanibu00','penghasilan00','prestasi00','nohp00'];


	public function registrasi()
	{
		return $this->belongsToMany(Registrasi::class)->withPivot(['jalur', 'jenjang', 'nama', 'fasilitas', 'jenis_kelamin', 'status', 'lunas', 'waktu', 'bayar', 'ukuran_batik', 'ukuran_olahraga', 'ukuran_jas'])->withTimeStamps();
	}


//tambah foto
	public function getAvatar()
	{
		if(!$this->avatar00){
			return asset('images/default.jpg');
		}			
		return asset('images/' .$this->avatar00);
	}
//tambah foto




}
