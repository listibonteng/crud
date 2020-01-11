<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Buku;

Route::get('/', function () {
    return view('welcome');
});
Route::get('pesan', function (){
    return('ini halaman pesan');
});
Route::get('hal.1', function (){
    return('halaman ke-1');
});
Route::get('hal.2', function (){
    return('halaman ke-2');
});
Route::get('hal.3', function (){
    return('halaman ke-3');
});

Route::get('variabel', function (){
    $data1 = 'ini variabel data1';
    $data2 = 'ini variabel data2';
    $data3 = 'ini variabel data3';
    $data4 = 'ini variabel data4';
    $data5 = 'ini variabel data5';
    return $data1.'<br>'.$data2.'<br>'.$data3.'<br>'.$data4.'<br>'.$data5;
});

Route::get('angkot/{jurusan}/{jurusan1}', Function(){
    $jurusan = 'cibaduyut-kalapa';
    $data = 'angkot jurusan:';
    $jurusan1 = 'bandung';
    return $data ." ".$jurusan.'<br>'.$data." ".$jurusan1;
});

Route::get('user/{nama}/{alamat}/{no}', function($nama,$alamat,$no){
    return 'Hallo '.$nama. 'yang beralamat di '. $alamat. ' Nomor'.$no;
});

Route::get('user/{nama}/{nilai?}', function($nama,$nilai = 'Nilai Kosong!! tolong masukan nilai'){
    if ($nilai >= 50) {
        echo "Grade Anda A ";
    }
    elseif ($nilai >= 40 && $nilai <= 50 ) {
        echo "Grade Anda B";
    }
    elseif ($nilai >= 30 && $nilai <= 40 ) {
        echo "Grade Anda C";
    }
    elseif ($nilai >= 20 && $nilai <= 30 ) {
        echo "Grade Anda D";
    }
    elseif ($nilai >= 10 && $nilai <= 20 ) {
        echo "Grade Anda E";
    }
    elseif ($nilai == null){
        echo " ";
    }
    return '<br>Hallo '. $nama. '<br>Nilai Anda : '. $nilai;
});


Route::get('/', function () {
    return Buku::all();
});

