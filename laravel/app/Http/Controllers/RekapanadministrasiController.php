<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

    use App\Registrasi_smp1;
    use App\Registrasi_smp2;
    use App\Mts_registrasi;
    use App\Registrasi_smktkj;
    use App\Registrasi_smktkr;
    use App\Ma_registrasi;
    use App\Mahadaly_registrasi;
    use App\Registrasi_siswa;

    use App\Exports\AdministrasiSmp1Export;
    use App\Exports\AdministrasiSmp2Export;
    use App\Exports\AdministrasiMtsExport;
    use App\Exports\AdministrasiSmktkjExport;
    use App\Exports\AdministrasiSmktkrExport;
    use App\Exports\AdministrasiMaExport;
    use App\Exports\AdministrasiMahadalyExport;
    use App\Exports\AdministrasiSiswaExport;

use DB;


class RekapanadministrasiController extends Controller
{

    public function smp1(Request $request)
    {
        $rekapanadministrasi = DB::select('select * from `registrasi_smp1`');

        return view('administrasi.smp1', ['rekapanadministrasi' => $rekapanadministrasi]);
    }

    public function exportExcelsmp1() 
    {
        return Excel::download(new AdministrasiSmp1Export, 'AdministrasiSmp1.xlsx');
    }


    public function smp2(Request $request)
    {
        $rekapanadministrasi = DB::select('select * from `registrasi_smp2`');

        return view('administrasi.smp2', ['rekapanadministrasi' => $rekapanadministrasi]);
    }

    public function exportExcelsmp2() 
    {
        return Excel::download(new AdministrasiSmp2Export, 'AdministrasiSmp2.xlsx');
    }


    public function mts(Request $request)
    {
        $rekapanadministrasi = DB::select('select * from `mts_registrasi`');

        return view('administrasi.mts', ['rekapanadministrasi' => $rekapanadministrasi]);
    }

    public function exportExcelmts() 
    {
        return Excel::download(new AdministrasiMtsExport, 'AdministrasiMts.xlsx');
    }


    public function smktkj(Request $request)
    {
        $rekapanadministrasi = DB::select('select * from `registrasi_smktkj`');

        return view('administrasi.smktkj', ['rekapanadministrasi' => $rekapanadministrasi]);
    }

    public function exportExcelsmktkj() 
    {
        return Excel::download(new AdministrasiSmktkjExport, 'AdministrasiSmpktkj.xlsx');
    }


    public function smktkr(Request $request)
    {
        $rekapanadministrasi = DB::select('select * from `registrasi_smktkr`');

        return view('administrasi.smktkr', ['rekapanadministrasi' => $rekapanadministrasi]);
    }

    public function exportExcelsmktkr() 
    {
        return Excel::download(new AdministrasiSmktkrExport, 'AdministrasiSmktkr.xlsx');
    }


    public function ma(Request $request)
    {
        $rekapanadministrasi = DB::select('select * from `ma_registrasi`');

        return view('administrasi.ma', ['rekapanadministrasi' => $rekapanadministrasi]);
    }

    public function exportExcelma() 
    {
        return Excel::download(new AdministrasiMaExport, 'AdministrasiMa.xlsx');
    }


    public function mahadaly(Request $request)
    {
        $rekapanadministrasi = DB::select('select * from `mahadaly_registrasi`');

        return view('administrasi.mahadaly', ['rekapanadministrasi' => $rekapanadministrasi]);
    }

    public function exportExcelmahadaly() 
    {
        return Excel::download(new AdministrasiMahadalyExport, 'AdministrasiMahadaly.xlsx');
    }


    public function siswa(Request $request)
    {
        $rekapanadministrasi = DB::select('select * from `registrasi_siswa`');

        return view('administrasi.siswa', ['rekapanadministrasi' => $rekapanadministrasi]);
    }

    public function exportExcelsiswa() 
    {
        return Excel::download(new AdministrasiSiswaExport, 'AdministrasiSiswa.xlsx');
    }

}
