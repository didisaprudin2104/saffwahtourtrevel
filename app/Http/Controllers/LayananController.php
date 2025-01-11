<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        return view('layanan');
    }
    public function umroh()
    {
        return view('umroh');
    }
    public function haji()
    {
        return view('haji');
    }

    public function detail()
    {
        return view('detail');
    }
}

