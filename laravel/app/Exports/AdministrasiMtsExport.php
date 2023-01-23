<?php

namespace App\Exports;

use App\Mts_registrasi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AdministrasiMtsExport implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mts_registrasi::all();
    }

    public function map($mts_registrasi): array
    {
        return [
            $mts_registrasi->nama,
            $mts_registrasi->fasilitas,
            $mts_registrasi->jenis_kelamin,
            $mts_registrasi->status,
            $mts_registrasi->lunas,
            $mts_registrasi->waktu,
            $mts_registrasi->bayar
            
        ];
    }

    public function headings(): array
    {
        return [
            'NAMA',
            'FASILITAS',
            'JENIS KELAMIN',
            'STATUS REGISTRASI',
            'STATUS LUNAS',
            'WAKTU',
            'PEMBAYARAN',
        ];
    }

}
