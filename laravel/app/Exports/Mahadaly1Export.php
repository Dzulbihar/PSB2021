<?php

namespace App\Exports;

use App\Mahadaly1;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Mahadaly1Export implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mahadaly1::all();
    }

    public function map($mahadaly1): array
    {
        return [
            $mahadaly1->namalengkap71,
            $mahadaly1->nisn71,
            $mahadaly1->nik71,
            $mahadaly1->tempatlahir71,
            $mahadaly1->tbt71,
            $mahadaly1->jenkel71,
            $mahadaly1->desa71,
            $mahadaly1->kec71,
            $mahadaly1->kab71,
            $mahadaly1->prov71,
            $mahadaly1->kodepos71,
            $mahadaly1->cita71,
            $mahadaly1->jumlahsaudara71,
            $mahadaly1->asalsekolah71,
            $mahadaly1->alamatasalsekolah71,
            $mahadaly1->nokk71,
            $mahadaly1->namaayah71,
            $mahadaly1->nikayah71,
            $mahadaly1->tahunlahirayah71,
            $mahadaly1->pendidikanayah71,
            $mahadaly1->pekerjaanayah71,
            $mahadaly1->namaibu71,
            $mahadaly1->nikibu71,
            $mahadaly1->tahunlahiribu71,
            $mahadaly1->pendidikanibu71,
            $mahadaly1->pekerjaanibu71,
            $mahadaly1->penghasilan71,
            $mahadaly1->prestasi71,
            $mahadaly1->nohp71
            
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
