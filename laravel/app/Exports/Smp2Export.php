<?php

namespace App\Exports;

use App\Smp2;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Smp2Export implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Smp2::all();
    }

    public function map($smp2): array
    {
        return [
            $smp2->created_at,
            $smp2->status,
            $smp2->fasilitas,
            $smp2->namalengkap,

            $smp2->tempatlahir2,
            $smp2->tbt2,
            $smp2->jenkel,

            $smp2->desa,
            $smp2->kec,
            $smp2->kab,
            $smp2->prov,

            $smp2->asalsekolah2,
            $smp2->alamatasalsekolah2,

            $smp2->namaayah2,
            $smp2->pendidikanayah2,
            $smp2->pekerjaanayah2,
            $smp2->namaibu2,
            $smp2->pendidikanibu2,
            $smp2->pekerjaanibu2,
            $smp2->nohp2
            
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
