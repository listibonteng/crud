<?php

namespace App\Http\Controllers;

use App\Gaji;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    public function index(){
        $gaji = Gaji::all();
        return view('gaji.index',compact('gaji'));
    }
    public function show($id){
        $gaji = Gaji::find($id);
        return view('gaji.show',compact('gaji'));
    }
}
