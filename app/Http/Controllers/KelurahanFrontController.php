<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use Illuminate\Http\Request;

class KelurahanFrontController extends Controller
{
    public function index()
    {
        return view('kelurahan.index',[
            'kelurahans'=>Kelurahan::latest()->paginate(7)
        ]);
    }
}
