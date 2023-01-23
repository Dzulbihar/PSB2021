<?php

namespace App\Exports;

use App\Smktkr10;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Smktkr10Export implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Smktkr10::all();
    }

    public function map($smktkr10): array
    {
        return [
            $smktkr10->namalengkap51,
            $smktkr10->nisn51,
            $smktkr10->nik51,
            $smktkr10->tempatlahir51,
            $smktkr10->tbt51,
            $smktkr10->jenkel51,
            $smktkr10->desa51,
            $smktkr10->kec51,
            $smktkr10->kab51,
            $smktkr10->prov51,
            $smktkr10->kodepos51,
            $smktkr10->cita51,
            $smktkr10->jumlahsaudara51,
            $smktkr10->asalsekolah51,
            $smktkr10->alamatasalsekolah51,
            $smktkr10->nokk51,
            $smktkr10->namaayah51,
            $smktkr10->nikayah51,
            $smktkr10->tahunlahirayah51,
            $smktkr10->pendidikanayah51,
            $smktkr10->pekerjaanayah51,
            $smktkr10->namaibu51,
            $smktkr10->nikibu51,
            $smktkr10->tahunlahiribu51,
            $smktkr10->pendidikanibu51,
            $smktkr10->pekerjaanibu51,
            $smktkr10->penghasilan51,
            $smktkr10->prestasi51,
            $smktkr10->nohp51
            
        ];
    }

    public function headings(): array
    {
        return [
            'NAMA LENGKAP',
            'NISN',
            'NIK',
            'TEMPAT LAHIR',
            'TANGGAL LAHIR',
            'JENIS KELAMIN',
            'DESA',
            'KECAMATAN',
            'KABUPATEN',
            'PROVINSI',
            'KODE POS',
            'CITA-CITA',
            'JUMLAH SAUDARA',
            'ASAL SEKOLAH',
            'ALAMAT ASAL SEKOLAH',
            'NO KK',
            'NAMA AYAH',
            'NIK AYAH',
            'TAHUN LAHIR AYAH',
            'PENDIDIKAN AYAH',
            'PEKERJAAN AYAH',
            'NAMA IBU',
            'NIK IBU',
            'TAHUN LAHIR IBU',
            'PENDIDIKAN IBU',
            'PEKERJAAN IBU',
            'PENGHASILAN',
            'NOMOR HP'
        ];
    }

}
