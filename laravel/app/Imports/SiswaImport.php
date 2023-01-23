<?php

namespace App\Imports;

use App\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Siswa([

            'user_id' => $row[1],
            'status' => $row[2],
            'namalengkap' => $row[3],
            'nisn' => $row[4],
            'nik' => $row[5],
            'tempatlahir' => $row[6],
            'tbt' => $row[7],
            'jenkel' => $row[8],
            'desa' => $row[9],
            'kec' => $row[10],
            'kab' => $row[11],
            'prov' => $row[12],
            'kodepos' => $row[13],
            'cita' => $row[14],
            'jumlahsaudara' => $row[15],
            'asalsekolah' => $row[16],
            'alamatasalsekolah' => $row[17],
            'nokk' => $row[18],
            'namaayah' => $row[19],
            'nikayah' => $row[20],
            'tahunlahirayah' => $row[21],
            'pendidikanayah' => $row[22],
            'pekerjaanayah' => $row[23],
            'namaibu' => $row[24],
            'nikibu' => $row[25],
            'tahunlahiribu' => $row[26],
            'pendidikanibu' => $row[27],
            'pekerjaanibu' => $row[28],
            'penghasilan' => $row[29],
            'prestasi' => $row[30],
            'nohp' => $row[31],

        ]);
    }
}
