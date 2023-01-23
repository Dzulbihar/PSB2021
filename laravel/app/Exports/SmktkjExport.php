<?php

namespace App\Exports;

use App\Smktkj;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SmktkjExport implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Smktkj::all();
    }

    public function map($smktkj): array
    {
        return [
            $smktkj->created_at,
            $smktkj->status,
            $smktkj->fasilitas,
            $smktkj->namalengkap,

            $smktkj->tempatlahir4,
            $smktkj->tbt4,
            $smktkj->jenkel,

            $smktkj->desa,
            $smktkj->kec,
            $smktkj->kab,
            $smktkj->prov,

            $smktkj->asalsekolah4,
            $smktkj->alamatasalsekolah4,

            $smktkj->namaayah4,
            $smktkj->pendidikanayah4,
            $smktkj->pekerjaanayah4,
            $smktkj->namaibu4,
            $smktkj->pendidikanibu4,
            $smktkj->pekerjaanibu4,
            $smktkj->nohp4
            
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
