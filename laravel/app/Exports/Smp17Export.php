<?php

namespace App\Exports;

use App\Smp17;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Smp17Export implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Smp17::all();
    }

    public function map($smp17): array
    {
        return [
            $smp17->namalengkap17,
            $smp17->nisn17,
            $smp17->nik17,
            $smp17->tempatlahir17,
            $smp17->tbt17,
            $smp17->jenkel17,
            $smp17->desa17,
            $smp17->kec17,
            $smp17->kab17,
            $smp17->prov17,
            $smp17->kodepos17,
            $smp17->cita17,
            $smp17->jumlahsaudara17,
            $smp17->asalsekolah17,
            $smp17->alamatasalsekolah17,
            $smp17->nokk17,
            $smp17->namaayah17,
            $smp17->nikayah17,
            $smp17->tahunlahirayah17,
            $smp17->pendidikanayah17,
            $smp17->pekerjaanayah17,
            $smp17->namaibu17,
            $smp17->nikibu17,
            $smp17->tahunlahiribu17,
            $smp17->pendidikanibu17,
            $smp17->pekerjaanibu17,
            $smp17->penghasilan17,
            $smp17->prestasi17,
            $smp17->nohp17
            
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
