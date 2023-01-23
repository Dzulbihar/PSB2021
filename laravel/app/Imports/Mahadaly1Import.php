<?php

namespace App\Imports;

use App\Mahadaly1;
use Maatwebsite\Excel\Concerns\ToModel;

class Mahadaly1Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mahadaly1([

            'user_id' => $row[1],
            'namalengkap71' => $row[2],
            'avatar71' => $row[3],
            'nisn71' => $row[4],
            'nik71' => $row[5],
            'tempatlahir71' => $row[6],
            'tbt71' => $row[7],
            'jenkel71' => $row[8],
            'desa71' => $row[9],
            'kec71' => $row[10],
            'kab71' => $row[11],
            'prov71' => $row[12],
            'kodepos71' => $row[13],
            'cita71' => $row[14],
            'jumlahsaudara71' => $row[15],
            'asalsekolah71' => $row[16],
            'alamatasalsekolah71' => $row[17],
            'nokk71' => $row[18],
            'namaayah71' => $row[19],
            'nikayah71' => $row[20],
            'tahunlahirayah71' => $row[21],
            'pendidikanayah71' => $row[22],
            'pekerjaanayah71' => $row[23],
            'namaibu71' => $row[24],
            'nikibu71' => $row[25],
            'tahunlahiribu71' => $row[26],
            'pendidikanibu71' => $row[27],
            'pekerjaanibu71' => $row[28],
            'penghasilan71' => $row[29],
            'prestasi71' => $row[30],
            'nohp71' => $row[31],

        ]);
    }
}
