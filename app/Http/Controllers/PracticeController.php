<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function pass(){
        $nama = "Ucup Abdul Mustofa";
        $alamat = "Gang Haji Ucup";
        return view('latihan', compact('nama','alamat'));
    }

    public function pass1(){
        $gaji = 2000000;
        return view('latihan1', ['penghasilan'=>$gaji]);
    }

    //pass data parameter
    public function status($status){
        dd($status);
        return view('latihan2', compact($status));
    }

    public function status1($status1 = 'Jomlo'){
        //dd($status);
        return view('latihan2', compact($status1));
    }

        public function loop(){
        
            $buku = [
                ['judul'=>'Bangkit dati Remedial','Penerbit'=>'erlangga',
                'harga'=>'100000','penulis'=>'Aku yang suka remidi'],
                ['judul'=>'tips move on dari kamu','Penerbit'=>'erlangga',
                'harga'=>'150000','penulis'=>'epul'],
                ['judul'=>'kekuatan 1/3 malam','Penerbit'=>'erlangga',
                'harga'=>'250000','penulis'=>'Mutia']
            ];
            return view('coba1',compact('buku'));
        }
    }
