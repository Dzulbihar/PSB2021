<?php

namespace App\Exports;

use App\Registrasi_smktkj;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AdministrasiSmktkjExport implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Registrasi_smktkj::all();
    }

    public function map($registrasi_smktkj): array
    {
        return [
            $registrasi_smktkj->nama,
            $registrasi_smktkj->fasilitas,
            $registrasi_smktkj->jenis_kelamin,
            $registrasi_smktkj->status,
            $registrasi_smktkj->lunas,
            $registrasi_smktkj->waktu,
            $registrasi_smktkj->bayar
            
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
