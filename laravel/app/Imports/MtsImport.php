<?php

namespace App\Imports;

use App\Mts;
use Maatwebsite\Excel\Concerns\ToModel;

class MtsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mts([

            'user_id' => $row[1],
            'namalengkap' => $row[2],
            'avatar3' => $row[3],
            'nisn3' => $row[4],
            'nik3' => $row[5],
            'tempatlahir3' => $row[6],
            'tbt3' => $row[7],
            'jenkel' => $row[8],
            'desa' => $row[9],
            'kec' => $row[10],
            'kab' => $row[11],
            'prov' => $row[12],
            'kodepos3' => $row[13],
            'cita3' => $row[14],
            'jumlahsaudara3' => $row[15],
            'asalsekolah3' => $row[16],
            'alamatasalsekolah3' => $row[17],
            'nokk3' => $row[18],
            'namaayah3' => $row[19],
            'nikayah3' => $row[20],
            'tahunlahirayah3' => $row[21],
            'pendidikanayah3' => $row[22],
            'pekerjaanayah3' => $row[23],
            'namaibu3' => $row[24],
            'nikibu3' => $row[25],
            'tahunlahiribu3' => $row[26],
            'pendidikanibu3' => $row[27],
            'pekerjaanibu3' => $row[28],
            'penghasilan3' => $row[29],
            'prestasi3' => $row[30],
            'nohp3' => $row[31],

        ]);
    }
}
