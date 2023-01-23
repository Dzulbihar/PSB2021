<?php

namespace App\Imports;

use App\Mahadaly;
use Maatwebsite\Excel\Concerns\ToModel;

class MahadalyImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mahadaly([

            'user_id' => $row[1],
            'namalengkap' => $row[2],
            'avatar7' => $row[3],
            'nisn7' => $row[4],
            'nik7' => $row[5],
            'tempatlahir7' => $row[6],
            'tbt7' => $row[7],
            'jenkel' => $row[8],
            'desa' => $row[9],
            'kec' => $row[10],
            'kab' => $row[11],
            'prov' => $row[12],
            'kodepos7' => $row[13],
            'cita7' => $row[14],
            'jumlahsaudara7' => $row[15],
            'asalsekolah7' => $row[16],
            'alamatasalsekolah7' => $row[17],
            'nokk7' => $row[18],
            'namaayah7' => $row[19],
            'nikayah7' => $row[20],
            'tahunlahirayah7' => $row[21],
            'pendidikanayah7' => $row[22],
            'pekerjaanayah7' => $row[23],
            'namaibu7' => $row[24],
            'nikibu7' => $row[25],
            'tahunlahiribu7' => $row[26],
            'pendidikanibu7' => $row[27],
            'pekerjaanibu7' => $row[28],
            'penghasilan7' => $row[29],
            'prestasi7' => $row[30],
            'nohp7' => $row[31],

        ]);
    }
}
