<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKarakter;

class PageController extends Controller
{
    public function home()
    {
        $karakter = DataKarakter::all();
        return view('/home', compact(['karakter']));
    }
    
    public function karakter($id_karakter)
    {
        $karakter = DataKarakter::find($id_karakter);
        return view('Karakter.templatekarakter',compact(['karakter']));
    }
}
