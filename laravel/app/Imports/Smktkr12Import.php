<?php

namespace App\Imports;

use App\Smktkr12;
use Maatwebsite\Excel\Concerns\ToModel;

class Smktkr12Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Smktkr12([

            'user_id' => $row[1],
            'namalengkap53' => $row[2],
            'status53' => $row[3],
            'avatar53' => $row[4],
            'nisn53' => $row[5],
            'nik53' => $row[6],
            'tempatlahir53' => $row[7],
            'tbt53' => $row[8],
            'jenkel53' => $row[9],
            'desa53' => $row[10],
            'kec53' => $row[11],
            'kab53' => $row[12],
            'prov53' => $row[13],
            'kodepos53' => $row[14],
            'cita53' => $row[15],
            'jumlahsaudara53' => $row[16],
            'asalsekolah53' => $row[17],
            'alamatasalsekolah53' => $row[18],
            'nokk53' => $row[19],
            'namaayah53' => $row[20],
            'nikayah53' => $row[21],
            'tahunlahirayah53' => $row[22],
            'pendidikanayah53' => $row[23],
            'pekerjaanayah53' => $row[24],
            'namaibu53' => $row[25],
            'nikibu53' => $row[26],
            'tahunlahiribu53' => $row[27],
            'pendidikanibu53' => $row[28],
            'pekerjaanibu53' => $row[29],
            'penghasilan53' => $row[30],
            'prestasi53' => $row[31],
            'nohp53' => $row[32],
        ]);
    }
}
