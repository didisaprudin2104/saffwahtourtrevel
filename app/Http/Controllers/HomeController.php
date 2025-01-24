<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::isActive()->get();

        // Kirim data ke view
        return view('home', compact('banners'));
    }
}
