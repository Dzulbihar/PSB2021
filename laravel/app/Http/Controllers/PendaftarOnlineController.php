<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftarOnlineController extends Controller
{

    public function index()
    {
        return view('dashboards.pendaftar-online');
    }

}
