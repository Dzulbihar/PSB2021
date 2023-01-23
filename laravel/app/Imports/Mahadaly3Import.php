<?php

namespace App\Imports;

use App\Mahadaly3;
use Maatwebsite\Excel\Concerns\ToModel;

class Mahadaly3Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mahadaly3([

            'user_id' => $row[1],
            'namalengkap73' => $row[2],
            'avatar73' => $row[3],
            'nisn73' => $row[4],
            'nik73' => $row[5],
            'tempatlahir73' => $row[6],
            'tbt73' => $row[7],
            'jenkel73' => $row[8],
            'desa73' => $row[9],
            'kec73' => $row[10],
            'kab73' => $row[11],
            'prov73' => $row[12],
            'kodepos73' => $row[13],
            'cita73' => $row[14],
            'jumlahsaudara73' => $row[15],
            'asalsekolah73' => $row[16],
            'alamatasalsekolah73' => $row[17],
            'nokk73' => $row[18],
            'namaayah73' => $row[19],
            'nikayah73' => $row[20],
            'tahunlahirayah73' => $row[21],
            'pendidikanayah73' => $row[22],
            'pekerjaanayah73' => $row[23],
            'namaibu73' => $row[24],
            'nikibu73' => $row[25],
            'tahunlahiribu73' => $row[26],
            'pendidikanibu73' => $row[27],
            'pekerjaanibu73' => $row[28],
            'penghasilan73' => $row[29],
            'prestasi73' => $row[30],
            'nohp73' => $row[31],

        ]);
    }
}
