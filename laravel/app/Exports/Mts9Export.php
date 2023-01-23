<?php

namespace App\Exports;

use App\Mts9;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Mts9Export implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mts9::all();
    }

    public function map($mts9): array
    {
        return [
            $mts9->namalengkap39,
            $mts9->nisn39,
            $mts9->nik39,
            $mts9->tempatlahir39,
            $mts9->tbt39,
            $mts9->jenkel39,
            $mts9->desa39,
            $mts9->kec39,
            $mts9->kab39,
            $mts9->prov39,
            $mts9->kodepos39,
            $mts9->cita39,
            $mts9->jumlahsaudara39,
            $mts9->asalsekolah39,
            $mts9->alamatasalsekolah39,
            $mts9->nokk39,
            $mts9->namaayah39,
            $mts9->nikayah39,
            $mts9->tahunlahirayah39,
            $mts9->pendidikanayah39,
            $mts9->pekerjaanayah39,
            $mts9->namaibu39,
            $mts9->nikibu39,
            $mts9->tahunlahiribu39,
            $mts9->pendidikanibu39,
            $mts9->pekerjaanibu39,
            $mts9->penghasilan39,
            $mts9->prestasi39,
            $mts9->nohp39
            
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
