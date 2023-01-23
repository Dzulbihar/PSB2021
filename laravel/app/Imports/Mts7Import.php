<?php

namespace App\Imports;

use App\Mts7;
use Maatwebsite\Excel\Concerns\ToModel;

class Mts7Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mts7([

            'user_id' => $row[1],
            'namalengkap37' => $row[2],
            'status37' => $row[3],
            'avatar37' => $row[4],
            'nisn37' => $row[5],
            'nik37' => $row[6],
            'tempatlahir37' => $row[7],
            'tbt37' => $row[8],
            'jenkel37' => $row[9],
            'desa37' => $row[10],
            'kec37' => $row[11],
            'kab37' => $row[12],
            'prov37' => $row[13],
            'kodepos37' => $row[14],
            'cita37' => $row[15],
            'jumlahsaudara37' => $row[16],
            'asalsekolah37' => $row[17],
            'alamatasalsekolah37' => $row[18],
            'nokk37' => $row[19],
            'namaayah37' => $row[20],
            'nikayah37' => $row[21],
            'tahunlahirayah37' => $row[22],
            'pendidikanayah37' => $row[23],
            'pekerjaanayah37' => $row[24],
            'namaibu37' => $row[25],
            'nikibu37' => $row[26],
            'tahunlahiribu37' => $row[27],
            'pendidikanibu37' => $row[28],
            'pekerjaanibu37' => $row[29],
            'penghasilan37' => $row[30],
            'prestasi37' => $row[31],
            'nohp37' => $row[32],

        ]);
    }
}
