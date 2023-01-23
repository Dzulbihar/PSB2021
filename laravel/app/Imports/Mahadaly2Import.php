<?php

namespace App\Imports;

use App\Mahadaly2;
use Maatwebsite\Excel\Concerns\ToModel;

class Mahadaly2Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mahadaly2([

            'user_id' => $row[1],
            'namalengkap72' => $row[2],
            'avatar72' => $row[3],
            'nisn72' => $row[4],
            'nik72' => $row[5],
            'tempatlahir72' => $row[6],
            'tbt72' => $row[7],
            'jenkel72' => $row[8],
            'desa72' => $row[9],
            'kec72' => $row[10],
            'kab72' => $row[11],
            'prov72' => $row[12],
            'kodepos72' => $row[13],
            'cita72' => $row[14],
            'jumlahsaudara72' => $row[15],
            'asalsekolah72' => $row[16],
            'alamatasalsekolah72' => $row[17],
            'nokk72' => $row[18],
            'namaayah72' => $row[19],
            'nikayah72' => $row[20],
            'tahunlahirayah72' => $row[21],
            'pendidikanayah72' => $row[22],
            'pekerjaanayah72' => $row[23],
            'namaibu72' => $row[24],
            'nikibu72' => $row[25],
            'tahunlahiribu72' => $row[26],
            'pendidikanibu72' => $row[27],
            'pekerjaanibu72' => $row[28],
            'penghasilan72' => $row[29],
            'prestasi72' => $row[30],
            'nohp72' => $row[31],

        ]);
    }
}
