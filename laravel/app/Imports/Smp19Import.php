<?php

namespace App\Imports;

use App\Smp19;
use Maatwebsite\Excel\Concerns\ToModel;

class Smp19Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Smp19([

            'user_id' => $row[1],
            'namalengkap19' => $row[2],
            'status19' => $row[3],
            'avatar19' => $row[4],
            'nisn19' => $row[5],
            'nik19' => $row[6],
            'tempatlahir19' => $row[7],
            'tbt19' => $row[8],
            'jenkel19' => $row[9],
            'desa19' => $row[10],
            'kec19' => $row[11],
            'kab19' => $row[12],
            'prov19' => $row[13],
            'kodepos19' => $row[14],
            'cita19' => $row[15],
            'jumlahsaudara19' => $row[16],
            'asalsekolah19' => $row[17],
            'alamatasalsekolah19' => $row[18],
            'nokk19' => $row[19],
            'namaayah19' => $row[20],
            'nikayah19' => $row[21],
            'tahunlahirayah19' => $row[22],
            'pendidikanayah19' => $row[23],
            'pekerjaanayah19' => $row[24],
            'namaibu19' => $row[25],
            'nikibu19' => $row[26],
            'tahunlahiribu19' => $row[27],
            'pendidikanibu19' => $row[28],
            'pekerjaanibu19' => $row[29],
            'penghasilan19' => $row[30],
            'prestasi19' => $row[31],
            'nohp19' => $row[32],

        ]);
    }
}
