<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mts extends Model
{
    protected $table = 'mts';
	protected $fillable = ['user_id','jalur','tanggal_masuk','bulan','status','fasilitas','namalengkap','avatar7','nisn3','nik3','tempatlahir3','tbt3','jenkel','desa','kec','kab','prov','kodepos3','cita3','jumlahsaudara3','asalsekolah3','alamatasalsekolah3','nokk3','namaayah3','nikayah3','tahunlahirayah3','pendidikanayah3','pekerjaanayah3','namaibu3','nikibu3','tahunlahiribu3','pendidikanibu3','pekerjaanibu3','penghasilan3','prestasi3','nohp3'];

//tambah foto
	public function getAvatar()
	{
		if(!$this->avatar3){
			return asset('images/default.jpg');
		}			
		return asset('images/' .$this->avatar3);
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

	public function registrasi()
	{
		return $this->belongsToMany(Registrasi::class)->withPivot(['jenjang', 'nama', 'fasilitas', 'jenis_kelamin', 'status', 'lunas', 'waktu', 'bayar', 'ukuran_batik', 'ukuran_olahraga', 'ukuran_jas'])->withTimeStamps();
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
