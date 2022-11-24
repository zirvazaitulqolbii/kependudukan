<?php

namespace App\Http\Controllers;

use App\Models\KartuKeluarga;
use Illuminate\Http\Request;

class KartuKeluargaFrontController extends Controller
{
    public function index()
    {
        return view('kartukeluarga.index',[
            'kartu_keluargas'=>KartuKeluarga::latest()->paginate(7)
        ]);
    }
}
