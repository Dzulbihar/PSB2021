<?php

namespace App\Exports;

use App\Ma10;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Ma10Export implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Ma10::all();
    }

    public function map($ma10): array
    {
        return [
            $ma10->namalengkap61,
            $ma10->nisn61,
            $ma10->nik61,
            $ma10->tempatlahir61,
            $ma10->tbt61,
            $ma10->jenkel61,
            $ma10->desa61,
            $ma10->kec61,
            $ma10->kab61,
            $ma10->prov61,
            $ma10->kodepos61,
            $ma10->cita61,
            $ma10->jumlahsaudara61,
            $ma10->asalsekolah61,
            $ma10->alamatasalsekolah61,
            $ma10->nokk61,
            $ma10->namaayah61,
            $ma10->nikayah61,
            $ma10->tahunlahirayah61,
            $ma10->pendidikanayah61,
            $ma10->pekerjaanayah61,
            $ma10->namaibu61,
            $ma10->nikibu61,
            $ma10->tahunlahiribu61,
            $ma10->pendidikanibu61,
            $ma10->pekerjaanibu61,
            $ma10->penghasilan61,
            $ma10->prestasi61,
            $ma10->nohp61
            
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
