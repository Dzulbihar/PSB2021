<?php

namespace App\Imports;

use App\Smp2;
use Maatwebsite\Excel\Concerns\ToModel;

class Smp2Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Smp2([

            'user_id' => $row[1],
            'namalengkap' => $row[2],
            'avatar2' => $row[3],
            'nisn2' => $row[4],
            'nik2' => $row[5],
            'tempatlahir2' => $row[6],
            'tbt2' => $row[7],
            'jenkel' => $row[8],
            'desa' => $row[9],
            'kec' => $row[10],
            'kab' => $row[11],
            'prov' => $row[12],
            'kodepos2' => $row[13],
            'cita2' => $row[14],
            'jumlahsaudara2' => $row[15],
            'asalsekolah2' => $row[16],
            'alamatasalsekolah2' => $row[17],
            'nokk2' => $row[18],
            'namaayah2' => $row[19],
            'nikayah2' => $row[20],
            'tahunlahirayah2' => $row[21],
            'pendidikanayah2' => $row[22],
            'pekerjaanayah2' => $row[23],
            'namaibu2' => $row[24],
            'nikibu2' => $row[25],
            'tahunlahiribu2' => $row[26],
            'pendidikanibu2' => $row[27],
            'pekerjaanibu2' => $row[28],
            'penghasilan2' => $row[29],
            'prestasi2' => $row[30],
            'nohp2' => $row[31],

        ]);
    }
}
