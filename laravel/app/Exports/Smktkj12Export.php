<?php

namespace App\Exports;

use App\Smktkj12;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Smktkj12Export implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Smktkj12::all();
    }

    public function map($smktkj12): array
    {
        return [
            $smktkj12->namalengkap43,
            $smktkj12->nisn43,
            $smktkj12->nik43,
            $smktkj12->tempatlahir43,
            $smktkj12->tbt43,
            $smktkj12->jenkel43,
            $smktkj12->desa43,
            $smktkj12->kec43,
            $smktkj12->kab43,
            $smktkj12->prov43,
            $smktkj12->kodepos43,
            $smktkj12->cita43,
            $smktkj12->jumlahsaudara43,
            $smktkj12->asalsekolah43,
            $smktkj12->alamatasalsekolah43,
            $smktkj12->nokk43,
            $smktkj12->namaayah43,
            $smktkj12->nikayah43,
            $smktkj12->tahunlahirayah43,
            $smktkj12->pendidikanayah43,
            $smktkj12->pekerjaanayah43,
            $smktkj12->namaibu43,
            $smktkj12->nikibu43,
            $smktkj12->tahunlahiribu43,
            $smktkj12->pendidikanibu43,
            $smktkj12->pekerjaanibu43,
            $smktkj12->penghasilan43,
            $smktkj12->prestasi43,
            $smktkj12->nohp43
            
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
