<?php

namespace App\Exports;

use App\Smktkj11;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Smktkj11Export implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Smktkj11::all();
    }

    public function map($smktkj11): array
    {
        return [
            $smktkj11->namalengkap42,
            $smktkj11->nisn42,
            $smktkj11->nik42,
            $smktkj11->tempatlahir42,
            $smktkj11->tbt42,
            $smktkj11->jenkel42,
            $smktkj11->desa42,
            $smktkj11->kec42,
            $smktkj11->kab42,
            $smktkj11->prov42,
            $smktkj11->kodepos42,
            $smktkj11->cita42,
            $smktkj11->jumlahsaudara42,
            $smktkj11->asalsekolah42,
            $smktkj11->alamatasalsekolah42,
            $smktkj11->nokk42,
            $smktkj11->namaayah42,
            $smktkj11->nikayah42,
            $smktkj11->tahunlahirayah42,
            $smktkj11->pendidikanayah42,
            $smktkj11->pekerjaanayah42,
            $smktkj11->namaibu42,
            $smktkj11->nikibu42,
            $smktkj11->tahunlahiribu42,
            $smktkj11->pendidikanibu42,
            $smktkj11->pekerjaanibu42,
            $smktkj11->penghasilan42,
            $smktkj11->prestasi42,
            $smktkj11->nohp42
            
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
