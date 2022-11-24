<?php

namespace App\Http\Controllers;

use App\Models\kelahiran;
use Illuminate\Http\Request;

class KelahiranFrontController extends Controller
{
    public function index()
    {
        return view('kelahiran.index',[
            'kelahirans'=>kelahiran::latest()->paginate(7)
        ]);
    }
}
