<?php

namespace App\Imports;

use App\Smktkr10;
use Maatwebsite\Excel\Concerns\ToModel;

class Smktkr10Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Smktkr10([

            'user_id' => $row[1],
            'namalengkap51' => $row[2],
            'status51' => $row[3],
            'avatar51' => $row[4],
            'nisn51' => $row[5],
            'nik51' => $row[6],
            'tempatlahir51' => $row[7],
            'tbt51' => $row[8],
            'jenkel51' => $row[9],
            'desa51' => $row[10],
            'kec51' => $row[11],
            'kab51' => $row[12],
            'prov51' => $row[13],
            'kodepos51' => $row[14],
            'cita51' => $row[15],
            'jumlahsaudara51' => $row[16],
            'asalsekolah51' => $row[17],
            'alamatasalsekolah51' => $row[18],
            'nokk51' => $row[19],
            'namaayah51' => $row[20],
            'nikayah51' => $row[21],
            'tahunlahirayah51' => $row[22],
            'pendidikanayah51' => $row[23],
            'pekerjaanayah51' => $row[24],
            'namaibu51' => $row[25],
            'nikibu51' => $row[26],
            'tahunlahiribu51' => $row[27],
            'pendidikanibu51' => $row[28],
            'pekerjaanibu51' => $row[29],
            'penghasilan51' => $row[30],
            'prestasi51' => $row[31],
            'nohp51' => $row[32],

        ]);
    }
}
