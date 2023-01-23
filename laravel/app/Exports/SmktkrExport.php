<?php

namespace App\Exports;

use App\Smktkr;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SmktkrExport implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Smktkr::all();
    }

    public function map($smktkr): array
    {
        return [
            $smktkr->created_at,
            $smktkr->status,
            $smktkr->fasilitas,
            $smktkr->namalengkap,

            $smktkr->tempatlahir5,
            $smktkr->tbt5,
            $smktkr->jenkel,

            $smktkr->desa,
            $smktkr->kec,
            $smktkr->kab,
            $smktkr->prov,

            $smktkr->asalsekolah5,
            $smktkr->alamatasalsekolah5,

            $smktkr->namaayah5,
            $smktkr->pendidikanayah5,
            $smktkr->pekerjaanayah5,
            $smktkr->namaibu5,
            $smktkr->pendidikanibu5,
            $smktkr->pekerjaanibu5,
            $smktkr->nohp5
            
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
