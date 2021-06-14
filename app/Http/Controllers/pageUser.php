<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Berita;
use App\Models\Admin;
use App\Models\Magang;
use App\Models\KategoriMagang;
use App\Models\KategoriBerita;
use Illuminate\Support\Facades\DB;


class pageUser extends Controller
{
    public function home()
    {
        return view('index');
    }
    public function profil()
    {
        $Profile = Profile::all();
        return view('profil', compact('Profile'));
    }
    public function magang()
    {
        $Magang = Magang::all();
        return view('magang', compact('Magang'));
    }
    public function berita()
    {
        $Berita = Berita::all();
        return view('berita', compact('Berita'));
    }
}
