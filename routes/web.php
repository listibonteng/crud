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

Route::get('contoh', 'BukuController@latihan');
Route::get('propil', 'BukuController@latihan2');
Route::get('dede', 'BukuController@latihan3');
Route::get('show', 'BukuController@latihan4');
Route::get('bijil', 'BukuController@soal1');
Route::get('nama', 'BukuController@soal2');
Route::get('menu/{naonwe?}','BukuController@soal3');
Route::get('mkn/{menu?}/{minum?}','BukuController@soal4');
Route::get('makan/{tuang?}/{eet?}/{harga?}','BukuController@soal5');
Route::get('get-buku','BukuController@index');
Route::get('buku','BukuController@buat');
Route::get('delete-buku/{id}','BukuController@delete');
Route::get('update-buku/{id}/{jdl}','BukuController@update');
Route::get('hitung-buku','BukuController@hitungbuku');


Route::get('create/{id}/{nama}/{nis}','SiswaController@buat');
Route::get('tampil/{id}','SiswaController@show');
Route::get('get-siswa','SiswaController@index');
Route::get('hapus/{id}','SiswaController@delete');
Route::get('update/{id}/{nama}/{nis}','SiswaController@update');


//passing data
Route::get('pass', 'PracticeController@pass');

Route::get('piss1', 'PracticeController@pass1');

Route::get('status', 'PracticeController@status');
Route::get('status1/{a?}', 'PracticeController@status1');
Route::get('buku', 'PracticeController@loop');
//book
Route::get('book', 'BukuController@index');
Route::get('book/{id}', 'BukuController@show');

//gaji
Route::get('gaji', 'GajiController@index');
Route::get('penggajihan/{id}', 'GajiController@show');

//belajar blade templating
Route::get('/profil',function(){
    return view('profil');
});
Route::get('/contact',function(){
    return view('contact');
});
Route::get('/blog',function(){
    return view('blog');
});



//relasi

use App\Mahasiswa;
use App\Dosen;
use App\Hobi;

Route::get('relasi-1',function(){
    $mahasiswa = Mahasiswa::where('nim', '=', '1015015072')->first();

    return $mahasiswa->wali->nama;
});

Route::get('relasi-2',function(){
    $mahasiswa = Mahasiswa::where('nim', '=', '1015015072')->first();

    return $mahasiswa->dosen->nama;
});

Route::get('relasi-3',function(){
    $dosen = Dosen::where('nama', '=', 'Abdul Mustofa')->first();
    foreach($dosen->mahasiswa as $temp)
        echo '<li> Nama : '. $temp->nama .'
        <strong>' . $temp->nim . '</strong></li>';
});

Route::get('relasi-4',function(){
    $novay = Mahasiswa::where('nama', '=', 'Noviyanto Rachmadi')
    ->first();
    foreach ($novay->hobi as $temp)
        echo '<li>'. $temp->hobi.'</li>';
});

Route::get('relasi-5',function(){
    $mandi_hujan = Hobi::where('hobi', '=', 'mandi hujan')
    ->first();
    foreach($mandi_hujan->mahasiswa as $temp)
        echo '<li> Nama : '. $temp->nama .
        '<strong>' .$temp->nim.'</strong></li>';
});

Route::get('eloquent', function (){
    $data = Mahasiswa::with('wali', 'dosen', 'hobi')->get();
    return view('eloquent', compact('data'));
});




