<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Smp18 extends Model
{
    protected $table = 'smp18';
	protected $fillable = ['user_id','namalengkap18','status18','avatar18','nisn18','nik18','tempatlahir18','tbt18','jenkel18','desa18','kec18','kab18','prov18','kodepos18','cita18','jumlahsaudara18','asalsekolah18','alamatasalsekolah18','nokk18','namaayah18','nikayah18','tahunlahirayah18','pendidikanayah18','pekerjaanayah18','namaibu18','nikibu18','tahunlahiribu18','pendidikanibu18','pekerjaanibu18','penghasilan18','prestasi18','nohp18'];

//tambah foto
	public function getAvatar()
	{
		if(!$this->avatar18){
			return asset('images/default.jpg');
		}			
		return asset('images/' .$this->avatar18);
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
