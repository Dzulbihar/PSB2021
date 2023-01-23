<?php

namespace App\Exports;

use App\Smktkj10;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Smktkj10Export implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Smktkj10::all();
    }

    public function map($smktkj10): array
    {
        return [
            $smktkj10->namalengkap41,
            $smktkj10->nisn41,
            $smktkj10->nik41,
            $smktkj10->tempatlahir41,
            $smktkj10->tbt41,
            $smktkj10->jenkel41,
            $smktkj10->desa41,
            $smktkj10->kec41,
            $smktkj10->kab41,
            $smktkj10->prov41,
            $smktkj10->kodepos41,
            $smktkj10->cita41,
            $smktkj10->jumlahsaudara41,
            $smktkj10->asalsekolah41,
            $smktkj10->alamatasalsekolah41,
            $smktkj10->nokk41,
            $smktkj10->namaayah41,
            $smktkj10->nikayah41,
            $smktkj10->tahunlahirayah41,
            $smktkj10->pendidikanayah41,
            $smktkj10->pekerjaanayah41,
            $smktkj10->namaibu41,
            $smktkj10->nikibu41,
            $smktkj10->tahunlahiribu41,
            $smktkj10->pendidikanibu41,
            $smktkj10->pekerjaanibu41,
            $smktkj10->penghasilan41,
            $smktkj10->prestasi41,
            $smktkj10->nohp41
            
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
