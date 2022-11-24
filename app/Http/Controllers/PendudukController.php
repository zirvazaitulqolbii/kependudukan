<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use App\Models\Agama;
use App\Models\status_kawin;
use App\Models\penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.penduduk.index',[
            'penduduks'=>Penduduk::latest()->paginate(7)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.penduduk.create",[
            'kelurahans'=>Kelurahan::all(),
            'agamas'=>agama::all(),
            'status_kawins'=>status_kawin::all()
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
        // dd($request);
        $validatedData=$request->validate([
            'nik' =>'required|unique:penduduks',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'agama_id' => 'required',
            'status_kawin_id' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'kelurahan_id' => 'required',
        ]);
        Penduduk::create($validatedData);
        return redirect('/penduduk')->with('pesan_tambah','Data Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function show(penduduk $penduduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function edit(penduduk $penduduk)
    {
        return view('dashboard.penduduk.edit',[ 
            'penduduks'=>$penduduk,
            'kelurahans'=>Kelurahan::all(),
            'agamas'=>Agama::all(),
            'status_kawins'=>status_kawin::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, penduduk $penduduk)
    {
        $validateData=$request->validate([
            'nik' =>'required|unique:penduduks',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'agama_id' => 'required',
            'status_kawin_id' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'kelurahan_id' => 'required',
          ]);
          Penduduk::where('id',$penduduk->id)->update($validateData);
          return redirect('/penduduk')->with('pesan_edit','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(penduduk $penduduk, $id)
    {
        Penduduk::destroy($id);
        return redirect('/penduduk')->with('pesan_hapus','Data Berhasil di Hapus');
    }
}
