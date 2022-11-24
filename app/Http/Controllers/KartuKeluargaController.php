<?php

namespace App\Http\Controllers;

use App\Models\KartuKeluarga;
use Illuminate\Http\Request;

class KartuKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kartukeluarga.index',[
            'kartu_keluargas'=>KartuKeluarga::latest()->paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kartukeluarga.create',[
            'kartu_keluargas'=>KartuKeluarga::all()
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
            'no_kk' =>'required',
            'nama_kepala' => 'required',
            'alamat' => 'required',
        ]);
  
       KartuKeluarga::create($validatedData);
       return redirect('/kk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KartuKeluarga  $kartuKeluarga
     * @return \Illuminate\Http\Response
     */
    public function show(KartuKeluarga $kartuKeluarga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KartuKeluarga  $kartuKeluarga
     * @return \Illuminate\Http\Response
     */
    public function edit(KartuKeluarga $kartuKeluarga)
    {
        return view('dashboard.kartukeluarga.edit',[
            'kartu_keluargas'=>$kartuKeluarga
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KartuKeluarga  $kartuKeluarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KartuKeluarga $kartuKeluarga)
    {
        $validateData=$request->validate([
            'no_kk' =>'required',
            'nama_kepala' => 'required',
            'alamat' => 'required',        ]);
        
        KartuKeluarga::where('id',$kartuKeluarga->id)->update($validateData);
        return redirect('/kk')->with('pesan','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KartuKeluarga  $kartuKeluarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(KartuKeluarga $kartuKeluarga)
    {
        KartuKeluarga::destroy($kartuKeluarga->id);
        return redirect('/kk')->with('pesan','Data berhasil dihapus');
    }
}
