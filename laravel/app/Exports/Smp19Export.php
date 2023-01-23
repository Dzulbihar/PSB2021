<?php

namespace App\Exports;

use App\Smp19;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Smp19Export implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Smp19::all();
    }

    public function map($smp19): array
    {
        return [
            $smp19->namalengkap19,
            $smp19->nisn19,
            $smp19->nik19,
            $smp19->tempatlahir19,
            $smp19->tbt19,
            $smp19->jenkel19,
            $smp19->desa19,
            $smp19->kec19,
            $smp19->kab19,
            $smp19->prov19,
            $smp19->kodepos19,
            $smp19->cita19,
            $smp19->jumlahsaudara19,
            $smp19->asalsekolah19,
            $smp19->alamatasalsekolah19,
            $smp19->nokk19,
            $smp19->namaayah19,
            $smp19->nikayah19,
            $smp19->tahunlahirayah19,
            $smp19->pendidikanayah19,
            $smp19->pekerjaanayah19,
            $smp19->namaibu19,
            $smp19->nikibu19,
            $smp19->tahunlahiribu19,
            $smp19->pendidikanibu19,
            $smp19->pekerjaanibu19,
            $smp19->penghasilan19,
            $smp19->prestasi19,
            $smp19->nohp19
            
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
