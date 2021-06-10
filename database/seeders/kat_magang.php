<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kat_magang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kat_magang')->insert([
            'kategori_magang'=>'Front End',
        ]);

        DB::table('kat_magang')->insert([
            'kategori_magang'=>'Back End',
        ]);

        DB::table('kat_magang')->insert([
            'kategori_magang'=>'Full Stack',
        ]);
    }
}
