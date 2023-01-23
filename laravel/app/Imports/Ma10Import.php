<?php

namespace App\Imports;

use App\Ma10;
use Maatwebsite\Excel\Concerns\ToModel;

class Ma10Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Ma10([

            'user_id' => $row[1],
            'namalengkap61' => $row[2],
            'status61' => $row[3],
            'avatar61' => $row[4],
            'nisn61' => $row[5],
            'nik61' => $row[6],
            'tempatlahir61' => $row[7],
            'tbt61' => $row[8],
            'jenkel61' => $row[9],
            'desa61' => $row[10],
            'kec61' => $row[11],
            'kab61' => $row[12],
            'prov61' => $row[13],
            'kodepos61' => $row[14],
            'cita61' => $row[15],
            'jumlahsaudara61' => $row[16],
            'asalsekolah61' => $row[17],
            'alamatasalsekolah61' => $row[18],
            'nokk61' => $row[19],
            'namaayah61' => $row[20],
            'nikayah61' => $row[21],
            'tahunlahirayah61' => $row[22],
            'pendidikanayah61' => $row[23],
            'pekerjaanayah61' => $row[24],
            'namaibu61' => $row[25],
            'nikibu61' => $row[26],
            'tahunlahiribu61' => $row[27],
            'pendidikanibu61' => $row[28],
            'pekerjaanibu61' => $row[29],
            'penghasilan61' => $row[30],
            'prestasi61' => $row[31],
            'nohp61' => $row[32],

        ]);
    }
}
