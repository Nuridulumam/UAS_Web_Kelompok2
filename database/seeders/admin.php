<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'nip_admin'=>1,
            'username'=>'Morecha',
            'level'=>'Super Admin',
            'email'=>'9 des 2021'
        ]);
    }
}
