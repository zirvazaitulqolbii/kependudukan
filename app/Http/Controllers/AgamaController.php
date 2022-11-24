<?php

namespace App\Http\Controllers;

use App\Models\agama;
use Illuminate\Http\Request;

class AgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.agama.index',[
            'agamas'=>Agama::latest()->paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.agama.create',[
            'agamas'=>Agama::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'nama_agama' =>'required',
        ]);
  
       Agama::create($validatedData);
       return redirect('/agama');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\agama  $agama
     * @return \Illuminate\Http\Response
     */
    public function show(agama $agama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\agama  $agama
     * @return \Illuminate\Http\Response
     */
    public function edit(agama $agama)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\agama  $agama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, agama $agama)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\agama  $agama
     * @return \Illuminate\Http\Response
     */
    public function destroy(agama $agama)
    {
        Agama::destroy($agama->id);
        return redirect('/agama')->with('pesan','Data berhasil dihapus');
    }
}
