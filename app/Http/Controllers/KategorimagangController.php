<?php

namespace App\Http\Controllers;

use App\Models\KategoriMagang;
use Illuminate\Http\Request;

class KategorimagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kat_magang = KategoriMagang::all();
        return view('Admin.kat-content.k_magang',['kat_magang'=>$kat_magang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.kat-content.show.create_k_magang');
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
     * @param  \App\Models\KategoriMagang  $kategoriMagang
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriMagang $kategoriMagang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriMagang  $kategoriMagang
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriMagang $kategoriMagang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriMagang  $kategoriMagang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriMagang $kategoriMagang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriMagang  $kategoriMagang
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriMagang $kategoriMagang)
    {
        //
    }
}
