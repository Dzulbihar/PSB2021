<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salaf extends Model
{
    protected $table = 'salaf';
	protected $fillable = ['user_id','namalengkap0','avatar0','nisn0','nik0','tempatlahir0','tbt0','jenkel0','desa0','kec0','kab0','prov0','kodepos0','cita0','jumlahsaudara0','asalsekolah0','alamatasalsekolah0','nokk0','namaayah0','nikayah0','tahunlahirayah0','pendidikanayah0','pekerjaanayah0','namaibu0','nikibu0','tahunlahiribu0','pendidikanibu0','pekerjaanibu0','penghasilan0','prestasi0','nohp0'];

//tambah foto
	public function getAvatar()
	{
		if(!$this->avatar0){
			return asset('images/default.jpg');
		}			
		return asset('images/' .$this->avatar0);
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
		return $this->belongsToMany(Registrasi::class)->withPivot(['waktu', 'bayar'])->withTimeStamps();
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
