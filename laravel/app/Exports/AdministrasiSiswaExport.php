<?php

namespace App\Exports;

use App\Registrasi_siswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AdministrasiSiswaExport implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Registrasi_siswa::all();
    }

    public function map($registrasi_siswa): array
    {
        return [
            $registrasi_siswa->nama,
            $registrasi_siswa->jenjang,
            $registrasi_siswa->fasilitas,
            $registrasi_siswa->jenis_kelamin,
            $registrasi_siswa->status,
            $registrasi_siswa->lunas,
            $registrasi_siswa->waktu,
            $registrasi_siswa->bayar
            
        ];
    }

    public function headings(): array
    {
        return [
            'NAMA',
            'JENJANG',
            'FASILITAS',
            'JENIS KELAMIN',
            'STATUS REGISTRASI',
            'STATUS LUNAS',
            'WAKTU',
            'PEMBAYARAN',
        ];
    }

}
