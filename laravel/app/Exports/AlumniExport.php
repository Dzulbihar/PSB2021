<?php

namespace App\Exports;

use App\alumni;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AlumniExport implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return alumni::all();
    }

    public function map($alumni): array
    {
        return [
            $alumni->namalengkap99,

            $alumni->jenjang99,
            $alumni->tahunlulus99,
            $alumni->pendidikanlanjut99,

            $alumni->nisn99,
            $alumni->nik99,
            $alumni->tempatlahir99,
            $alumni->tbt99,
            $alumni->jenkel99,
            $alumni->desa99,
            $alumni->kec99,
            $alumni->kab99,
            $alumni->prov99,
            $alumni->kodepos99,
            $alumni->cita99,
            $alumni->jumlahsaudara99,
            $alumni->asalsekolah99,
            $alumni->alamatasalsekolah99,
            $alumni->nokk99,
            $alumni->namaayah99,
            $alumni->nikayah99,
            $alumni->tahunlahirayah99,
            $alumni->pendidikanayah99,
            $alumni->pekerjaanayah99,
            $alumni->namaibu99,
            $alumni->nikibu99,
            $alumni->tahunlahiribu99,
            $alumni->pendidikanibu99,
            $alumni->pekerjaanibu99,
            $alumni->penghasilan99,
            $alumni->prestasi99,
            $alumni->nohp99
            
        ];
    }

    public function headings(): array
    {
        return [
            'NAMA LENGKAP',

            'JENJANG',
            'TAHUN LULUS',
            'PENDIDIKAN LANJUT',

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
