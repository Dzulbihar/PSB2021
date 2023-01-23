<?php

namespace App\Exports;

use App\Mahadaly;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MahadalyExport implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mahadaly::all();
    }

    public function map($mahadaly): array
    {
        return [
            $mahadaly->created_at,
            $mahadaly->status,
            $mahadaly->fasilitas,
            $mahadaly->namalengkap,

            $mahadaly->tempatlahir7,
            $mahadaly->tbt7,
            $mahadaly->jenkel,

            $mahadaly->desa,
            $mahadaly->kec,
            $mahadaly->kab,
            $mahadaly->prov,

            $mahadaly->asalsekolah7,
            $mahadaly->alamatasalsekolah7,

            $mahadaly->namaayah7,
            $mahadaly->pendidikanayah7,
            $mahadaly->pekerjaanayah7,
            $mahadaly->namaibu7,
            $mahadaly->pendidikanibu7,
            $mahadaly->pekerjaanibu7,
            $mahadaly->nohp7
            
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
