<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kat_prestasi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kat_prestasi')->insert([
            'kategori_prestasi'=>'Nasional',
        ]);

        DB::table('kat_prestasi')->insert([
            'kategori_prestasi'=>'Lokal',
        ]);

        DB::table('kat_prestasi')->insert([
            'kategori_prestasi'=>'Internasional',
        ]);
    }
}
