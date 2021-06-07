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
        DB::table('beritas')->insert([
            'judul'=>'Ahmad',
            'headline'=>'Malang',
            'isi'=>'9 des 2021',
            'oleh'=>'teknik informatika dan komputer',
        ]);
    }
}
