<?php

namespace App\Exports;

use App\Ma;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MaExport implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Ma::all();
    }

    public function map($ma): array
    {
        return [
            $ma->created_at,
            $ma->status,
            $ma->fasilitas,
            $ma->namalengkap,

            $ma->tempatlahir6,
            $ma->tbt6,
            $ma->jenkel,

            $ma->desa,
            $ma->kec,
            $ma->kab,
            $ma->prov,

            $ma->asalsekolah6,
            $ma->alamatasalsekolah6,

            $ma->namaayah6,
            $ma->pendidikanayah6,
            $ma->pekerjaanayah6,
            $ma->namaibu6,
            $ma->pendidikanibu6,
            $ma->pekerjaanibu6,
            $ma->nohp6
            
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
