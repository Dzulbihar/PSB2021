<?php

namespace App\Imports;

use App\Smp1;
use Maatwebsite\Excel\Concerns\ToModel;

class Smp1Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Smp1([

            'user_id' => $row[1],
            'namalengkap' => $row[2],
            'avatar1' => $row[3],
            'nisn1' => $row[4],
            'nik1' => $row[5],
            'tempatlahir1' => $row[6],
            'tbt1' => $row[7],
            'jenkel' => $row[8],
            'desa' => $row[9],
            'kec' => $row[10],
            'kab' => $row[11],
            'prov' => $row[12],
            'kodepos1' => $row[13],
            'cita1' => $row[14],
            'jumlahsaudara1' => $row[15],
            'asalsekolah1' => $row[16],
            'alamatasalsekolah1' => $row[17],
            'nokk1' => $row[18],
            'namaayah1' => $row[19],
            'nikayah1' => $row[20],
            'tahunlahirayah1' => $row[21],
            'pendidikanayah1' => $row[22],
            'pekerjaanayah1' => $row[23],
            'namaibu1' => $row[24],
            'nikibu1' => $row[25],
            'tahunlahiribu1' => $row[26],
            'pendidikanibu1' => $row[27],
            'pekerjaanibu1' => $row[28],
            'penghasilan1' => $row[29],
            'prestasi1' => $row[30],
            'nohp1' => $row[31],

        ]);
    }
}
