<?php

namespace App\Exports;

use App\Smp29;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Smp29Export implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Smp29::all();
    }

    public function map($smp29): array
    {
        return [
            $smp29->namalengkap29,
            $smp29->nisn29,
            $smp29->nik29,
            $smp29->tempatlahir29,
            $smp29->tbt29,
            $smp29->jenkel29,
            $smp29->desa29,
            $smp29->kec29,
            $smp29->kab29,
            $smp29->prov29,
            $smp29->kodepos29,
            $smp29->cita29,
            $smp29->jumlahsaudara29,
            $smp29->asalsekolah29,
            $smp29->alamatasalsekolah29,
            $smp29->nokk29,
            $smp29->namaayah29,
            $smp29->nikayah29,
            $smp29->tahunlahirayah29,
            $smp29->pendidikanayah29,
            $smp29->pekerjaanayah29,
            $smp29->namaibu29,
            $smp29->nikibu29,
            $smp29->tahunlahiribu29,
            $smp29->pendidikanibu29,
            $smp29->pekerjaanibu29,
            $smp29->penghasilan29,
            $smp29->prestasi29,
            $smp29->nohp29
            
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
