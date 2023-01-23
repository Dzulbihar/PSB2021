<?php

namespace App\Exports;

use App\Smktkr11;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Smktkr11Export implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Smktkr11::all();
    }

    public function map($smktkr11): array
    {
        return [
            $smktkr11->namalengkap52,
            $smktkr11->nisn52,
            $smktkr11->nik52,
            $smktkr11->tempatlahir52,
            $smktkr11->tbt52,
            $smktkr11->jenkel52,
            $smktkr11->desa52,
            $smktkr11->kec52,
            $smktkr11->kab52,
            $smktkr11->prov52,
            $smktkr11->kodepos52,
            $smktkr11->cita52,
            $smktkr11->jumlahsaudara52,
            $smktkr11->asalsekolah52,
            $smktkr11->alamatasalsekolah52,
            $smktkr11->nokk52,
            $smktkr11->namaayah52,
            $smktkr11->nikayah52,
            $smktkr11->tahunlahirayah52,
            $smktkr11->pendidikanayah52,
            $smktkr11->pekerjaanayah52,
            $smktkr11->namaibu52,
            $smktkr11->nikibu52,
            $smktkr11->tahunlahiribu52,
            $smktkr11->pendidikanibu52,
            $smktkr11->pekerjaanibu52,
            $smktkr11->penghasilan52,
            $smktkr11->prestasi52,
            $smktkr11->nohp52
            
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
