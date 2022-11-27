<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKarakter;

class KarakterController extends Controller
{
    public function index()
    {
        $karakter = DataKarakter::all();
        return view('dashboard', compact(['karakter']));
    }

    public function create()
    {
        return view('Karakter.create');
    }

    public function store(Request $request)
    {
        DataKarakter::create($request->except(['_token','submit']));
        return redirect('/dashboard/karakter');
    }

    public function edit($id_karakter)
    {
        $karakter = DataKarakter::find($id_karakter);
        return view('Karakter.edit',compact(['karakter']));
    }

    public function update($id, Request $request)
    {
        $karakter = DataKarakter::find($id);
        $karakter->update($request->except(['_token','submit']));
        return redirect('/dashboard/karakter');
    }

    public function destroy($id_karakter){
        $karakter = DataKarakter::find($id_karakter);
        $karakter->delete();
        return redirect('/dashboard/karakter');
    }

    public function search(Request $request){
        if($request->has('cari_nama_karakter')) {
            $karakter = DataKarakter::where('nama_karakter','LIKE','%'.$request->cari_nama_karakter.'%')->get();
        }
        else{
            $karakter = DataKarakter::all();
        }
        return view('Karakter.index_karakter',['karakter' => $karakter]);
    }
}
