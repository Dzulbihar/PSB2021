<?php

namespace App\Exports;

use App\Smp28;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Smp28Export implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Smp28::all();
    }

    public function map($smp28): array
    {
        return [
            $smp28->namalengkap28,
            $smp28->nisn28,
            $smp28->nik28,
            $smp28->tempatlahir28,
            $smp28->tbt28,
            $smp28->jenkel28,
            $smp28->desa28,
            $smp28->kec28,
            $smp28->kab28,
            $smp28->prov28,
            $smp28->kodepos28,
            $smp28->cita28,
            $smp28->jumlahsaudara28,
            $smp28->asalsekolah28,
            $smp28->alamatasalsekolah28,
            $smp28->nokk28,
            $smp28->namaayah28,
            $smp28->nikayah28,
            $smp28->tahunlahirayah28,
            $smp28->pendidikanayah28,
            $smp28->pekerjaanayah28,
            $smp28->namaibu28,
            $smp28->nikibu28,
            $smp28->tahunlahiribu28,
            $smp28->pendidikanibu28,
            $smp28->pekerjaanibu28,
            $smp28->penghasilan28,
            $smp28->prestasi28,
            $smp28->nohp28
            
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
