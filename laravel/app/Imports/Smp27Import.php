<?php

namespace App\Imports;

use App\Smp27;
use Maatwebsite\Excel\Concerns\ToModel;

class Smp27Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Smp27([

            'user_id' => $row[1],
            'namalengkap27' => $row[2],
            'status27' => $row[3],
            'avatar27' => $row[4],
            'nisn27' => $row[5],
            'nik27' => $row[6],
            'tempatlahir27' => $row[7],
            'tbt27' => $row[8],
            'jenkel27' => $row[9],
            'desa27' => $row[10],
            'kec27' => $row[11],
            'kab27' => $row[12],
            'prov27' => $row[13],
            'kodepos27' => $row[14],
            'cita27' => $row[15],
            'jumlahsaudara27' => $row[16],
            'asalsekolah27' => $row[17],
            'alamatasalsekolah27' => $row[18],
            'nokk27' => $row[19],
            'namaayah27' => $row[20],
            'nikayah27' => $row[21],
            'tahunlahirayah27' => $row[22],
            'pendidikanayah27' => $row[23],
            'pekerjaanayah27' => $row[24],
            'namaibu27' => $row[25],
            'nikibu27' => $row[26],
            'tahunlahiribu27' => $row[27],
            'pendidikanibu27' => $row[28],
            'pekerjaanibu27' => $row[29],
            'penghasilan27' => $row[30],
            'prestasi27' => $row[31],
            'nohp27' => $row[32],
        ]);
    }
}
