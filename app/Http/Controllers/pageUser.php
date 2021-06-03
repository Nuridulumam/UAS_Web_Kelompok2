<?php

namespace App\Http\Controllers;

class pageUser extends Controller
{
    public function home()
    {
        return view('index');
    }
    public function profil()
    {
        return view('profil');
    }
    public function magang()
    {
        return view('magang');
    }
    public function berita()
    {
        return view('berita');
    }
}
