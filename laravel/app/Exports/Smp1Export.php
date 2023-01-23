<?php

namespace App\Exports;

use App\Smp1;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Smp1Export implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Smp1::all();
    }

    public function map($smp1): array
    {
        return [
            $smp1->created_at,
            $smp1->status,
            $smp1->fasilitas,
            $smp1->namalengkap,

            $smp1->tempatlahir1,
            $smp1->tbt1,
            $smp1->jenkel,

            $smp1->desa,
            $smp1->kec,
            $smp1->kab,
            $smp1->prov,

            $smp1->asalsekolah1,
            $smp1->alamatasalsekolah1,

            $smp1->namaayah1,
            $smp1->pendidikanayah1,
            $smp1->pekerjaanayah1,
            $smp1->namaibu1,
            $smp1->pendidikanibu1,
            $smp1->pekerjaanibu1,
            $smp1->nohp1
            
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
