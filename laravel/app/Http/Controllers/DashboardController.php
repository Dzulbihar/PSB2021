<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Smp1;
class DashboardController extends Controller
{

    public function index()
    {
        return view('dashboards.index');
    }

    public function totalreguler(Request $request)
    {
        $totalreguler = DB::select
        ('
        select `created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `fasilitas`="Reguler"
        UNION ALL
        select `created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `fasilitas`="Reguler"
        UNION ALL
        select `created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `fasilitas`="Reguler"
        UNION ALL
        select `created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `fasilitas`="Reguler"
        UNION ALL
        select `created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `fasilitas`="Reguler"
        UNION ALL
        select `created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `fasilitas`="Reguler"
        UNION ALL
        select `created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `fasilitas`="Reguler"
        UNION ALL
        select `created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `fasilitas`="Reguler"
        ORDER BY `namalengkap`;
        ');
        return view('total.fasilitas.reguler', ['totalreguler' => $totalreguler]);
    }

    public function totalnonreguler(Request $request)
    {
        $totalnonreguler = DB::select
        ('
        select `created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `fasilitas`="Non Reguler"
        UNION ALL
        select `created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `fasilitas`="Non Reguler"
        UNION ALL
        select `created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `fasilitas`="Non Reguler"
        UNION ALL
        select `created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `fasilitas`="Non Reguler"
        UNION ALL
        select `created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `fasilitas`="Non Reguler"
        UNION ALL
        select `created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `fasilitas`="Non Reguler"
        UNION ALL
        select `created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `fasilitas`="Non Reguler"
        UNION ALL
        select `created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `fasilitas`="Non Reguler"
        ORDER BY `namalengkap`;
        ');
        return view('total.fasilitas.nonreguler', ['totalnonreguler' => $totalnonreguler]);
    }

    public function totallakilaki(Request $request)
    {
        $totallakilaki = DB::select
        ('
        select  `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `jenkel`="Laki-laki"
        UNION ALL
        select  `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `jenkel`="Laki-laki"
        UNION ALL
        select  `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `jenkel`="Laki-laki"
        UNION ALL
        select  `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `jenkel`="Laki-laki"
        UNION ALL
        select  `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `jenkel`="Laki-laki"
        UNION ALL
        select  `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `jenkel`="Laki-laki"
        UNION ALL
        select  `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `jenkel`="Laki-laki"
        UNION ALL
        select  `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `jenkel`="Laki-laki"
        ORDER BY `jenkel`;
        ');
        return view('total.jenkel.Laki-laki', ['totallakilaki' => $totallakilaki]);
    }

    public function totalperempuan(Request $request)
    {
        $totalperempuan = DB::select
        ('
        select  `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `jenkel`="Perempuan"
        UNION ALL
        select  `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `jenkel`="Perempuan"
        UNION ALL
        select  `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `jenkel`="Perempuan"
        UNION ALL
        select  `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `jenkel`="Perempuan"
        UNION ALL
        select  `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `jenkel`="Perempuan"
        UNION ALL
        select  `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `jenkel`="Perempuan"
        UNION ALL
        select  `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `jenkel`="Perempuan"
        UNION ALL
        select  `jenkel`,`created_at`,`status`,`namalengkap`,`fasilitas`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `jenkel`="Perempuan"
        ORDER BY `jenkel`;
        ');
        return view('total.jenkel.Perempuan', ['totalperempuan' => $totalperempuan]);
    }

    public function totalregulerlk(Request $request)
    {
        $totalregulerlk = DB::select
        ('
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `jenkel`="Laki-laki" and `fasilitas`="Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `jenkel`="Laki-laki" and `fasilitas`="Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `jenkel`="Laki-laki" and `fasilitas`="Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `jenkel`="Laki-laki" and `fasilitas`="Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `jenkel`="Laki-laki" and `fasilitas`="Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `jenkel`="Laki-laki" and `fasilitas`="Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `jenkel`="Laki-laki" and `fasilitas`="Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `jenkel`="Laki-laki" and `fasilitas`="Reguler"
        ORDER BY `fasilitas`;
        ');
        return view('total.fasilitas_jenkel.regulerlk', ['totalregulerlk' => $totalregulerlk]);
    }

    public function totalregulerpr(Request $request)
    {
        $totalregulerpr = DB::select
        ('
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `jenkel`="Perempuan" and `fasilitas`="Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `jenkel`="Perempuan" and `fasilitas`="Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `jenkel`="Perempuan" and `fasilitas`="Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `jenkel`="Perempuan" and `fasilitas`="Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `jenkel`="Perempuan" and `fasilitas`="Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `jenkel`="Perempuan" and `fasilitas`="Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `jenkel`="Perempuan" and `fasilitas`="Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `jenkel`="Perempuan" and `fasilitas`="Reguler"
        ORDER BY `fasilitas`;
        ');
        return view('total.fasilitas_jenkel.regulerpr', ['totalregulerpr' => $totalregulerpr]);
    }

    public function totalnonregulerlk(Request $request)
    {
        $totalnonregulerlk = DB::select
        ('
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `jenkel`="Laki-laki" and `fasilitas`="Non Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `jenkel`="Laki-laki" and `fasilitas`="Non Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `jenkel`="Laki-laki" and `fasilitas`="Non Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `jenkel`="Laki-laki" and `fasilitas`="Non Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `jenkel`="Laki-laki" and `fasilitas`="Non Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `jenkel`="Laki-laki" and `fasilitas`="Non Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `jenkel`="Laki-laki" and `fasilitas`="Non Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `jenkel`="Laki-laki" and `fasilitas`="Non Reguler"
        ORDER BY `fasilitas`;
        ');
        return view('total.fasilitas_jenkel.nonregulerlk', ['totalnonregulerlk' => $totalnonregulerlk]);
    }

    public function totalnonregulerpr(Request $request)
    {
        $totalnonregulerpr = DB::select
        ('
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `jenkel`="Perempuan" and `fasilitas`="Non Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `jenkel`="Perempuan" and `fasilitas`="Non Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `jenkel`="Perempuan" and `fasilitas`="Non Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `jenkel`="Perempuan" and `fasilitas`="Non Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `jenkel`="Perempuan" and `fasilitas`="Non Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `jenkel`="Perempuan" and `fasilitas`="Non Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `jenkel`="Perempuan" and `fasilitas`="Non Reguler"
        UNION ALL
        select  `fasilitas`,`jenkel`,`created_at`,`status`,`namalengkap`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `jenkel`="Perempuan" and `fasilitas`="Non Reguler"
        ORDER BY `fasilitas`;
        ');
        return view('total.fasilitas_jenkel.nonregulerpr', ['totalnonregulerpr' => $totalnonregulerpr]);
    }


    public function totalperbulan(Request $request)
    {
//// hanya menampilkan kolom tanggal masuk 
        $smktkr = DB::select('select * from `smktkr`');

        return view('total.perbulan.totalperbulan', ['smktkr' => $smktkr]);
    }
    
    public function totalperbulanjanuari(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `bulan`="Januari"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `bulan`="Januari"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `bulan`="Januari"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `bulan`="Januari"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `bulan`="Januari"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `bulan`="Januari"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `bulan`="Januari"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `bulan`="Januari"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.januari', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulanfebruari(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `bulan`="Februari"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `bulan`="Februari"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `bulan`="Februari"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `bulan`="Februari"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `bulan`="Februari"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `bulan`="Februari"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `bulan`="Februari"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `bulan`="Februari"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.februari', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulanmaret(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `bulan`="Maret"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `bulan`="Maret"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `bulan`="Maret"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `bulan`="Maret"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `bulan`="Maret"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `bulan`="Maret"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `bulan`="Maret"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `bulan`="Maret"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.maret', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulanapril(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `bulan`="April"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `bulan`="April"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `bulan`="April"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `bulan`="April"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `bulan`="April"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `bulan`="April"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `bulan`="April"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `bulan`="April"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.april', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulanmei(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `bulan`="Mei"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `bulan`="Mei"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `bulan`="Mei"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `bulan`="Mei"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `bulan`="Mei"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `bulan`="Mei"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `bulan`="Mei"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `bulan`="Mei"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.mei', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulanjuni(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `bulan`="Juni"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `bulan`="Juni"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `bulan`="Juni"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `bulan`="Juni"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `bulan`="Juni"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `bulan`="Juni"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `bulan`="Juni"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `bulan`="Juni"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.juni', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulanjuli(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `bulan`="Juli"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `bulan`="Juli"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `bulan`="Juli"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `bulan`="Juli"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `bulan`="Juli"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `bulan`="Juli"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `bulan`="Juli"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `bulan`="Juli"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.juli', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulanagustus(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `bulan`="Agustus"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `bulan`="Agustus"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `bulan`="Agustus"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `bulan`="Agustus"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `bulan`="Agustus"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `bulan`="Agustus"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `bulan`="Agustus"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `bulan`="Agustus"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.agustus', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulanseptember(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `bulan`="September"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `bulan`="September"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `bulan`="September"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `bulan`="September"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `bulan`="September"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `bulan`="September"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `bulan`="September"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `bulan`="September"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.september', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulanoktober(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `bulan`="Oktober"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `bulan`="Oktober"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `bulan`="Oktober"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `bulan`="Oktober"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `bulan`="Oktober"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `bulan`="Oktober"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `bulan`="Oktober"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `bulan`="Oktober"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.oktober', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulannovember(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `bulan`="November"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `bulan`="November"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `bulan`="November"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `bulan`="November"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `bulan`="November"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `bulan`="November"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `bulan`="November"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `bulan`="November"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.november', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulandesember(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `bulan`="Desember"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `bulan`="Desember"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `bulan`="Desember"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `bulan`="Desember"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `bulan`="Desember"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `bulan`="Desember"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `bulan`="Desember"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `bulan`="Desember"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.desember', ['totalperbulan' => $totalperbulan]);
    }

    public function totalsmp1(Request $request)
    {
        $totalsmp1 = DB::select
        ('
        select `status`,`created_at`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `status`="SMP 1"
        UNION ALL
        ORDER BY `namalengkap`;
        ');
        return view('total.jenjang.smp1', ['totalsmp1' => $totalsmp1]);
    }

    public function totalsmp2(Request $request)
    {
        $totalsmp2 = DB::select
        ('
        select `status`,`created_at`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `status`="SMP 2"
        UNION ALL
        ORDER BY `namalengkap`;
        ');
        return view('total.jenjang.smp2', ['totalsmp2' => $totalsmp2]);
    }

    public function totalmts(Request $request)
    {
        $totalmts = DB::select
        ('
        select `status`,`created_at`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `status`="MTs"
        UNION ALL
        ORDER BY `namalengkap`;
        ');
        return view('total.jenjang.mts', ['totalmts' => $totalmts]);
    }

    public function totalsmktkj(Request $request)
    {
        $totalsmktkj = DB::select
        ('
        select `status`,`created_at`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `status`="SMK TKJ"
        UNION ALL
        ORDER BY `namalengkap`;
        ');
        return view('total.jenjang.smktkj', ['totalsmktkj' => $totalsmktkj]);
    }

    public function totalsmktkr(Request $request)
    {
        $totalsmktkr = DB::select
        ('
        select `status`,`created_at`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `status`="SMK TKR"
        UNION ALL
        ORDER BY `namalengkap`;
        ');
        return view('total.jenjang.smktkr', ['totalsmktkr' => $totalsmktkr]);
    }

    public function totalma(Request $request)
    {
        $totalma = DB::select
        ('
        select `status`,`created_at`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `status`="MA"
        UNION ALL
        ORDER BY `namalengkap`;
        ');
        return view('total.jenjang.ma', ['totalma' => $totalma]);
    }

    public function totalmahadaly(Request $request)
    {
        $totalmahadaly = DB::select
        ('
        select `status`,`created_at`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `status`="Mahad Aly"
        UNION ALL
        ORDER BY `namalengkap`;
        ');
        return view('total.jenjang.mahadaly', ['totalmahadaly' => $totalmahadaly]);
    }

    public function totalregistrasi(Request $request)
    {
        $totalregistrasi = DB::select
        ('
        select `status`, `jalur`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` FROM  registrasi_smp1
        where `status`="sudah registrasi"
        UNION ALL
        select `status`, `jalur`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` FROM  registrasi_smp1
        where `status`="angsuran"
        UNION ALL

        select `status`, `jalur`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` FROM  registrasi_smp2
        where `status`="sudah registrasi"
        UNION ALL
        select `status`, `jalur`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` FROM  registrasi_smp2
        where `status`="angsuran"
        UNION ALL

        select `status`, `jalur`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` FROM  mts_registrasi
        where `status`="sudah registrasi"
        UNION ALL
        select `status`, `jalur`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` FROM  mts_registrasi
        where `status`="angsuran"
        UNION ALL

        select `status`, `jalur`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` FROM  registrasi_smktkj
        where `status`="sudah registrasi"
        UNION ALL
        select `status`, `jalur`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` FROM  registrasi_smktkj
        where `status`="angsuran"
        UNION ALL

        select `status`, `jalur`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` FROM  registrasi_smktkr
        where `status`="sudah registrasi"
        UNION ALL
        select `status`, `jalur`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` FROM  registrasi_smktkr
        where `status`="angsuran"
        UNION ALL

        select `status`, `jalur`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` FROM  ma_registrasi
        where `status`="sudah registrasi"
        UNION ALL
        select `status`, `jalur`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` FROM  ma_registrasi
        where `status`="angsuran"
        UNION ALL

        select `status`, `jalur`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` FROM  santrikeluar_registrasi
        where `status`="sudah registrasi"
        UNION ALL
        select `status`, `jalur`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` FROM  santrikeluar_registrasi
        where `status`="angsuran"
        UNION ALL

        select `status`, `jalur`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` FROM  registrasi_siswa
        where `status`="sudah registrasi"
        UNION ALL
        select `status`, `jalur`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` FROM  registrasi_siswa
        where `status`="angsuran"
        
        ORDER BY `nama`;
        ');
        return view('total.administrasi.registrasi', ['totalregistrasi' => $totalregistrasi]);
    }

    public function totallunas(Request $request)
    {
        $totallunas = DB::select
        ('
        select `lunas`, `jalur`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` FROM  registrasi_smp1
        where `lunas`="sudah lunas"
        UNION ALL
        select `lunas`, `jalur`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` FROM  registrasi_smp2
        where `lunas`="sudah lunas"
        UNION ALL
        select `lunas`, `jalur`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` FROM  mts_registrasi
        where `lunas`="sudah lunas"
        UNION ALL
        select `lunas`, `jalur`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` FROM  registrasi_smktkj
        where `lunas`="sudah lunas"
        UNION ALL
        select `lunas`, `jalur`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` FROM  registrasi_smktkr
        where `lunas`="sudah lunas"
        UNION ALL
        select `lunas`, `jalur`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` FROM  ma_registrasi
        where `lunas`="sudah lunas"
        UNION ALL
        select `lunas`, `jalur`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` FROM  santrikeluar_registrasi
        where `lunas`="sudah lunas"
        UNION ALL
        select `lunas`, `jalur`, `jenjang`, `nama`, `fasilitas`, `jenis_kelamin`, `created_at` FROM  registrasi_siswa
        where `lunas`="sudah lunas"
        ORDER BY `nama`;
        ');
        return view('total.administrasi.lunas', ['totallunas' => $totallunas]);
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function totalperbulanjanuarioffline(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `bulan`="Januari"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `bulan`="Januari"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `bulan`="Januari"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `bulan`="Januari"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `bulan`="Januari"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `bulan`="Januari"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `bulan`="Januari"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.offline.januari', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulanfebruarioffline(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `bulan`="Februari"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `bulan`="Februari"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `bulan`="Februari"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `bulan`="Februari"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `bulan`="Februari"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `bulan`="Februari"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `bulan`="Februari"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.offline.februari', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulanmaretoffline(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `bulan`="Maret"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `bulan`="Maret"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `bulan`="Maret"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `bulan`="Maret"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `bulan`="Maret"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `bulan`="Maret"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `bulan`="Maret"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.offline.maret', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulanapriloffline(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `bulan`="April"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `bulan`="April"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `bulan`="April"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `bulan`="April"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `bulan`="April"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `bulan`="April"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `bulan`="April"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.offline.april', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulanmeioffline(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `bulan`="Mei"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `bulan`="Mei"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `bulan`="Mei"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `bulan`="Mei"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `bulan`="Mei"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `bulan`="Mei"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `bulan`="Mei"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.offline.mei', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulanjunioffline(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `bulan`="Juni"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `bulan`="Juni"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `bulan`="Juni"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `bulan`="Juni"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `bulan`="Juni"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `bulan`="Juni"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `bulan`="Juni"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.offline.juni', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulanjulioffline(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `bulan`="Juli"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `bulan`="Juli"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `bulan`="Juli"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `bulan`="Juli"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `bulan`="Juli"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `bulan`="Juli"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `bulan`="Juli"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.offline.juli', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulanagustusoffline(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `bulan`="Agustus"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `bulan`="Agustus"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `bulan`="Agustus"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `bulan`="Agustus"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `bulan`="Agustus"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `bulan`="Agustus"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `bulan`="Agustus"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.offline.agustus', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulanseptemberoffline(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `bulan`="September"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `bulan`="September"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `bulan`="September"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `bulan`="September"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `bulan`="September"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `bulan`="September"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `bulan`="September"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.offline.september', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulanoktoberoffline(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `bulan`="Oktober"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `bulan`="Oktober"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `bulan`="Oktober"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `bulan`="Oktober"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `bulan`="Oktober"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `bulan`="Oktober"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `bulan`="Oktober"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.offline.oktober', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulannovemberoffline(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `bulan`="November"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `bulan`="November"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `bulan`="November"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `bulan`="November"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `bulan`="November"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `bulan`="November"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `bulan`="November"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.offline.november', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulandesemberoffline(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp1
        where `bulan`="Desember"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smp2
        where `bulan`="Desember"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM mts
        where `bulan`="Desember"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkj
        where `bulan`="Desember"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM smktkr
        where `bulan`="Desember"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM santrikeluar
        where `bulan`="Desember"
        UNION ALL
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM ma
        where `bulan`="Desember"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.offline.desember', ['totalperbulan' => $totalperbulan]);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function totalperbulanjanuarionline(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `bulan`="Januari"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.online.januari', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulanfebruarionline(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `bulan`="Februari"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.online.februari', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulanmaretonline(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `bulan`="Maret"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.online.maret', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulanaprilonline(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `bulan`="April"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.online.april', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulanmeionline(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `bulan`="Mei"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.online.mei', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulanjunionline(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `bulan`="Juni"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.online.juni', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulanjulionline(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `bulan`="Juli"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.online.juli', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulanagustusonline(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `bulan`="Agustus"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.online.agustus', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulanseptemberonline(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `bulan`="September"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.online.september', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulanoktoberonline(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `bulan`="Oktober"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.online.oktober', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulannovemberonline(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `bulan`="November"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.online.november', ['totalperbulan' => $totalperbulan]);
    }

    public function totalperbulandesemberonline(Request $request)
    {
        $totalperbulan = DB::select
        ('
        select `bulan`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab`,`prov` FROM siswa
        where `bulan`="Desember"
        ORDER BY `namalengkap`;
        ');
        return view('total.perbulan.online.desember', ['totalperbulan' => $totalperbulan]);
    }


    public function pendaftaranOnlineBelumTes(Request $request)
    {
        $tes = DB::select
        ('
        select `tes`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab` FROM siswa
        where `tes`="BELUM TES";
        ');
        return view('total.tes.belum', ['tes' => $tes]);
    }

    public function pendaftaranOnlineSudahTes(Request $request)
    {
        $tes = DB::select
        ('
        select `tes`,`created_at`,`status`,`namalengkap`,`fasilitas`,`jenkel`,`desa`,`kec`,`kab` FROM siswa
        where `tes`="SUDAH TES";
        ');
        return view('total.tes.sudah', ['tes' => $tes]);
    }





}
