<?php

namespace App\Imports;

use App\Smp29;
use Maatwebsite\Excel\Concerns\ToModel;

class Smp29Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Smp29([

            'user_id' => $row[1],
            'namalengkap29' => $row[2],
            'status29' => $row[3],
            'avatar29' => $row[4],
            'nisn29' => $row[5],
            'nik29' => $row[6],
            'tempatlahir29' => $row[7],
            'tbt29' => $row[8],
            'jenkel29' => $row[9],
            'desa29' => $row[10],
            'kec29' => $row[11],
            'kab29' => $row[12],
            'prov29' => $row[13],
            'kodepos29' => $row[14],
            'cita29' => $row[15],
            'jumlahsaudara29' => $row[16],
            'asalsekolah29' => $row[17],
            'alamatasalsekolah29' => $row[18],
            'nokk29' => $row[19],
            'namaayah29' => $row[20],
            'nikayah29' => $row[21],
            'tahunlahirayah29' => $row[22],
            'pendidikanayah29' => $row[23],
            'pekerjaanayah29' => $row[24],
            'namaibu29' => $row[25],
            'nikibu29' => $row[26],
            'tahunlahiribu29' => $row[27],
            'pendidikanibu29' => $row[28],
            'pekerjaanibu29' => $row[29],
            'penghasilan29' => $row[30],
            'prestasi29' => $row[31],
            'nohp29' => $row[32],

        ]);
    }
}
