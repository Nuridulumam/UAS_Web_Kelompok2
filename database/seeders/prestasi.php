<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class prestasi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kat_prestasi')->insert([
            'prestasi'=>'Pemenang Juara Dota',
            'penyelenggara'=>'Steam',
            'judul'=>'International Champhionship 2021',
            'level' => 'Internasional',
        ]);
    }
}
