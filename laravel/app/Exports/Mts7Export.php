<?php

namespace App\Exports;

use App\Mts7;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Mts7Export implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mts7::all();
    }

    public function map($mts7): array
    {
        return [
            $mts7->namalengkap37,
            $mts7->nisn37,
            $mts7->nik37,
            $mts7->tempatlahir37,
            $mts7->tbt37,
            $mts7->jenkel37,
            $mts7->desa37,
            $mts7->kec37,
            $mts7->kab37,
            $mts7->prov37,
            $mts7->kodepos37,
            $mts7->cita37,
            $mts7->jumlahsaudara37,
            $mts7->asalsekolah37,
            $mts7->alamatasalsekolah37,
            $mts7->nokk37,
            $mts7->namaayah37,
            $mts7->nikayah37,
            $mts7->tahunlahirayah37,
            $mts7->pendidikanayah37,
            $mts7->pekerjaanayah37,
            $mts7->namaibu37,
            $mts7->nikibu37,
            $mts7->tahunlahiribu37,
            $mts7->pendidikanibu37,
            $mts7->pekerjaanibu37,
            $mts7->penghasilan37,
            $mts7->prestasi37,
            $mts7->nohp37
            
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
