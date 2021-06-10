<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class berita extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kat_berita')->insert([
            'kategori_berita'=>'Penting',
        ]);

        DB::table('kat_berita')->insert([
            'kategori_berita'=>'Normal',
        ]);
    }
}
