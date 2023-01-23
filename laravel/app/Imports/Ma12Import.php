<?php

namespace App\Imports;

use App\Ma12;
use Maatwebsite\Excel\Concerns\ToModel;

class Ma12Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Ma12([

            'user_id' => $row[1],
            'namalengkap63' => $row[2],
            'status63' => $row[3],
            'avatar63' => $row[4],
            'nisn63' => $row[5],
            'nik63' => $row[6],
            'tempatlahir63' => $row[7],
            'tbt63' => $row[8],
            'jenkel63' => $row[9],
            'desa63' => $row[10],
            'kec63' => $row[11],
            'kab63' => $row[12],
            'prov63' => $row[13],
            'kodepos63' => $row[14],
            'cita63' => $row[15],
            'jumlahsaudara63' => $row[16],
            'asalsekolah63' => $row[17],
            'alamatasalsekolah63' => $row[18],
            'nokk63' => $row[19],
            'namaayah63' => $row[20],
            'nikayah63' => $row[21],
            'tahunlahirayah63' => $row[22],
            'pendidikanayah63' => $row[23],
            'pekerjaanayah63' => $row[24],
            'namaibu63' => $row[25],
            'nikibu63' => $row[26],
            'tahunlahiribu63' => $row[27],
            'pendidikanibu63' => $row[28],
            'pekerjaanibu63' => $row[29],
            'penghasilan63' => $row[30],
            'prestasi63' => $row[31],
            'nohp63' => $row[32],

        ]);
    }
}
