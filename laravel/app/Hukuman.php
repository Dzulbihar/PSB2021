<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hukuman extends Model
{
    protected $table = 'hukuman';
    protected $fillable = ['pelanggaran'];
    
/////////////////////////////////////////////////////////////////////////////////
	public function mts()
	{
		return $this->belongsToMany(Mts::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}

	public function mts7()
	{
		return $this->belongsToMany(Mts7::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}

	public function mts8()
	{
		return $this->belongsToMany(Mts8::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}

	public function mts9()
	{
		return $this->belongsToMany(Mts9::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}	
///////////////////////////////////////////////////////////////////////////////////
	public function smp1()
	{
		return $this->belongsToMany(Smp1::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}

	public function smp17()
	{
		return $this->belongsToMany(Smp17::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}

	public function smp18()
	{
		return $this->belongsToMany(Smp18::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}

	public function smp19()
	{
		return $this->belongsToMany(Smp19::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}

	public function smp2()
	{
		return $this->belongsToMany(Smp2::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}

	public function smp27()
	{
		return $this->belongsToMany(Smp27::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}

	public function smp28()
	{
		return $this->belongsToMany(Smp28::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}

	public function smp29()
	{
		return $this->belongsToMany(Smp29::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}
//////////////////////////////////////////////////////////////////////////////////////
	public function smktkj()
	{
		return $this->belongsToMany(Smktkj::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}

	public function smktkj10()
	{
		return $this->belongsToMany(Smktkj10::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}

	public function smktkj11()
	{
		return $this->belongsToMany(Smktkj11::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}

	public function smktkj12()
	{
		return $this->belongsToMany(Smktkj12::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}

	public function smktkr()
	{
		return $this->belongsToMany(Smktkr::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}

	public function smktkr10()
	{
		return $this->belongsToMany(Smktkr10::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}

	public function smktkr11()
	{
		return $this->belongsToMany(Smktkr11::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}

	public function smktkr12()
	{
		return $this->belongsToMany(Smktkr12::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}
//////////////////////////////////////////////////////////////////////////////////////////
	public function ma()
	{
		return $this->belongsToMany(Ma::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}

	public function ma10()
	{
		return $this->belongsToMany(Ma10::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}
	public function ma11()
	{
		return $this->belongsToMany(Ma11::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}

	public function ma12()
	{
		return $this->belongsToMany(Ma12::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}	
//////////////////////////////////////////////////////////////////////////////////////////
	public function mahadaly()
	{
		return $this->belongsToMany(Mahadaly::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}

	public function mahadaly1()
	{
		return $this->belongsToMany(Mahadaly1::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}	

	public function mahadaly2()
	{
		return $this->belongsToMany(Mahadaly2::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}	

	public function mahadaly3()
	{
		return $this->belongsToMany(Mahadaly3::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}	

	public function mahadaly4()
	{
		return $this->belongsToMany(Mahadaly4::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}	
///////////////////////////////////////////////////////////////////////////////////////////
	public function salaf()
	{
		return $this->belongsToMany(Salaf::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}	

	public function siswa()
	{
		return $this->belongsToMany(Siswa::class)->withPivot(['jenis', 'sanksi', 'skor', 'data'])->withTimeStamps();
	}

}
