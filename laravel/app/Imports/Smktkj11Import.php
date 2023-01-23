<?php

namespace App\Imports;

use App\Smktkj11;
use Maatwebsite\Excel\Concerns\ToModel;

class Smktkj11Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Smktkj11([

            'user_id' => $row[1],
            'namalengkap42' => $row[2],
            'status42' => $row[3],
            'avatar42' => $row[4],
            'nisn42' => $row[5],
            'nik42' => $row[6],
            'tempatlahir42' => $row[7],
            'tbt42' => $row[8],
            'jenkel42' => $row[9],
            'desa42' => $row[10],
            'kec42' => $row[11],
            'kab42' => $row[12],
            'prov42' => $row[13],
            'kodepos42' => $row[14],
            'cita42' => $row[15],
            'jumlahsaudara42' => $row[16],
            'asalsekolah42' => $row[17],
            'alamatasalsekolah42' => $row[18],
            'nokk42' => $row[19],
            'namaayah42' => $row[20],
            'nikayah42' => $row[21],
            'tahunlahirayah42' => $row[22],
            'pendidikanayah42' => $row[23],
            'pekerjaanayah42' => $row[24],
            'namaibu42' => $row[25],
            'nikibu42' => $row[26],
            'tahunlahiribu42' => $row[27],
            'pendidikanibu42' => $row[28],
            'pekerjaanibu42' => $row[29],
            'penghasilan42' => $row[30],
            'prestasi42' => $row[31],
            'nohp42' => $row[32],

        ]);
    }
}
