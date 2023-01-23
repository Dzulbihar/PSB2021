<?php

namespace App\Exports;

use App\Smp18;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Smp18Export implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Smp18::all();
    }

    public function map($smp18): array
    {
        return [
            $smp18->namalengkap18,
            $smp18->nisn18,
            $smp18->nik18,
            $smp18->tempatlahir18,
            $smp18->tbt18,
            $smp18->jenkel18,
            $smp18->desa18,
            $smp18->kec18,
            $smp18->kab18,
            $smp18->prov18,
            $smp18->kodepos18,
            $smp18->cita18,
            $smp18->jumlahsaudara18,
            $smp18->asalsekolah18,
            $smp18->alamatasalsekolah18,
            $smp18->nokk18,
            $smp18->namaayah18,
            $smp18->nikayah18,
            $smp18->tahunlahirayah18,
            $smp18->pendidikanayah18,
            $smp18->pekerjaanayah18,
            $smp18->namaibu18,
            $smp18->nikibu18,
            $smp18->tahunlahiribu18,
            $smp18->pendidikanibu18,
            $smp18->pekerjaanibu18,
            $smp18->penghasilan18,
            $smp18->prestasi18,
            $smp18->nohp18
            
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
