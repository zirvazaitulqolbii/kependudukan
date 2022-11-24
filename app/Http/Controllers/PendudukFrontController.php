<?php

namespace App\Http\Controllers;

use App\Models\penduduk;
use Illuminate\Http\Request;

class PendudukFrontController extends Controller
{
    public function index()
    {
        return view('penduduk.index',[
            'penduduks'=>Penduduk::latest()->paginate(7)
        ]);
    }
}
