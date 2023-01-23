<?php

namespace App\Imports;

use App\Santrikeluar;
use Maatwebsite\Excel\Concerns\ToModel;

class SantrikeluarImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Santrikeluar([

            'user_id' => $row[1],
            'namalengkap00' => $row[2],
            'jenjang00' => $row[3],
            'tahunajaran00' => $row[4],
            'alasan00' => $row[5],
            'avatar00' => $row[6],
            'nisn00' => $row[7],
            'nik00' => $row[8],
            'tempatlahir00' => $row[9],
            'tbt00' => $row[10],
            'jenkel00' => $row[11],
            'desa00' => $row[12],
            'kec00' => $row[13],
            'kab00' => $row[14],
            'prov00' => $row[15],
            'kodepos00' => $row[16],
            'cita00' => $row[17],
            'jumlahsaudara00' => $row[18],
            'asalsekolah00' => $row[19],
            'alamatasalsekolah00' => $row[20],
            'nokk00' => $row[21],
            'namaayah00' => $row[22],
            'nikayah00' => $row[23],
            'tahunlahirayah00' => $row[24],
            'pendidikanayah00' => $row[25],
            'pekerjaanayah00' => $row[26],
            'namaibu00' => $row[27],
            'nikibu00' => $row[28],
            'tahunlahiribu00' => $row[29],
            'pendidikanibu00' => $row[30],
            'pekerjaanibu00' => $row[31],
            'penghasilan00' => $row[32],
            'prestasi00' => $row[33],
            'nohp00' => $row[34],


        ]);
    }
}
