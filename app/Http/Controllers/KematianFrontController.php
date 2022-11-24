<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kematian;

class KematianFrontController extends Controller
{
    public function index()
    {
        return view('kematian.index',[
            'kematians'=>kematian::latest()->paginate(7)
        ]);
    }
}
