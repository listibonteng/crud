<?php

use App\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buku = new Buku;
        $buku->judul = 'Belajar PHP';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'Ini adalah .................';
        $buku->status = 1;
        $buku->save();

        $buku = new Buku;
        $buku->judul = 'Belajar PHP2';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = ' Puspita';
        $buku->synopsis = 'Nguk';
        $buku->status = 1;
        $buku->save();
        
        $buku = new Buku;
        $buku->judul = 'Belajar PHP3';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia';
        $buku->synopsis = 'Ngek';
        $buku->status = 1;
        $buku->save();

        $buku = new Buku;
        $buku->judul = 'Belajar PHP4';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia Puspita';
        $buku->synopsis = 'Ngok';
        $buku->status = 1;
        $buku->save(); 
        
        $buku = new Buku;
        $buku->judul = 'Belajar PHP5';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'nfnfn';
        $buku->synopsis = 'Ngik';
        $buku->status = 1;
        $buku->save();
    }
}
