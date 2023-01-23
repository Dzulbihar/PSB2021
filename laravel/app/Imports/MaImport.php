<?php

namespace App\Imports;

use App\Ma;
use Maatwebsite\Excel\Concerns\ToModel;

class MaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Ma([

            'user_id' => $row[1],
            'namalengkap' => $row[2],
            'avatar6' => $row[3],
            'nisn6' => $row[4],
            'nik6' => $row[5],
            'tempatlahir6' => $row[6],
            'tbt6' => $row[7],
            'jenkel' => $row[8],
            'desa' => $row[9],
            'kec' => $row[10],
            'kab' => $row[11],
            'prov' => $row[12],
            'kodepos6' => $row[13],
            'cita6' => $row[14],
            'jumlahsaudara6' => $row[15],
            'asalsekolah6' => $row[16],
            'alamatasalsekolah6' => $row[17],
            'nokk6' => $row[18],
            'namaayah6' => $row[19],
            'nikayah6' => $row[20],
            'tahunlahirayah6' => $row[26],
            'pendidikanayah6' => $row[22],
            'pekerjaanayah6' => $row[23],
            'namaibu6' => $row[24],
            'nikibu6' => $row[25],
            'tahunlahiribu6' => $row[26],
            'pendidikanibu6' => $row[27],
            'pekerjaanibu6' => $row[28],
            'penghasilan6' => $row[29],
            'prestasi6' => $row[30],
            'nohp6' => $row[31],

        ]);
    }
}
