<?php

namespace App\Imports;

use App\Smp28;
use Maatwebsite\Excel\Concerns\ToModel;

class Smp28Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Smp28([

            'user_id' => $row[1],
            'namalengkap28' => $row[2],
            'status28' => $row[3],
            'avatar28' => $row[4],
            'nisn28' => $row[5],
            'nik28' => $row[6],
            'tempatlahir28' => $row[7],
            'tbt28' => $row[8],
            'jenkel28' => $row[9],
            'desa28' => $row[10],
            'kec28' => $row[11],
            'kab28' => $row[12],
            'prov28' => $row[13],
            'kodepos28' => $row[14],
            'cita28' => $row[15],
            'jumlahsaudara28' => $row[16],
            'asalsekolah28' => $row[17],
            'alamatasalsekolah28' => $row[18],
            'nokk28' => $row[19],
            'namaayah28' => $row[20],
            'nikayah28' => $row[21],
            'tahunlahirayah28' => $row[22],
            'pendidikanayah28' => $row[23],
            'pekerjaanayah28' => $row[24],
            'namaibu28' => $row[25],
            'nikibu28' => $row[26],
            'tahunlahiribu28' => $row[27],
            'pendidikanibu28' => $row[28],
            'pekerjaanibu28' => $row[29],
            'penghasilan28' => $row[30],
            'prestasi28' => $row[31],
            'nohp28' => $row[32],
        ]);
    }
}
