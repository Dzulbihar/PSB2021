<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard2Controller extends Controller
{
    public function index()
    {
    	return view('dashboards2.index');
    }
}