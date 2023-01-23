<?php

namespace App\Imports;

use App\Mts9;
use Maatwebsite\Excel\Concerns\ToModel;

class Mts9Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mts9([

            'user_id' => $row[1],
            'namalengkap39' => $row[2],
            'status39' => $row[3],
            'avatar39' => $row[4],
            'nisn39' => $row[5],
            'nik39' => $row[6],
            'tempatlahir39' => $row[7],
            'tbt39' => $row[8],
            'jenkel39' => $row[9],
            'desa39' => $row[10],
            'kec39' => $row[11],
            'kab39' => $row[12],
            'prov39' => $row[13],
            'kodepos39' => $row[14],
            'cita39' => $row[15],
            'jumlahsaudara39' => $row[16],
            'asalsekolah39' => $row[17],
            'alamatasalsekolah39' => $row[18],
            'nokk39' => $row[19],
            'namaayah39' => $row[20],
            'nikayah39' => $row[21],
            'tahunlahirayah39' => $row[22],
            'pendidikanayah39' => $row[23],
            'pekerjaanayah39' => $row[24],
            'namaibu39' => $row[25],
            'nikibu39' => $row[26],
            'tahunlahiribu39' => $row[27],
            'pendidikanibu39' => $row[28],
            'pekerjaanibu39' => $row[29],
            'penghasilan39' => $row[30],
            'prestasi39' => $row[31],
            'nohp39' => $row[32],
        ]);
    }
}
