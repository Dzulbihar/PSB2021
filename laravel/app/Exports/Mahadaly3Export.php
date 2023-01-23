<?php

namespace App\Exports;

use App\Mahadaly3;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Mahadaly3Export implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mahadaly3::all();
    }

    public function map($mahadaly3): array
    {
        return [
            $mahadaly3->namalengkap73,
            $mahadaly3->nisn73,
            $mahadaly3->nik73,
            $mahadaly3->tempatlahir73,
            $mahadaly3->tbt73,
            $mahadaly3->jenkel73,
            $mahadaly3->desa73,
            $mahadaly3->kec73,
            $mahadaly3->kab73,
            $mahadaly3->prov73,
            $mahadaly3->kodepos73,
            $mahadaly3->cita73,
            $mahadaly3->jumlahsaudara73,
            $mahadaly3->asalsekolah73,
            $mahadaly3->alamatasalsekolah73,
            $mahadaly3->nokk73,
            $mahadaly3->namaayah73,
            $mahadaly3->nikayah73,
            $mahadaly3->tahunlahirayah73,
            $mahadaly3->pendidikanayah73,
            $mahadaly3->pekerjaanayah73,
            $mahadaly3->namaibu73,
            $mahadaly3->nikibu73,
            $mahadaly3->tahunlahiribu73,
            $mahadaly3->pendidikanibu73,
            $mahadaly3->pekerjaanibu73,
            $mahadaly3->penghasilan73,
            $mahadaly3->prestasi73,
            $mahadaly3->nohp73
            
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
