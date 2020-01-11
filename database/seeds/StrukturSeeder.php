<?php

use App\Struktur;
use Illuminate\Database\Seeder;

class StrukturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $struktur = new Struktur;
        $struktur->tokoh = 'si dahak';
        $struktur->watak = 'Antagonis';
        $struktur->latar = 'di hutan';
        $struktur->alur = 'berbelit';
        $struktur->amanat = 'jangan durhaka';
        $struktur->save();
    }
}
