<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;

class pegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = pegawai::all();
        // dd($data);
        return view('datapegawai', compact('data')) ;
    }
    public function tambahdata()
    {
        return view('tambahpegawai');
    }
    public function insertdata(Request $request)
    {
        // dd($request->all());
        pegawai::create($request->all());
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Ditambahkan');
    }
    public function tampilkandata($id)
    {
        $data = pegawai::find($id);
        //dd($data);
        return view('tampildata', compact('data'));
    }
    public function updatedata(Request $request, $id)
    {
        $data = pegawai::find($id);
        $data->update($request->all());
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Diedit');
        
    }
    public function delete($id)
    {
        $data = pegawai::find($id);
        $data->delete();
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Dihapus');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = pegawai::where('NIP', $id)->first();
        return view('pegawai/show') ->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
