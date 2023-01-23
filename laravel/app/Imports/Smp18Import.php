<?php

namespace App\Imports;

use App\Smp18;
use Maatwebsite\Excel\Concerns\ToModel;

class Smp18Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Smp18([
            'user_id' => $row[1],
            'namalengkap18' => $row[2],
            'status18' => $row[3],
            'avatar18' => $row[4],
            'nisn18' => $row[5],
            'nik18' => $row[6],
            'tempatlahir18' => $row[7],
            'tbt18' => $row[8],
            'jenkel18' => $row[9],
            'desa18' => $row[10],
            'kec18' => $row[11],
            'kab18' => $row[12],
            'prov18' => $row[13],
            'kodepos18' => $row[14],
            'cita18' => $row[15],
            'jumlahsaudara18' => $row[16],
            'asalsekolah18' => $row[17],
            'alamatasalsekolah18' => $row[18],
            'nokk18' => $row[19],
            'namaayah18' => $row[20],
            'nikayah18' => $row[21],
            'tahunlahirayah18' => $row[22],
            'pendidikanayah18' => $row[23],
            'pekerjaanayah18' => $row[24],
            'namaibu18' => $row[25],
            'nikibu18' => $row[26],
            'tahunlahiribu18' => $row[27],
            'pendidikanibu18' => $row[28],
            'pekerjaanibu18' => $row[29],
            'penghasilan18' => $row[30],
            'prestasi18' => $row[31],
            'nohp18' => $row[32],

        ]);
    }
}
