<?php

namespace App\Exports;

use App\Smp27;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Smp27Export implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Smp27::all();
    }

    public function map($smp27): array
    {
        return [
            $smp27->namalengkap27,
            $smp27->nisn27,
            $smp27->nik27,
            $smp27->tempatlahir27,
            $smp27->tbt27,
            $smp27->jenkel27,
            $smp27->desa27,
            $smp27->kec27,
            $smp27->kab27,
            $smp27->prov27,
            $smp27->kodepos27,
            $smp27->cita27,
            $smp27->jumlahsaudara27,
            $smp27->asalsekolah27,
            $smp27->alamatasalsekolah27,
            $smp27->nokk27,
            $smp27->namaayah27,
            $smp27->nikayah27,
            $smp27->tahunlahirayah27,
            $smp27->pendidikanayah27,
            $smp27->pekerjaanayah27,
            $smp27->namaibu27,
            $smp27->nikibu27,
            $smp27->tahunlahiribu27,
            $smp27->pendidikanibu27,
            $smp27->pekerjaanibu27,
            $smp27->penghasilan27,
            $smp27->prestasi27,
            $smp27->nohp27
            
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
