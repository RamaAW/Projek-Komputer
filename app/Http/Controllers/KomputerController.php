<?php

namespace App\Http\Controllers;

use App\Komputer;
use Illuminate\Http\Request;

class KomputerController extends Controller
{
    public function index()
    {
        $batas = 10;
        $data_komputer = Komputer::orderBy('id')->paginate($batas);
        $no = $batas * ($data_komputer->currentPage()-1);
        
        return view('main', compact('data_komputer', 'no'));
    }

    public function create(){
        return view('komputer.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'Jenis_Komputer'         => 'required|string',
            'Spesifikasi'       => 'required|string',
            'Foto'          => 'required|image|mimes:jpeg,jpg,png',
            'Video'          => 'required|image|mimes:jpeg,jpg,png',

        ]);
        $kom = New Komputer();
        $kom->Jenis_Komputer = $request->Jenis_Komputer;
        $kom->Spesifikasi = $request->Spesifikasi;
        $kom->Foto = $request->file('Foto')->store('post-images');
        $kom->Video = $request->file('Video')->store('post-images');
        $kom->save();
        return redirect('/main')->with('pesan', 'Data Komputer berhasil disimpan');
    }
}
