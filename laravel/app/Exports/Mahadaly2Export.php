<?php

namespace App\Exports;

use App\Mahadaly2;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Mahadaly2Export implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mahadaly2::all();
    }

    public function map($mahadaly2): array
    {
        return [
            $mahadaly2->namalengkap72,
            $mahadaly2->nisn72,
            $mahadaly2->nik72,
            $mahadaly2->tempatlahir72,
            $mahadaly2->tbt72,
            $mahadaly2->jenkel72,
            $mahadaly2->desa72,
            $mahadaly2->kec72,
            $mahadaly2->kab72,
            $mahadaly2->prov72,
            $mahadaly2->kodepos72,
            $mahadaly2->cita72,
            $mahadaly2->jumlahsaudara72,
            $mahadaly2->asalsekolah72,
            $mahadaly2->alamatasalsekolah72,
            $mahadaly2->nokk72,
            $mahadaly2->namaayah72,
            $mahadaly2->nikayah72,
            $mahadaly2->tahunlahirayah72,
            $mahadaly2->pendidikanayah72,
            $mahadaly2->pekerjaanayah72,
            $mahadaly2->namaibu72,
            $mahadaly2->nikibu72,
            $mahadaly2->tahunlahiribu72,
            $mahadaly2->pendidikanibu72,
            $mahadaly2->pekerjaanibu72,
            $mahadaly2->penghasilan72,
            $mahadaly2->prestasi72,
            $mahadaly2->nohp72
            
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
