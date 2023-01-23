<?php

namespace App\Imports;

use App\Smktkj10;
use Maatwebsite\Excel\Concerns\ToModel;

class Smktkj10Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Smktkj10([

            'user_id' => $row[1],
            'namalengkap41' => $row[2],
            'status41' => $row[3],
            'avatar41' => $row[4],
            'nisn41' => $row[5],
            'nik41' => $row[6],
            'tempatlahir41' => $row[7],
            'tbt41' => $row[8],
            'jenkel41' => $row[9],
            'desa41' => $row[10],
            'kec41' => $row[11],
            'kab41' => $row[12],
            'prov41' => $row[13],
            'kodepos41' => $row[14],
            'cita41' => $row[15],
            'jumlahsaudara41' => $row[16],
            'asalsekolah41' => $row[17],
            'alamatasalsekolah41' => $row[18],
            'nokk41' => $row[19],
            'namaayah41' => $row[20],
            'nikayah41' => $row[21],
            'tahunlahirayah41' => $row[22],
            'pendidikanayah41' => $row[23],
            'pekerjaanayah41' => $row[24],
            'namaibu41' => $row[25],
            'nikibu41' => $row[26],
            'tahunlahiribu41' => $row[27],
            'pendidikanibu41' => $row[28],
            'pekerjaanibu41' => $row[29],
            'penghasilan41' => $row[30],
            'prestasi41' => $row[31],
            'nohp41' => $row[32],

        ]);
    }
}
