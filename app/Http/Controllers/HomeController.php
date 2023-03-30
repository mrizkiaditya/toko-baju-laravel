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
            'baju' => Baju::all(),
            'promo' => Promo::all()
        ]);
    }
}
