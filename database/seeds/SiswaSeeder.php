<?php

use Illuminate\Database\Seeder;
use App\Siswa;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @void
     */
    public function run()
    {
        $siswa=new Siswa;
        $siswa->nama = "Listianti";
        $siswa->nis = "001";
        $siswa->kelas = "XI RPL 3";
        $siswa->jurusan = "RPL";
        $siswa->alamat = "Patrol";;
        $siswa->tgl_lahir = "2001-05-01";
        $siswa->save();

        $siswa=new Siswa;
        $siswa->nama = "Gopi";
        $siswa->nis = "002";
        $siswa->kelas = "XI RPL 4";
        $siswa->jurusan = "RPL";
        $siswa->alamat = "Patrol";;
        $siswa->tgl_lahir = "2002-05-02";
        $siswa->save();

        $siswa=new Siswa;
        $siswa->nama = "neneng";
        $siswa->nis = "003";
        $siswa->kelas = "XI RPL 5";
        $siswa->jurusan = "RPL";
        $siswa->alamat = "Patrol";;
        $siswa->tgl_lahir = "2003-05-01";
        $siswa->save();
    }
}
