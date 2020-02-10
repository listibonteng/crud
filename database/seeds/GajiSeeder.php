<?php

use Illuminate\Database\Seeder;
use App\Gaji;
class GajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gaji = new Gaji;
        $gaji->nip = 10001;
        $gaji->nama = 'listi';
        $gaji->agama = 'Islam';
        $gaji->jk = 'cewe';
        $gaji->alamat = 'patrol';
        $gaji->jabatan = 'manager';
        $gaji->jam_kerja = 3;
        $gaji->save();

        $gaji = new Gaji;
        $gaji->nip = 10002;
        $gaji->nama = 'erna';
        $gaji->agama = 'Islam';
        $gaji->jk = 'cewe';
        $gaji->alamat = 'cileubak';
        $gaji->jabatan = 'sekretaris';
        $gaji->jam_kerja = 4;
        $gaji->save();

        $gaji = new Gaji;
        $gaji->nip = 10003;
        $gaji->nama = 'Zupa';
        $gaji->agama = 'Islam';
        $gaji->jk = 'cewe';
        $gaji->alamat = 'leuwi panjang';
        $gaji->jabatan = 'staff';
        $gaji->jam_kerja = 5;
        $gaji->save();



    }
}
