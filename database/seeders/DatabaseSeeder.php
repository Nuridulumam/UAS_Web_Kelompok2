<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            'no_induk'=>1,
            'nama'=>'Ahmad',
            'tempat'=>'Malang',
            'tanggal_lahir'=>'9 des 2021',
            'prodi'=>'teknik informatika dan komputer',
            'contact_person' => '082220508262',
            'email'=>'ahmad_madda58@gmail.com',
        ]);

        DB::table('mahasiswas')->insert([
            'no_induk'=>2,
            'nama'=>'Madda',
            'tempat'=>'Malang',
            'tanggal_lahir'=>'9 des 2021',
            'prodi'=>'sistem informasi',
            'contact_person' => '082220508262',
            'email'=>'ahmad_madda58@gmail.com',
        ]);

        DB::table('mahasiswas')->insert([
            'no_induk'=>3,
            'nama'=>'Iknajah',
            'tempat'=>'Malang',
            'tanggal_lahir'=>'9 des 2021',
            'prodi'=>'Teknik Elektro',
            'contact_person' => '082220508262',
            'email'=>'ahmad_madda58@gmail.com',
        ]);
    }
}
