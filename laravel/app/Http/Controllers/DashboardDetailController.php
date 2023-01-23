<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardDetailController extends Controller
{

    public function smp1detail(Request $request)
    {
        $smp1 = DB::select('select * from `smp1`');

        return view('dashboards.smp1', ['smp1' => $smp1]);
    }

    public function smp2detail(Request $request)
    {
        $smp2 = DB::select('select * from `smp2`');

        return view('dashboards.smp2', ['smp2' => $smp2]);
    }

    public function mtsdetail(Request $request)
    {
        $mts = DB::select('select * from `mts`');

        return view('dashboards.mts', ['mts' => $mts]);
    }

    public function smktkjdetail(Request $request)
    {
        $smktkj = DB::select('select * from `smktkj`');

        return view('dashboards.smktkj', ['smktkj' => $smktkj]);
    }

    public function smktkrdetail(Request $request)
    {
        $smktkr = DB::select('select * from `smktkr`');

        return view('dashboards.smktkr', ['smktkr' => $smktkr]);
    }

    public function madetail(Request $request)
    {
        $ma = DB::select('select * from `ma`');

        return view('dashboards.ma', ['ma' => $ma]);
    }

    public function mahadalydetail(Request $request)
    {
        $mahadaly = DB::select('select * from `mahadaly`');

        return view('dashboards.mahadaly', ['mahadaly' => $mahadaly]);
    }

    public function siswadetail(Request $request)
    {
        $siswa = DB::select('select * from `siswa`');

        return view('dashboards.online', ['siswa' => $siswa]);
    }


    public function smadetail(Request $request)
    {
        $sma = DB::select('select * from `santrikeluar`');

        return view('dashboards.sma', ['sma' => $sma]);
    }

}
