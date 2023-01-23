<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use DB;

class EmailusersController extends Controller
{

    public function index(Request $request)
    {
        $emailusers = DB::select('select * from `users`');

        return view('emailusers.email', ['emailusers' => $emailusers]);
    }

}
