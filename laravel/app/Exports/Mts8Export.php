<?php

namespace App\Exports;

use App\Mts8;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Mts8Export implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mts8::all();
    }

    public function map($mts8): array
    {
        return [
            $mts8->namalengkap38,
            $mts8->nisn38,
            $mts8->nik38,
            $mts8->tempatlahir38,
            $mts8->tbt38,
            $mts8->jenkel38,
            $mts8->desa38,
            $mts8->kec38,
            $mts8->kab38,
            $mts8->prov38,
            $mts8->kodepos38,
            $mts8->cita38,
            $mts8->jumlahsaudara38,
            $mts8->asalsekolah38,
            $mts8->alamatasalsekolah38,
            $mts8->nokk38,
            $mts8->namaayah38,
            $mts8->nikayah38,
            $mts8->tahunlahirayah38,
            $mts8->pendidikanayah38,
            $mts8->pekerjaanayah38,
            $mts8->namaibu38,
            $mts8->nikibu38,
            $mts8->tahunlahiribu38,
            $mts8->pendidikanibu38,
            $mts8->pekerjaanibu38,
            $mts8->penghasilan38,
            $mts8->prestasi38,
            $mts8->nohp38
            
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
