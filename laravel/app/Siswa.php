<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
	protected $fillable = ['user_id','jalur','tes','tanggal_masuk','bulan','status','fasilitas','status','namalengkap','avatar','nisn','nik','tempatlahir','tbt','jenkel','desa','kec','kab','prov','kodepos','cita','jumlahsaudara','asalsekolah','alamatasalsekolah','nokk','namaayah','nikayah','tahunlahirayah','pendidikanayah','pekerjaanayah','namaibu','nikibu','tahunlahiribu','pendidikanibu','pekerjaanibu','penghasilan','prestasi','nohp'];

//tambah foto
	public function getAvatar()
	{
		if(!$this->avatar){
			return asset('images/default.jpg');
		}			
		return asset('images/' .$this->avatar);
	}
//tambah foto    

	public function mapel()
	{
		return $this->belongsToMany(Mapel::class)->withPivot(['nilai'])->withTimeStamps();
	}

	public function hukuman()
	{
		return $this->belongsToMany(Hukuman::class)->withPivot(['jenis', 'sanksi', 'skor',  'data'])->withTimeStamps();
	}
 

	public function izin()
	{
		return $this->belongsToMany(Izin::class)->withPivot(['rumah','jangka','pondok','datang','hukum','ket'])->withTimeStamps();
	}
 
	public function ambil()
	{
		return $this->belongsToMany(Ambil::class)->withPivot(['pelunasan','pengambilan','keterangan'])->withTimeStamps();
	}

	public function prestasi()
	{
		return $this->belongsToMany(Prestasi::class)->withPivot(['tingkat','kategori','hadiah','waktu','note'])->withTimeStamps();
	}

	public function catatan()
	{
		return $this->belongsToMany(Catatan::class)->withPivot(['sifat','nulis'])->withTimeStamps();
	}

//////////////////////////////////////////////////////////////////////////////////////////////////////

	public function registrasiseratus()
	{
		return $this->belongsToMany(Registrasiseratus::class)->withPivot(['jenjang', 'nama', 'fasilitas','jenis_kelamin','waktu', 'bayar', 'upload'])->withTimeStamps();
	}

	public function registrasi()
	{
		return $this->belongsToMany(Registrasi::class)->withPivot(['nama', 'status',  'fasilitas','jenis_kelamin', 'lunas', 'waktu', 'bayar', 'upload','ukuran_batik','ukuran_olahraga','ukuran_jas'])->withTimeStamps();
	}

	public function persyaratan()
	{
		return $this->belongsToMany(Persyaratan::class)->withPivot(['akte', 'kk', 'foto'])->withTimeStamps();
	}

//////////////////////////////////////////////////////////////////////////////////////////////////////

//dashboard
	public function rataRataNilai()
	{
		//ambil nilai rata2
		$total = 0;
		$hitung = 0;
		foreach($this->mapel as $mapel){
			$total += $mapel->pivot->nilai;
			$hitung++;;
		}

		return round($total);
		//hitung rata2 nilai
		//return round($total/$hitung);		
	}

//dashboard
	public function rataRataSkor()
	{
		//ambil skor rata2
		$total = 0;
		$hitung = 0;
		foreach($this->hukuman as $hukuman){
			$total += $hukuman->pivot->skor;
			$hitung++;;
		}
		return round($total);
		//hitung rata2 skor
		//return round($total/$hitung);		
	}

//dashboard
	public function rataRataDatang()
	{
		//ambil datang rata2
		$total = 0;
		$hitung = 0;
		foreach($this->izin as $izin){
			$total += $izin->pivot->datang;
			$hitung++;;
		}
		return round($total);
		//hitung rata2 datang
		//return round($total/$hitung);		
	}

//dashboard
	public function rataRataKeterangan()
	{
		//ambil keterangan rata2
		$total = 0;
		$hitung = 0;
		foreach($this->ambil as $ambil){
			$total += $ambil->pivot->keterangan;
			$hitung++;;
		}
		return round($total);
		//hitung rata2 keterangan
		//return round($total/$hitung);		
	}

//dashboard
	public function rataRataNote()
	{
		//ambil note rata2
		$total = 0;
		$hitung = 0;
		foreach($this->prestasi as $prestasi){
			$total += $prestasi->pivot->note;
			$hitung++;;
		}
		return round($total);
		//hitung rata2 note
		//return round($total/$hitung);		
	}

}
