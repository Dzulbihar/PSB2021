<?php

namespace App\Imports;

use App\Mts8;
use Maatwebsite\Excel\Concerns\ToModel;

class Mts8Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mts8([

            'user_id' => $row[1],
            'namalengkap38' => $row[2],
            'status38' => $row[3],
            'avatar38' => $row[4],
            'nisn38' => $row[5],
            'nik38' => $row[6],
            'tempatlahir38' => $row[7],
            'tbt38' => $row[8],
            'jenkel38' => $row[9],
            'desa38' => $row[10],
            'kec38' => $row[11],
            'kab38' => $row[12],
            'prov38' => $row[13],
            'kodepos38' => $row[14],
            'cita38' => $row[15],
            'jumlahsaudara38' => $row[16],
            'asalsekolah38' => $row[17],
            'alamatasalsekolah38' => $row[18],
            'nokk38' => $row[19],
            'namaayah38' => $row[20],
            'nikayah38' => $row[21],
            'tahunlahirayah38' => $row[22],
            'pendidikanayah38' => $row[23],
            'pekerjaanayah38' => $row[24],
            'namaibu38' => $row[25],
            'nikibu38' => $row[26],
            'tahunlahiribu38' => $row[27],
            'pendidikanibu38' => $row[28],
            'pekerjaanibu38' => $row[29],
            'penghasilan38' => $row[30],
            'prestasi38' => $row[31],
            'nohp38' => $row[32],

        ]);
    }
}
