<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dosen extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosens')->insert([
            'nip'=>1,
            'nama'=>'Ahmad',
            'tempat_lahir'=>'Malang',
            'tanggal_lahir'=>'9 des 2021',
            'prodi'=>'Vokasi',
            'contact_person' => '082220508262',
            'email'=>'ahmad_madda58@gmail.com',
        ]);
    }
}
