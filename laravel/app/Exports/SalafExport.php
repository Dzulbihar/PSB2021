<?php

namespace App\Exports;

use App\Salaf;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SalafExport implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Salaf::all();
    }

    public function map($salaf): array
    {
        return [
            $salaf->namalengkap0,
            $salaf->nisn0,
            $salaf->nik0,
            $salaf->tempatlahir0,
            $salaf->tbt0,
            $salaf->jenkel0,
            $salaf->desa0,
            $salaf->kec0,
            $salaf->kab0,
            $salaf->prov0,
            $salaf->kodepos0,
            $salaf->asalsekolah0,
            $salaf->alamatasalsekolah0,
            $salaf->nokk0,
            $salaf->namaayah0,
            $salaf->pendidikanayah0,
            $salaf->pekerjaanayah0,
            $salaf->namaibu0,
            $salaf->pendidikanibu0,
            $salaf->pekerjaanibu0,
            $salaf->nohp0
            
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
            'ASAL SEKOLAH',
            'ALAMAT ASAL SEKOLAH',
            'NO KK',
            'NAMA AYAH',
            'PENDIDIKAN AYAH',
            'PEKERJAAN AYAH',
            'NAMA IBU',
            'PENDIDIKAN IBU',
            'PEKERJAAN IBU',
            'NOMOR HP'
        ];
    }

}
