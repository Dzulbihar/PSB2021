<?php

namespace App\Exports;

use App\Smktkr12;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Smktkr12Export implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Smktkr12::all();
    }

    public function map($smktkr12): array
    {
        return [
            $smktkr12->namalengkap53,
            $smktkr12->nisn53,
            $smktkr12->nik53,
            $smktkr12->tempatlahir53,
            $smktkr12->tbt53,
            $smktkr12->jenkel53,
            $smktkr12->desa53,
            $smktkr12->kec53,
            $smktkr12->kab53,
            $smktkr12->prov53,
            $smktkr12->kodepos53,
            $smktkr12->cita53,
            $smktkr12->jumlahsaudara53,
            $smktkr12->asalsekolah53,
            $smktkr12->alamatasalsekolah53,
            $smktkr12->nokk53,
            $smktkr12->namaayah53,
            $smktkr12->nikayah53,
            $smktkr12->tahunlahirayah53,
            $smktkr12->pendidikanayah53,
            $smktkr12->pekerjaanayah53,
            $smktkr12->namaibu53,
            $smktkr12->nikibu53,
            $smktkr12->tahunlahiribu53,
            $smktkr12->pendidikanibu53,
            $smktkr12->pekerjaanibu53,
            $smktkr12->penghasilan53,
            $smktkr12->prestasi53,
            $smktkr12->nohp53
            
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
