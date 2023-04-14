<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;

class pegawaiControler extends Controller
{
    function index()
    {
        // $data = pegawai::all();
        $data = pegawai::orderedBy('NIP','desc') ->paginate(1);
        return view('pegawai/index') ->with('data', $data);
    }
    function detail($id)
    {
        $data = pegawai::where('NIP', $id)->first();
        return view('pegawai/show') ->with('data', $data);
    }
    function create()
    {
       
    }
    function delete()
    {
       
    }

}
