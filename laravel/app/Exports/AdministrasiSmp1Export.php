<?php

namespace App\Exports;

use App\Registrasi_smp1;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AdministrasiSmp1Export implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Registrasi_smp1::all();
    }

    public function map($registrasi_smp1): array
    {
        return [
            $registrasi_smp1->nama,
            $registrasi_smp1->fasilitas,
            $registrasi_smp1->jenis_kelamin,
            $registrasi_smp1->status,
            $registrasi_smp1->lunas,
            $registrasi_smp1->waktu,
            $registrasi_smp1->bayar
            
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
