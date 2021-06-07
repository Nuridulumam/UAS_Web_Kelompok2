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
        DB::table('prestasis')->insert([
            'nim' => 1,
            'prestasi'=>'Pemenang Juara Dota',
            'penyelenggara'=>'Steam',
            'judul'=>'International Champhionship 2021',
            'level' => 'Internasional',
        ]);
    }
}
