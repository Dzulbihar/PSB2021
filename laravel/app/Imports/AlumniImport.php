<?php

namespace App\Imports;

use App\Alumni;
use Maatwebsite\Excel\Concerns\ToModel;

class AlumniImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Alumni([

            'user_id' => $row[1],
            'namalengkap99' => $row[2],
            'jenjang99' => $row[3],
            'tahunlulus99' => $row[4],
            'pendidikanlanjut99' => $row[5],
            'avatar99' => $row[6],
            'nisn99' => $row[7],
            'nik99' => $row[8],
            'tempatlahir99' => $row[9],
            'tbt99' => $row[10],
            'jenkel99' => $row[11],
            'desa99' => $row[12],
            'kec99' => $row[13],
            'kab99' => $row[14],
            'prov99' => $row[15],
            'kodepos99' => $row[16],
            'cita99' => $row[17],
            'jumlahsaudara99' => $row[18],
            'asalsekolah99' => $row[19],
            'alamatasalsekolah99' => $row[20],
            'nokk99' => $row[21],
            'namaayah99' => $row[22],
            'nikayah99' => $row[23],
            'tahunlahirayah99' => $row[24],
            'pendidikanayah99' => $row[25],
            'pekerjaanayah99' => $row[26],
            'namaibu99' => $row[27],
            'nikibu99' => $row[28],
            'tahunlahiribu99' => $row[29],
            'pendidikanibu99' => $row[30],
            'pekerjaanibu99' => $row[31],
            'penghasilan99' => $row[32],
            'prestasi99' => $row[33],
            'nohp99' => $row[34],

        ]);
    }
}
