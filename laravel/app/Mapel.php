<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapel';
    protected $fillable = ['kode', 'nama', 'kelas'];
/////////////////////////////////////////////////////////////////////////////////
	public function mts()
	{
		return $this->belongsToMany(Mts::class)->withPivot(['nilai']);
	}

	public function mts7()
	{
		return $this->belongsToMany(Mts7::class)->withPivot(['nilai']);
	}

	public function mts8()
	{
		return $this->belongsToMany(Mts8::class)->withPivot(['nilai']);
	}

	public function mts9()
	{
		return $this->belongsToMany(Mts9::class)->withPivot(['nilai']);
	}	
///////////////////////////////////////////////////////////////////////////////////
	public function smp1()
	{
		return $this->belongsToMany(Smp1::class)->withPivot(['nilai']);
	}

	public function smp17()
	{
		return $this->belongsToMany(Smp17::class)->withPivot(['nilai']);
	}

	public function smp18()
	{
		return $this->belongsToMany(Smp18::class)->withPivot(['nilai']);
	}

	public function smp19()
	{
		return $this->belongsToMany(Smp19::class)->withPivot(['nilai']);
	}

	public function smp2()
	{
		return $this->belongsToMany(Smp2::class)->withPivot(['nilai']);
	}

	public function smp27()
	{
		return $this->belongsToMany(Smp27::class)->withPivot(['nilai']);
	}

	public function smp28()
	{
		return $this->belongsToMany(Smp28::class)->withPivot(['nilai']);
	}

	public function smp29()
	{
		return $this->belongsToMany(Smp29::class)->withPivot(['nilai']);
	}
//////////////////////////////////////////////////////////////////////////////////////
	public function smktkj()
	{
		return $this->belongsToMany(Smktkj::class)->withPivot(['nilai']);
	}

	public function smktkj10()
	{
		return $this->belongsToMany(Smktkj10::class)->withPivot(['nilai']);
	}

	public function smktkj11()
	{
		return $this->belongsToMany(Smktkj11::class)->withPivot(['nilai']);
	}

	public function smktkj12()
	{
		return $this->belongsToMany(Smktkj12::class)->withPivot(['nilai']);
	}

	public function smktkr()
	{
		return $this->belongsToMany(Smktkr::class)->withPivot(['nilai']);
	}

	public function smktkr10()
	{
		return $this->belongsToMany(Smktkr10::class)->withPivot(['nilai']);
	}

	public function smktkr11()
	{
		return $this->belongsToMany(Smktkr11::class)->withPivot(['nilai']);
	}

	public function smktkr12()
	{
		return $this->belongsToMany(Smktkr12::class)->withPivot(['nilai']);
	}
//////////////////////////////////////////////////////////////////////////////////////////
	public function ma()
	{
		return $this->belongsToMany(Ma::class)->withPivot(['nilai']);
	}

	public function ma10()
	{
		return $this->belongsToMany(Ma10::class)->withPivot(['nilai']);
	}
	public function ma11()
	{
		return $this->belongsToMany(Ma11::class)->withPivot(['nilai']);
	}

	public function ma12()
	{
		return $this->belongsToMany(Ma12::class)->withPivot(['nilai']);
	}	
//////////////////////////////////////////////////////////////////////////////////////////
	public function mahadaly()
	{
		return $this->belongsToMany(Mahadaly::class)->withPivot(['nilai']);
	}

	public function mahadaly1()
	{
		return $this->belongsToMany(Mahadaly1::class)->withPivot(['nilai']);
	}	

	public function mahadaly2()
	{
		return $this->belongsToMany(Mahadaly2::class)->withPivot(['nilai']);
	}	

	public function mahadaly3()
	{
		return $this->belongsToMany(Mahadaly3::class)->withPivot(['nilai']);
	}	

	public function mahadaly4()
	{
		return $this->belongsToMany(Mahadaly4::class)->withPivot(['nilai']);
	}	
///////////////////////////////////////////////////////////////////////////////////////////
	public function salaf()
	{
		return $this->belongsToMany(Salaf::class)->withPivot(['nilai']);
	}	

	public function siswa()
	{
		return $this->belongsToMany(Siswa::class)->withPivot(['nilai']);
	}


}
