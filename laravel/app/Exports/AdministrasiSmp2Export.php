<?php

namespace App\Exports;

use App\Registrasi_smp2;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AdministrasiSmp2Export implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Registrasi_smp2::all();
    }

    public function map($registrasi_smp2): array
    {
        return [
            $registrasi_smp2->nama,
            $registrasi_smp2->fasilitas,
            $registrasi_smp2->jenis_kelamin,
            $registrasi_smp2->status,
            $registrasi_smp2->lunas,
            $registrasi_smp2->waktu,
            $registrasi_smp2->bayar
            
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
