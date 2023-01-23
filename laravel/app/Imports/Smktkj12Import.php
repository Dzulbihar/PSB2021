<?php

namespace App\Imports;

use App\Smktkj12;
use Maatwebsite\Excel\Concerns\ToModel;

class Smktkj12Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Smktkj12([

            'user_id' => $row[1],
            'namalengkap43' => $row[2],
            'status43' => $row[3],
            'avatar43' => $row[4],
            'nisn43' => $row[5],
            'nik43' => $row[6],
            'tempatlahir43' => $row[7],
            'tbt43' => $row[8],
            'jenkel43' => $row[9],
            'desa43' => $row[10],
            'kec43' => $row[11],
            'kab43' => $row[12],
            'prov43' => $row[13],
            'kodepos43' => $row[14],
            'cita43' => $row[15],
            'jumlahsaudara43' => $row[16],
            'asalsekolah43' => $row[17],
            'alamatasalsekolah43' => $row[18],
            'nokk43' => $row[19],
            'namaayah43' => $row[20],
            'nikayah43' => $row[21],
            'tahunlahirayah43' => $row[22],
            'pendidikanayah43' => $row[23],
            'pekerjaanayah43' => $row[24],
            'namaibu43' => $row[25],
            'nikibu43' => $row[26],
            'tahunlahiribu43' => $row[27],
            'pendidikanibu43' => $row[28],
            'pekerjaanibu43' => $row[29],
            'penghasilan43' => $row[30],
            'prestasi43' => $row[31],
            'nohp43' => $row[32],

        ]);
    }
}
