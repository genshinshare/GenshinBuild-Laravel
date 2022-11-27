<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\DataKarakter;

class DashboardController extends Controller
{
    public function index(){
        $karakter = DataKarakter::all();
        return view('dashboard', compact(['karakter']));
    }
    public function search(Request $request){
        if($request->has('cari_nama_karakter')) {
            $karakter = DataKarakter::where('nama_karakter','LIKE','%'.$request->cari_nama_karakter.'%')->get();
        }
        else{
            $karakter = DataKarakter::all();
        }
        return view('Dashboard',['karakter' => $karakter]);
    }
}
