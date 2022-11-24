<?php

namespace App\Http\Controllers;

use App\Models\kematian;
use Illuminate\Http\Request;

class KematianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kematian.index',[
            'kematians'=>Kematian::latest()->paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kematian.create',[
            'kematians'=>Kematian::all()
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
            'nik' =>'required',
            'nama' =>'required',
            'umur' =>'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'tanggal_meninggal' => 'required',
            'jam' => 'required',
            'keterangan' => 'required',
        ]);
  
       Kematian::create($validatedData);
       return redirect('/kematian');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kematian  $kematian
     * @return \Illuminate\Http\Response
     */
    public function show(kematian $kematian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kematian  $kematian
     * @return \Illuminate\Http\Response
     */
    public function edit(kematian $kematian)
    {
        return view('dashboard.kematian.edit',[
            'kematians'=>$kematian
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kematian  $kematian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kematian $kematian)
    {
        $validateData=$request->validate([
            'nik' =>'required',
            'nama' =>'required',
            'umur' =>'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'tanggal_meninggal' => 'required',
            'jam' => 'required',
            'keterangan' => 'required',
        ]);
        
        Kematian::where('id',$kematian->id)->update($validateData);
        return redirect('/kematian')->with('pesan','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kematian  $kematian
     * @return \Illuminate\Http\Response
     */
    public function destroy(kematian $kematian)
    {
        Kematian::destroy($kematian->id);
        return redirect('/kematian')->with('pesan','Data berhasil dihapus');
    }
}
