<?php

namespace App\Exports;

use App\Registrasi_smktkr;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AdministrasiSmktkrExport implements FromCollection, WithMapping, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Registrasi_smktkr::all();
    }

    public function map($registrasi_smktkr): array
    {
        return [
            $registrasi_smktkr->nama,
            $registrasi_smktkr->fasilitas,
            $registrasi_smktkr->jenis_kelamin,
            $registrasi_smktkr->status,
            $registrasi_smktkr->lunas,
            $registrasi_smktkr->waktu,
            $registrasi_smktkr->bayar
            
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
