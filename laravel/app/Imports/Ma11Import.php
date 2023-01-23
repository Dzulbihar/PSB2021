<?php

namespace App\Imports;

use App\Ma11;
use Maatwebsite\Excel\Concerns\ToModel;

class Ma11Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Ma11([

            'user_id' => $row[1],
            'namalengkap62' => $row[2],
            'status62' => $row[3],
            'avatar62' => $row[4],
            'nisn62' => $row[5],
            'nik62' => $row[6],
            'tempatlahir62' => $row[7],
            'tbt62' => $row[8],
            'jenkel62' => $row[9],
            'desa62' => $row[10],
            'kec62' => $row[11],
            'kab62' => $row[12],
            'prov62' => $row[13],
            'kodepos62' => $row[14],
            'cita62' => $row[15],
            'jumlahsaudara62' => $row[16],
            'asalsekolah62' => $row[17],
            'alamatasalsekolah62' => $row[18],
            'nokk62' => $row[19],
            'namaayah62' => $row[20],
            'nikayah62' => $row[21],
            'tahunlahirayah62' => $row[22],
            'pendidikanayah62' => $row[23],
            'pekerjaanayah62' => $row[24],
            'namaibu62' => $row[25],
            'nikibu62' => $row[26],
            'tahunlahiribu62' => $row[27],
            'pendidikanibu62' => $row[28],
            'pekerjaanibu62' => $row[29],
            'penghasilan62' => $row[30],
            'prestasi62' => $row[31],
            'nohp62' => $row[32],
        ]);
    }
}
