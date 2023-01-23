<?php

namespace App\Exports;

use App\Mahadaly4;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Mahadaly4Export implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mahadaly4::all();
    }

    public function map($mahadaly4): array
    {
        return [
            $mahadaly4->namalengkap74,
            $mahadaly4->nisn74,
            $mahadaly4->nik74,
            $mahadaly4->tempatlahir74,
            $mahadaly4->tbt74,
            $mahadaly4->jenkel74,
            $mahadaly4->desa74,
            $mahadaly4->kec74,
            $mahadaly4->kab74,
            $mahadaly4->prov74,
            $mahadaly4->kodepos74,
            $mahadaly4->cita74,
            $mahadaly4->jumlahsaudara74,
            $mahadaly4->asalsekolah74,
            $mahadaly4->alamatasalsekolah74,
            $mahadaly4->nokk74,
            $mahadaly4->namaayah74,
            $mahadaly4->nikayah74,
            $mahadaly4->tahunlahirayah74,
            $mahadaly4->pendidikanayah74,
            $mahadaly4->pekerjaanayah74,
            $mahadaly4->namaibu74,
            $mahadaly4->nikibu74,
            $mahadaly4->tahunlahiribu74,
            $mahadaly4->pendidikanibu74,
            $mahadaly4->pekerjaanibu74,
            $mahadaly4->penghasilan74,
            $mahadaly4->prestasi74,
            $mahadaly4->nohp74
            
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
