<?php

namespace App\Imports;

use App\Smktkr;
use Maatwebsite\Excel\Concerns\ToModel;

class SmktkrImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Smktkr([

            'user_id' => $row[1],
            'namalengkap' => $row[2],
            'avatar5' => $row[3],
            'nisn5' => $row[4],
            'nik5' => $row[5],
            'tempatlahir5' => $row[6],
            'tbt5' => $row[7],
            'jenkel' => $row[8],
            'desa' => $row[9],
            'kec' => $row[10],
            'kab' => $row[11],
            'prov' => $row[12],
            'kodepos5' => $row[13],
            'cita5' => $row[14],
            'jumlahsaudara5' => $row[15],
            'asalsekolah5' => $row[16],
            'alamatasalsekolah5' => $row[17],
            'nokk5' => $row[18],
            'namaayah5' => $row[19],
            'nikayah5' => $row[20],
            'tahunlahirayah5' => $row[21],
            'pendidikanayah5' => $row[22],
            'pekerjaanayah5' => $row[23],
            'namaibu5' => $row[24],
            'nikibu5' => $row[25],
            'tahunlahiribu5' => $row[26],
            'pendidikanibu5' => $row[27],
            'pekerjaanibu5' => $row[28],
            'penghasilan5' => $row[29],
            'prestasi5' => $row[30],
            'nohp5' => $row[31],

        ]);
    }
}
