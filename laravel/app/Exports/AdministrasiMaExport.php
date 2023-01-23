<?php

namespace App\Exports;

use App\Ma_registrasi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AdministrasiMaExport implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Ma_registrasi::all();
    }

    public function map($ma_registrasi): array
    {
        return [
            $ma_registrasi->nama,
            $ma_registrasi->fasilitas,
            $ma_registrasi->jenis_kelamin,
            $ma_registrasi->status,
            $ma_registrasi->lunas,
            $ma_registrasi->waktu,
            $ma_registrasi->bayar
            
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
