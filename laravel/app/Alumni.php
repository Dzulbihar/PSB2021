<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table = 'alumni';
	protected $fillable = ['user_id','namalengkap99','jenjang99','tahunlulus99','pendidikanlanjut99','avatar99','nisn99','nik99','tempatlahir99','tbt99','jenkel99','desa99','kec99','kab99','prov99','kodepos99','cita99','jumlahsaudara99','asalsekolah99','alamatasalsekolah99','nokk99','namaayah99','nikayah99','tahunlahirayah99','pendidikanayah99','pekerjaanayah99','namaibu99','nikibu99','tahunlahiribu99','pendidikanibu99','pekerjaanibu99','penghasilan99','prestasi99','nohp99'];


//tambah foto
	public function getAvatar()
	{
		if(!$this->avatar99){
			return asset('images/default.jpg');
		}			
		return asset('images/' .$this->avatar99);
	}
//tambah foto


}
