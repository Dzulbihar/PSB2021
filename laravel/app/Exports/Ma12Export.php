<?php

namespace App\Exports;

use App\Ma12;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Ma12Export implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Ma12::all();
    }

    public function map($ma12): array
    {
        return [
            $ma12->namalengkap63,
            $ma12->nisn63,
            $ma12->nik63,
            $ma12->tempatlahir63,
            $ma12->tbt63,
            $ma12->jenkel63,
            $ma12->desa63,
            $ma12->kec63,
            $ma12->kab63,
            $ma12->prov63,
            $ma12->kodepos63,
            $ma12->cita63,
            $ma12->jumlahsaudara63,
            $ma12->asalsekolah63,
            $ma12->alamatasalsekolah63,
            $ma12->nokk63,
            $ma12->namaayah63,
            $ma12->nikayah63,
            $ma12->tahunlahirayah63,
            $ma12->pendidikanayah63,
            $ma12->pekerjaanayah63,
            $ma12->namaibu63,
            $ma12->nikibu63,
            $ma12->tahunlahiribu63,
            $ma12->pendidikanibu63,
            $ma12->pekerjaanibu63,
            $ma12->penghasilan63,
            $ma12->prestasi63,
            $ma12->nohp63
            
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
