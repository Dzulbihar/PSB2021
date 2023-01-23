<?php

namespace App\Imports;

use App\Mahadaly4;
use Maatwebsite\Excel\Concerns\ToModel;

class Mahadaly4Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mahadaly4([

            'user_id' => $row[1],
            'namalengkap74' => $row[2],
            'avatar74' => $row[3],
            'nisn74' => $row[4],
            'nik74' => $row[5],
            'tempatlahir74' => $row[6],
            'tbt74' => $row[7],
            'jenkel74' => $row[8],
            'desa74' => $row[9],
            'kec74' => $row[10],
            'kab74' => $row[11],
            'prov74' => $row[12],
            'kodepos74' => $row[13],
            'cita74' => $row[14],
            'jumlahsaudara74' => $row[15],
            'asalsekolah74' => $row[16],
            'alamatasalsekolah74' => $row[17],
            'nokk74' => $row[18],
            'namaayah74' => $row[19],
            'nikayah74' => $row[20],
            'tahunlahirayah74' => $row[21],
            'pendidikanayah74' => $row[22],
            'pekerjaanayah74' => $row[23],
            'namaibu74' => $row[24],
            'nikibu74' => $row[25],
            'tahunlahiribu74' => $row[26],
            'pendidikanibu74' => $row[27],
            'pekerjaanibu74' => $row[28],
            'penghasilan74' => $row[29],
            'prestasi74' => $row[30],
            'nohp74' => $row[31],

        ]);
    }
}
