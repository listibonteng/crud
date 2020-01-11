<?php

use App\Isi;
use Illuminate\Database\Seeder;

class IsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $isi = new Isi;
        $isi->prolog = 'ini adalah prolog';
        $isi->pengantar = 'yaallohhhh maafkan listi....';
        $isi->bab = 'akhir-awal';
        $isi->penutup = 'sekian';
        $isi->epilog = 'ringkasan nya yaaa';
        $isi->save();
    }
}
