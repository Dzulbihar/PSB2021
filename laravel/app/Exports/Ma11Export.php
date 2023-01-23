<?php

namespace App\Exports;

use App\Ma11;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Ma11Export implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Ma11::all();
    }

    public function map($ma11): array
    {
        return [
            $ma11->namalengkap62,
            $ma11->nisn62,
            $ma11->nik62,
            $ma11->tempatlahir62,
            $ma11->tbt62,
            $ma11->jenkel62,
            $ma11->desa62,
            $ma11->kec62,
            $ma11->kab62,
            $ma11->prov62,
            $ma11->kodepos62,
            $ma11->cita62,
            $ma11->jumlahsaudara62,
            $ma11->asalsekolah62,
            $ma11->alamatasalsekolah62,
            $ma11->nokk62,
            $ma11->namaayah62,
            $ma11->nikayah62,
            $ma11->tahunlahirayah62,
            $ma11->pendidikanayah62,
            $ma11->pekerjaanayah62,
            $ma11->namaibu62,
            $ma11->nikibu62,
            $ma11->tahunlahiribu62,
            $ma11->pendidikanibu62,
            $ma11->pekerjaanibu62,
            $ma11->penghasilan62,
            $ma11->prestasi62,
            $ma11->nohp62
            
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
