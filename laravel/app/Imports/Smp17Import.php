<?php

namespace App\Imports;

use App\Smp17;
use Maatwebsite\Excel\Concerns\ToModel;

class Smp17Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Smp17([

            'user_id' => $row[1],
            'namalengkap17' => $row[2],
            'status17' => $row[3],
            'avatar17' => $row[4],
            'nisn17' => $row[5],
            'nik17' => $row[6],
            'tempatlahir17' => $row[7],
            'tbt17' => $row[8],
            'jenkel17' => $row[9],
            'desa17' => $row[10],
            'kec17' => $row[11],
            'kab17' => $row[12],
            'prov17' => $row[13],
            'kodepos17' => $row[14],
            'cita17' => $row[15],
            'jumlahsaudara17' => $row[16],
            'asalsekolah17' => $row[17],
            'alamatasalsekolah17' => $row[18],
            'nokk17' => $row[19],
            'namaayah17' => $row[20],
            'nikayah17' => $row[21],
            'tahunlahirayah17' => $row[22],
            'pendidikanayah17' => $row[23],
            'pekerjaanayah17' => $row[24],
            'namaibu17' => $row[25],
            'nikibu17' => $row[26],
            'tahunlahiribu17' => $row[27],
            'pendidikanibu17' => $row[28],
            'pekerjaanibu17' => $row[29],
            'penghasilan17' => $row[30],
            'prestasi17' => $row[31],
            'nohp17' => $row[32],

        ]);
    }
}
