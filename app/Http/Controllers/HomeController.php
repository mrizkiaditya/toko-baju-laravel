<?php

namespace App\Http\Controllers;

use App\Models\Baju;
use App\Models\Promo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('users.home', [
            'pria'=> Baju::where('jenis_baju', '=', 'baju pria')->inRandomOrder()->get(),
            'wanita'=> Baju::where('jenis_baju', '=', 'baju wanita')->inRandomOrder()->get(),
            // 'baju' => Baju::all(),
            'promo' => Promo::all()
        ]);
    }
}
