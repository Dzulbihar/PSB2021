<?php

namespace App\Exports;

use App\Mahadaly_registrasi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AdministrasiMahadalyExport implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mahadaly_registrasi::all();
    }

    public function map($mahadaly_registrasi): array
    {
        return [
            $mahadaly_registrasi->nama,
            $mahadaly_registrasi->fasilitas,
            $mahadaly_registrasi->jenis_kelamin,
            $mahadaly_registrasi->status,
            $mahadaly_registrasi->lunas,
            $mahadaly_registrasi->waktu,
            $mahadaly_registrasi->bayar
            
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
