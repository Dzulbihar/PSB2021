<?php

namespace App\Imports;

use App\Smktkr11;
use Maatwebsite\Excel\Concerns\ToModel;

class Smktkr11Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Smktkr11([

            'user_id' => $row[1],
            'namalengkap52' => $row[2],
            'status52' => $row[3],
            'avatar52' => $row[4],
            'nisn52' => $row[5],
            'nik52' => $row[6],
            'tempatlahir52' => $row[7],
            'tbt52' => $row[8],
            'jenkel52' => $row[9],
            'desa52' => $row[10],
            'kec52' => $row[11],
            'kab52' => $row[12],
            'prov52' => $row[13],
            'kodepos52' => $row[14],
            'cita52' => $row[15],
            'jumlahsaudara52' => $row[16],
            'asalsekolah52' => $row[17],
            'alamatasalsekolah52' => $row[18],
            'nokk52' => $row[19],
            'namaayah52' => $row[20],
            'nikayah52' => $row[21],
            'tahunlahirayah52' => $row[22],
            'pendidikanayah52' => $row[23],
            'pekerjaanayah52' => $row[24],
            'namaibu52' => $row[25],
            'nikibu52' => $row[26],
            'tahunlahiribu52' => $row[27],
            'pendidikanibu52' => $row[28],
            'pekerjaanibu52' => $row[29],
            'penghasilan52' => $row[30],
            'prestasi52' => $row[31],
            'nohp52' => $row[32],

        ]);
    }
}
