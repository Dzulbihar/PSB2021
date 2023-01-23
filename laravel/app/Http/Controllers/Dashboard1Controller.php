<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard1Controller extends Controller
{
    public function index()
    {
    	return view('dashboards1.index');
    }
}
