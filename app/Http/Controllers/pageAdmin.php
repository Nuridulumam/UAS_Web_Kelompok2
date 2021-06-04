<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_testing;

class pageAdmin extends Controller
{
    public function home()
    {
        return view('Admin.index');
    }

    public function login()
    {
        return view('Admin.login');
    }
    public function kategoriberita()
    {
        return view('Admin.kat-content.k_berita');
    }
    public function kategorimagang()
    {
        $data = M_testing::all()->sortBy('nama');
        return view('Admin.kat-content.k_magang',['datanya'=>$data]);
    }
    public function kategoriprestasi()
    {
        return view('Admin.kat-content.k_prestasi');
    }

    // pengaturan admin
    public function admin()
    {
        return view('Admin.pengaturan');
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
