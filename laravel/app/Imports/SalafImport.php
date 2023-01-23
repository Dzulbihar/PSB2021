<?php

namespace App\Imports;

use App\Salaf;
use Maatwebsite\Excel\Concerns\ToModel;

class SalafImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Salaf([

            
            'user_id' => $row[1],
            'namalengkap0' => $row[2],
            'status0' => $row[3],
            'avatar0' => $row[4],
            'nisn0' => $row[5],
            'nik0' => $row[6],
            'tempatlahir0' => $row[7],
            'tbt0' => $row[8],
            'jenkel0' => $row[9],
            'desa0' => $row[10],
            'kec0' => $row[11],
            'kab0' => $row[12],
            'prov0' => $row[13],
            'kodepos0' => $row[14],
            'cita0' => $row[15],
            'jumlahsaudara0' => $row[16],
            'asalsekolah0' => $row[17],
            'alamatasalsekolah0' => $row[18],
            'nokk0' => $row[19],
            'namaayah0' => $row[20],
            'nikayah0' => $row[21],
            'tahunlahirayah0' => $row[22],
            'pendidikanayah0' => $row[23],
            'pekerjaanayah0' => $row[24],
            'namaibu0' => $row[25],
            'nikibu0' => $row[26],
            'tahunlahiribu0' => $row[27],
            'pendidikanibu0' => $row[28],
            'pekerjaanibu0' => $row[29],
            'penghasilan0' => $row[30],
            'prestasi0' => $row[31],
            'nohp0' => $row[32],


        ]);
    }
}
