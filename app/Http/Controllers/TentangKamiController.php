<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TentangKami ;

class TentangKamiController extends Controller
{
    public function index()
    {
        $abautData = TentangKami::first();
        return view('tentangkami', compact('abautData'));
    }
}
