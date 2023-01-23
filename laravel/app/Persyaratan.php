<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persyaratan extends Model
{

    protected $table = 'persyaratan';
    protected $fillable = ['syarat'];


	public function smp1()
	{
		return $this->belongsToMany(Smp1::class)->withPivot(['akte', 'kk', 'foto'])->withTimeStamps();
	}

	public function smp2()
	{
		return $this->belongsToMany(Smp2::class)->withPivot(['akte', 'kk', 'foto'])->withTimeStamps();
	}

	public function mts()
	{
		return $this->belongsToMany(Mts::class)->withPivot(['akte', 'kk', 'foto'])->withTimeStamps();
	}

	public function smktkj()
	{
		return $this->belongsToMany(Smktkj::class)->withPivot(['akte', 'kk', 'foto'])->withTimeStamps();
	}

	public function smktkr()
	{
		return $this->belongsToMany(Smktkr::class)->withPivot(['akte', 'kk', 'foto'])->withTimeStamps();
	}

	public function ma()
	{
		return $this->belongsToMany(Ma::class)->withPivot(['akte', 'kk', 'foto'])->withTimeStamps();
	}	

	public function mahadaly()
	{
		return $this->belongsToMany(Mahadaly::class)->withPivot(['akte', 'kk', 'foto'])->withTimeStamps();
	}	

	public function siswa()
	{
		return $this->belongsToMany(Siswa::class)->withPivot(['akte', 'kk', 'foto'])->withTimeStamps();
	}	

	public function salaf()
	{
		return $this->belongsToMany(Salaf::class)->withPivot(['akte', 'kk', 'foto'])->withTimeStamps();
	}	

}
