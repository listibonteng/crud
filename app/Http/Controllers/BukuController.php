<?php

namespace App\Http\Controllers;

use App\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function latihan()
    {
        return 'Ini Contoh Latihan Controller';
    }
    public function latihan2()
    {
        $a ='Mahmud';
        $b ='Zulkarnain';

        return 'Nama saya Adalah '.$a.' '.$b;
    }

    public function latihan3(){
        $a ='Listianti';
        return view('test',compact('a'));
    }

    public function latihan4(){
        $a ='Ucup Nurun';
        return view('test2', ['nama' => $a]);
    }

    public function soal1(){
        $nama = 'Listianti';
        $kelas ='XI RPL 3';
        $agama ='Islam';
        $JK ='Perempuan';
        $sklh ='SMK Assalaam';
        $jurusan ='RPL';
        $hobi ='merusak pertemanan';
        $alamat ='Kp.Patrol';
        $umur ='19 tahun';
        return view('biodata', ['N' =>$nama,'A' =>$agama,'K' =>$kelas,
        'jk' =>$JK,'sekolah' =>$sklh,'J' =>$jurusan,
        'H' =>$hobi,'almt' =>$alamat,'U' =>$umur]);
    }

    public function soal2(){
        $nama = ' listi';
        return view('param',compact('nama'));
    }

    public function soal3( $a = null){
        if(isset($a)){
            $a= "Anda memesan $a" ;
        }
        if(!isset($a)){
            $a ='Anda Belum Memesan Sesuatu';
        }
        return view('param1',compact('a'));
    }

    public function soal4( $a = null ,$b = null){
        if(isset($a)){
            $a= "Anda memesan $a " ;
        }
        if(isset($a ,$b)){
            $a= " $a & $b" ;
        }
        if(!isset($a)){
            $a ='Anda Belum Memesan Sesuatu';
        }
        return view('makan2',compact('a' ,'b'));
    }

    public function soal5( $a = null ,$b = null, $c=null){
        

        if(isset($a)){
            $a= "Anda memesan $a " ;
        }
        if(isset($a ,$b)){
            $a= " $a & $b " ;
        
        if(isset($a,$b,$c)){
            if ($c >= 25000) {
                $c = " Ukuran Jumbo";
            }
            else if ($c <= 25000 && $c >= 15000) {
                $c = " Ukuran Medium";
            }
            else if ($c <= 15000) {
                $c = "Ukuran Small";
            }
            else {
                $c = "Harga Failed";
            }
            $a= " $a  $c" ;
        }
        }
        if(!isset($a)){
            $a ='Anda Belum Memesan Sesuatu';
        }
        return view('makan3',compact('a' ,'b','c'));
    }

    public function index(){
        $buku = Buku::all();
        return $buku;
    }
    public function show($id){
        $buku = Buku::find($id);
        return $buku;
    }

    public function buat(){
        $buku = new Buku();
        $buku->judul = "HAHAHAHAHA";
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'sinar jaya';
        $buku->synopsis = 'panjang';
        $buku->status = 1;
        $buku->save();
        return $buku;
    }

    public function update($id){
        $buku = Buku::find($id);
        $buku->judul = "buku update";
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'sinar jaya';
        $buku->synopsis = 'panjang';
        $buku->status = 1;
        $buku->save();
        return $buku;
    }

    public function delete($id){
        $buku = Buku::find($id);
        $buku->delete();
        return $buku;
    }
}
