<?php

namespace App\Exports;

use App\Siswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SiswaExport implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Siswa::all();
    }

    public function map($siswa): array
    {
        return [
            $siswa->created_at,
            $siswa->status,
            $siswa->fasilitas,
            $siswa->namalengkap,

            $siswa->tempatlahir,
            $siswa->tbt,
            $siswa->jenkel,

            $siswa->desa,
            $siswa->kec,
            $siswa->kab,
            $siswa->prov,

            $siswa->asalsekolah,
            $siswa->alamatasalsekolah,

            $siswa->namaayah,
            $siswa->pendidikanayah,
            $siswa->pekerjaanayah,
            $siswa->namaibu,
            $siswa->pendidikanibu,
            $siswa->pekerjaanibu,
            $siswa->nohp
            
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
