<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;

class DashboardController extends Controller
{
    public function index()
    {
        $a =Alumni::get();
        return view('dashboard.index')->with('a',$a);

    }
}
