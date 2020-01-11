<?php
use App\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genre = new Genre;
        $genre->tema = 'Belajar Laravel';
        $genre->horror = 'kuburan sepiii';
        $genre->romance = 'naruto nikah';
        $genre->fantasi = 'ratu dan raja';
        $genre->komedi = 'haha';
        $genre->save();
    }
}
