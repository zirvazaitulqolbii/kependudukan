<?php

namespace App\Http\Controllers;

use App\Models\status_kawin;
use Illuminate\Http\Request;

class StatusKawinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.status.index',[
            'status_kawin'=>status_kawin::latest()->paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.status.create',[
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
        $validatedData=$request->validate([
            'status' =>'required',
        ]);
  
       status_kawin::create($validatedData);
       return redirect('/status');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\status_kawin  $status_kawin
     * @return \Illuminate\Http\Response
     */
    public function show(status_kawin $status_kawin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\status_kawin  $status_kawin
     * @return \Illuminate\Http\Response
     */
    public function edit(status_kawin $status_kawin)
    {
        return view('dashboard.status.edit',[
            'status_kawins'=>status_kawin::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\status_kawin  $status_kawin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, status_kawin $status_kawin)
    {
        $validateData=$request->validate([
            'status' =>'required',
          ]);
          status_kawin::where('id')->update($validateData);
          return redirect('/status')->with('pesan_edit','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\status_kawin  $status_kawin
     * @return \Illuminate\Http\Response
     */
    public function destroy(status_kawin $status_kawin, $id)
    {
        status_kawin::destroy($id);
        return redirect('/status')->with('pesan','Data berhasil dihapus');
    }
}
