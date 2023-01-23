<?php

namespace App\Exports;

use App\santrikeluar;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SantrikeluarExport implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return santrikeluar::all();
    }

    public function map($santrikeluar): array
    {
        return [
            $santrikeluar->namalengkap00,

            $santrikeluar->jenjang00,
            $santrikeluar->tahunajaran00,
            $santrikeluar->alasan00,

            $santrikeluar->nisn00,
            $santrikeluar->nik00,
            $santrikeluar->tempatlahir00,
            $santrikeluar->tbt00,
            $santrikeluar->jenkel00,
            $santrikeluar->desa00,
            $santrikeluar->kec00,
            $santrikeluar->kab00,
            $santrikeluar->prov00,
            $santrikeluar->kodepos00,
            $santrikeluar->cita00,
            $santrikeluar->jumlahsaudara00,
            $santrikeluar->asalsekolah00,
            $santrikeluar->alamatasalsekolah00,
            $santrikeluar->nokk00,
            $santrikeluar->namaayah00,
            $santrikeluar->nikayah00,
            $santrikeluar->tahunlahirayah00,
            $santrikeluar->pendidikanayah00,
            $santrikeluar->pekerjaanayah00,
            $santrikeluar->namaibu00,
            $santrikeluar->nikibu00,
            $santrikeluar->tahunlahiribu00,
            $santrikeluar->pendidikanibu00,
            $santrikeluar->pekerjaanibu00,
            $santrikeluar->penghasilan00,
            $santrikeluar->prestasi00,
            $santrikeluar->nohp00
            
        ];
    }

    public function headings(): array
    {
        return [
            'NAMA LENGKAP',

            'JENJANG',
            'TAHUN AJARAN',
            'ALASAN KELUAR',

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
