<?php

namespace App\Http\Controllers;

use App\Models\kelahiran;
use Illuminate\Http\Request;

class KelahiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kelahiran.index',[
            'kelahirans'=>Kelahiran::latest()->paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kelahiran.create',[
            'kelahirans'=>Kelahiran::all()
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
            'nama' =>'required',
            'jenis_kelamin' => 'required',
            'tanggal' => 'required',
            'tempat' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'alamat' => 'required',
        ]);
  
       kelahiran::create($validatedData);
       return redirect('/kelahiran');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kelahiran  $kelahiran
     * @return \Illuminate\Http\Response
     */
    public function show(kelahiran $kelahiran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kelahiran  $kelahiran
     * @return \Illuminate\Http\Response
     */
    public function edit(kelahiran $kelahiran)
    {
        return view('dashboard.kelahiran.edit',[
            'kelahirans'=>$kelahiran
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kelahiran  $kelahiran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kelahiran $kelahiran)
    {
        $validateData=$request->validate([
            'nama' =>'required',
            'jenis_kelamin' => 'required',
            'tanggal' => 'required',
            'tempat' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'alamat' => 'required',
        ]);
        
        Kelahiran::where('id',$kelahiran->id)->update($validateData);
        return redirect('/kelahiran')->with('pesan','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kelahiran  $kelahiran
     * @return \Illuminate\Http\Response
     */
    public function destroy(kelahiran $kelahiran)
    {
        kelahiran::destroy($kelahiran->id);
        return redirect('/kelahiran')->with('pesan','Data berhasil dihapus');
    }
}
