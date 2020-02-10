<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        $siswa = Siswa::all();
        return $siswa;
    }
    public function show($id){
        $siswa = Siswa::find($id);
        return $siswa;
    }

    public function buat(){
        $siswa = new Siswa($id,$nama,$nis);
        $siswa->nama = "$nama";
        $siswa->nis = "$nis";
        $siswa->kelas = "XI RPL 3";
        $siswa->jurusan = "RPL";
        $siswa->alamat = "Patrol";;
        $siswa->tgl_lahir = "2001-05-01";
        return $siswa;
    }

    public function update($id,$nama){
        $siswa = Siswa::find($id);
        $siswa->nama = "$nama";
        $siswa->nis = "004";
        $siswa->kelas = "XI RPL 4";
        $siswa->jurusan = "RPL";
        $siswa->alamat = "Patrol";;
        $siswa->tgl_lahir = "2006-05-06";
        return $siswa;
    }

    public function delete($id){
        $siswa = Siswa::find($id);
        $siswa->delete();
        return $siswa;
    }

    public function hitungbuku(){
        $siswa = Siswa::count();
        return $siswa;
    }
}
