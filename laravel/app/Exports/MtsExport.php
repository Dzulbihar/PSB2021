<?php

namespace App\Exports;

use App\Mts;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MtsExport implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mts::all();
    }

    public function map($mts): array
    {
        return [
            $mts->created_at,
            $mts->status,
            $mts->fasilitas,
            $mts->namalengkap,

            $mts->tempatlahir3,
            $mts->tbt3,
            $mts->jenkel,

            $mts->desa,
            $mts->kec,
            $mts->kab,
            $mts->prov,

            $mts->asalsekolah3,
            $mts->alamatasalsekolah3,

            $mts->namaayah3,
            $mts->pendidikanayah3,
            $mts->pekerjaanayah3,
            $mts->namaibu3,
            $mts->pendidikanibu3,
            $mts->pekerjaanibu3,
            $mts->nohp3
            
        ];
    }

    public function headings(): array
    {
        return [
            'TANGGAL MASUK',
            'JENJANG',
            'FASILITAS',
            'NAMA LENGKAP',

            'TEMPAT LAHIR',
            'TANGGAL LAHIR',
            'JENIS KELAMIN',

            'DESA',
            'KECAMATAN',
            'KABUPATEN',
            'PROVINSI',

            'ASAL SEKOLAH',
            'ALAMAT ASAL SEKOLAH',

            'NAMA AYAH',
            'PENDIDIKAN AYAH',
            'PEKERJAAN AYAH',
            'NAMA IBU',
            'PENDIDIKAN IBU',
            'PEKERJAAN IBU',
            'NOMOR HP'
        ];
    }

}
