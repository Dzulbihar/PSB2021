<?php

namespace App\Imports;

use App\Smktkj;
use Maatwebsite\Excel\Concerns\ToModel;

class SmktkjImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Smktkj([

            'user_id' => $row[1],
            'namalengkap' => $row[2],
            'avatar4' => $row[3],
            'nisn4' => $row[4],
            'nik4' => $row[5],
            'tempatlahir4' => $row[6],
            'tbt4' => $row[7],
            'jenkel' => $row[8],
            'desa' => $row[9],
            'kec' => $row[10],
            'kab' => $row[11],
            'prov' => $row[12],
            'kodepos4' => $row[13],
            'cita4' => $row[14],
            'jumlahsaudara4' => $row[15],
            'asalsekolah4' => $row[16],
            'alamatasalsekolah4' => $row[17],
            'nokk4' => $row[18],
            'namaayah4' => $row[19],
            'nikayah4' => $row[20],
            'tahunlahirayah4' => $row[21],
            'pendidikanayah4' => $row[22],
            'pekerjaanayah4' => $row[23],
            'namaibu4' => $row[24],
            'nikibu4' => $row[25],
            'tahunlahiribu4' => $row[26],
            'pendidikanibu4' => $row[27],
            'pekerjaanibu4' => $row[28],
            'penghasilan4' => $row[29],
            'prestasi4' => $row[30],
            'nohp4' => $row[31],

        ]);
    }
}
